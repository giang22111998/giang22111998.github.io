<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Brand;
use App\Category;
use App\Contact;
use App\Article;
use App\Product;
use App\Setting;
use Illuminate\Http\Request;

class ShopController extends GeneralController
{
    public function index()
    {
        //Ảnh banner
        $banners = Banner::where(['is_active' => 1, 'type' => 1])->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();

        //Ảnh banner quảng cáo
        $banners_quangcao = Banner::where(['is_active' => 1, 'type' => 5])->orderBy('id', 'DESC')->get();

        /*//Ảnh banner quảng cáo 2
        $banners2 = Banner::where(['is_active'=> 1,'position'=> 6])->orderBy('id', 'DESC')->get();*/

        // Box sản phẩm hot 1
        $hot1_Products = Product::where(['is_active' => 1, 'position' => 30])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 2
        $hot2_Products = Product::where(['is_active' => 1, 'position' => 29])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 3
        $hot3_Products = Product::where(['is_active' => 1, 'position' => 28])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();

        // step 1 - lấy toàn bộ danh mục cha
        $categories = Category::where([
            'is_active' => 1,
            'parent_id' => 0, // danh mục cha

        ])->limit(4)->orderBy('position', 'ASC')->get();
        $arr = [];

        // step 2 lấy tất cả danh mục con theo danh mục cha
        foreach ($categories as $key => $category) {

            $arr[$key]['category'] = $category;

            $ids = [$category->id]; // [1]

            $childCategories = Category::where([
                'is_active' => 1,
                'parent_id' => $category->id // danh mục cha
            ])->get();

            foreach ($childCategories as $child) {
                $ids[] = $child->id; // thêm các phần tử vào mảng
            } // $ids = 7,8,9,11..

            // ids = [1,7,8,9,11,...] : toàn bộ id của dạnh mục cha + con

//            dd($ids);

            $products = Product::whereIn('category_id', $ids)->where(['is_active' => 1])
                ->limit(8)
                ->orderBy('id', 'desc')
                ->paginate(8);

            $arr[$key]['products'] = $products;

        }

        return view('frontend.index', [
            'banners' => $banners,
            'banners_quangcao' => $banners_quangcao,
            'list' => $arr,
            'data' => $products,
            'hot1_Products' => $hot1_Products,
            'hot2_Products' => $hot2_Products,
            'hot3_Products' => $hot3_Products
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('frontend.contact.contact', ['setting' => $setting]);
    }

    public function postContact(Request $request)
    {
        //Vadidate
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'content' => 'required'
        ]);
        //Lưu vào db
        $contact = new Contact(); // khởi tạo model
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();
        //chuyển hướng về trang chủ
        return redirect()->route('shop.contact')->with('msg', ' Bạn vừa gửi tin nhắn thành công');
    }

    public function getArticles()
    {
        $data = Article::where('is_active', 1)->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
//        $data = Article::where([['is_active', '=', 1]])->get();
//        dd($data);
//Ảnh banner quảng cáo
        $banners_quangcao = Banner::where(['is_active' => 1, 'type' => 5])->orderBy('id', 'DESC')->get();
        return view('frontend.article.article', ['banners_quangcao' => $banners_quangcao, 'data' => $data]);
    }

    public function category($slug)

    {
        //Ảnh banner
        $banners = Banner::where(['is_active' => 1, 'type' => 1])->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();

        $category = Category::where(['slug' => $slug])->first();
        $brands = Brand::where(['is_active' => 1])->get();

        $all_products = Product::where(['is_active' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->paginate(5);


        return view('frontend.product.shop', ['banners' => $banners, 'category' => $category, 'brands' => $brands, 'all_products' => $all_products]);
    }

    public function product($slug)
    {
        $product = Product::where(['is_active' => 1, 'slug' => $slug])->first();

        return view('frontend.product.product', ['product' => $product,]);
    }

    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm
        $keyword = $request->input('tu-khoa');

        $slug = str_slug($keyword);

        // sql = "SELECT * FROM products WHERE is_active = 1 AND slug LIKE '%$keyword%'"

        $products = Product::where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1]])->paginate(10);

        //Số lượng kết quả tìm kiếm
        $totalResult = $products->total();

        return view('frontend.search.search_product',
            ['product' => $products,
                'totalResult' => $totalResult,
                'keyword' => $keyword ? $keyword : ''
            ]);


    }

    public function cart()
    {
        return view('frontend.cart.cart');
    }

    public function notfound()
    {
        return view('frontend.notfound.404');
    }
}
