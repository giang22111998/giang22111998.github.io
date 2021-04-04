<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cách 1: Lấy dữ liệu phân trang - mỗi trang 10 bản ghi
        //$data = Banner::paginate(5);

        // Cách 2: Lấy dữ liệu mới nhất và phân trang mỗi trang 10 bản ghi
        $data = Category::latest()->paginate(5);

        // Cách 3: Lấy toàn bộ dữ liệu
//        $data = Category::all();
        //$data = Category::paginate(10);

        return view('backend.category.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 1. lấy toàn bộ dữ danh mục
        $categories = Category::all();

        // 2. max postion
        $max_position = Category::max('position');

        return view('backend.category.create',['data' => $categories, 'max_position' => $max_position]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //step 1: validate dữ liệu

/*        $request->validate([
            'name' => 'required',
        ], [
            'name.required'  => 'Thiếu dữ liệu'
        ]);*/

//        $request->validate([
//            'name' => 'required|name',
//            'image' => 'required|image',
//            'parent_id' => 'required|parent_id',
//            'position' => 'required|integer',
//            'is_active' => 'required|is_active',
//            'type' => 'required|type',
//
//        ]); // validate false => tạo ra biến $errors để toàn thông tin bị lỗi cho từng trường
        //step 2: Khởi tạo Model và gán giá trị từ form cho những thuộc tính của đối tượng (Cột trong CSDL)
        $category = new Category();
        $category-> name = $request->input('name');

        $category->slug =Str::slug($request->input('name'));//slug
        if($request->hasFile('image')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên banner
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/category/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại tên
            $category->image = $path_upload.$filename;
        }
        //Type
        $category->type = $request->input('type');
        //Type
        $category->parent_id = $request->input('parent_id');
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $category->position = $position;

        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        $category->is_active = $is_active;
        $category->save();
        //chuyển hướng trạng thái về danh sách
        return  redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Cách 1: Lấy chi tiết category theo id
//        $category = Category::find($id);
        //Cách 2: Trả về dữ liệu category(object), nếu ko trả về lỗi
        $category = Category::findorFail($id);
        return view('backend.category.edit', ['data' => $category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category =Category::findorFail($id);
        $category-> name = $request->input('name');
        $category->slug =Str::slug($request->input('name'));//slug
        if($request->hasFile('new_image')) { //Dòng này kiểm tra ảnh mới có được chọn hay ko
            //Xóa file ảnh cũ
            //hàm @unlink của PHP
            //(Lưu ý: thêm @ đằng trước tránh bị lỗi. Mục đích thêm @ là nếu có lỗi thì sẽ bỏ qua )
            @unlink(public_path($category->image));
            //Get file
            $file = $request->file('new_image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên banner
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/category/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại tên
            $category->image = $path_upload.$filename;
        }
        //Type
        $category->type = $request->input('type');
        //Type
        $category->parent_id = $request->input('parent_id');
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $category->position = $position;

        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        $category->is_active = $is_active;

        $category->save();
        //chuyển hướng trạng thái về danh sách
        return  redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // gọi tới hàm destroy của laravel để xóa 1 object
        // DELETE FROM ten_bang WHERE id = 33 -> execute command
        $isDelete = Category::destroy($id);

        if ($isDelete) { // xóa thành công
            $statusCode = 200;
            $isSuccess = true;
        } else {
            $statusCode = 400;
            $isSuccess = false;
        }

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'isSuccess' => $isSuccess
        ], $statusCode);
    }
}
