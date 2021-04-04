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
use function React\Promise\all;

class ShopcozaController extends GeneralController
{
    public function index()
    {
        //Ảnh banner
        $banners = Banner::where(['is_active' => 1, 'type' => 1])->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();
        // Box sản phẩm hot 1
        $hot1_Products = Product::where(['is_active' => 1, 'position' => 1])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 2
        $hot2_Products = Product::where(['is_active' => 1, 'position' => 2])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 3
        $hot3_Products = Product::where(['is_active' => 1, 'position' => 3])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 4
        $hot4_Products = Product::where(['is_active' => 1, 'position' => 4])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 5
        $hot5_Products = Product::where(['is_active' => 1, 'position' => 5])
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
            $products = Product::where('category_id', $category->id)->where(['is_active' => 1])
                ->limit(8)
                ->orderBy('id', 'desc')
                ->paginate(12);
            $arr[$key]['products'] = $products;
        }
//        dd($arr['product']);

        return view('frontend.index', [
            'banners' => $banners,
            'list' => $arr,
            'data' => $products,
            'hot1_Products' => $hot1_Products,
            'hot2_Products' => $hot2_Products,
            'hot3_Products' => $hot3_Products,
            'hot4_Products' => $hot4_Products,
            'hot5_Products' => $hot5_Products
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
//            'name' => 'required|max:255',
            'email' => 'required|email',
//            'phone' => 'required',
            'content' => 'required'
        ]);
        //Lưu vào db
        $contact = new Contact(); // khởi tạo model
//        $contact->name = $request->input('name');
//        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();
        //chuyển hướng về trang chủ
        return redirect()->route('shop.contact')->with('msg', ' Bạn vừa gửi tin nhắn thành công');
    }

    public function articles()
    {
        // Box sản phẩm hot 1
        $hot1_Products = Product::where(['is_active' => 1, 'position' => 1])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 2
        $hot2_Products = Product::where(['is_active' => 1, 'position' => 2])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 3
        $hot3_Products = Product::where(['is_active' => 1, 'position' => 3])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 4
        $hot4_Products = Product::where(['is_active' => 1, 'position' => 4])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();
        // Box sản phẩm hot 5
        $hot5_Products = Product::where(['is_active' => 1, 'position' => 5])
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get();

        $data = Article::where('is_active', 1)->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
//        $data = Article::where([['is_active', '=', 1]])->get();
//        dd($data);
//Ảnh banner quảng cáo
        $banners_quangcao = Banner::where(['is_active' => 1, 'type' => 5])->orderBy('id', 'DESC')->get();
        return view('frontend.article.article', [
            'banners_quangcao' => $banners_quangcao,
            'data' => $data,
            'hot1_Products' => $hot1_Products,
            'hot2_Products' => $hot2_Products,
            'hot3_Products' => $hot3_Products,
            'hot4_Products' => $hot4_Products,
            'hot5_Products' => $hot5_Products
        ]);
    }

    public function about()
    {
//        $setting = Setting::first();
        return view('frontend.about.about'/*, ['setting' => $setting]*/);
    }

    public function category($slug)
    {

        $category = Category::where(['slug' => $slug])->first();

        $all_products = Product::where(['is_active' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->paginate(12);

        return view('frontend.product.shop', ['category' => $category, 'all_products' => $all_products]);
    }

    public function product($slug ,$id)
    {
        $product = Product::where(['is_active' => 1, 'slug' => $slug])->first();
// get chi tiet sp
        $productIn = Product::find($id);
        if (!$productIn) {
            return $this->notfound();
        }

        $category = Category::find($productIn->category_id);
//
//        $tags = Category::where([
//            ['parent_id' , '<>', 0],
//            ['is_active' , '=', 1]
//        ])->get();

        // step 2 : lấy list 10 SP liên quan
        $relatedProducts = Product::where([
            ['is_active' , '=', 1],
            ['category_id', '=' , $productIn->category_id ],
            ['id', '<>' , $productIn->id]
        ])->orderBy('id', 'desc')
            ->take(10)
            ->get();
        return view('frontend.product.product', [
//            'category' => $category,
            'product' => $product,
            'relatedProducts' => $relatedProducts,
//            'tags' => $tags
            ]);
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
            [
                'products' => $products,
                'totalResult' => $totalResult,
                'keyword' => $keyword ? $keyword : ''
            ]);


    }

 /*   public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm
        $keyword = $request->input('tu-khoa');

        $slug = str_slug($keyword);

        // sql = "SELECT * FROM products WHERE is_active = 1 AND slug LIKE '%$keyword%'"

//        $products = Product::where([['slug', 'like', '%' . $slug . '%'], ['is_active', '=', 1]])->paginate(10);
        $data = $products = Product::searchByQuery(array('match' => array('name' => $keyword)));
        $products = $data->all();
        //Số lượng kết quả tìm kiếm
        $totalResult = $data->count();

        return view('frontend.search.search_product',
            ['product' => $products,
                'totalResult' => $totalResult,
                'keyword' => $keyword ? $keyword : ''
            ]);


    }*/

    public function notfound()
    {
        return view('frontend.notfound.404');
    }
}
