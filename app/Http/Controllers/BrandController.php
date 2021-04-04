<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cách 1: Lấy dữ liệu phân trang - mỗi trang 10 bản ghi
        //$data = Brand::paginate(5);

        // Cách 2: Lấy dữ liệu mới nhất và phân trang mỗi trang 10 bản ghi
        $data = Brand::latest()->paginate(7);

        // Cách 3: Lấy toàn bộ dữ liệu
//        $data = Brand::all();
        //$data = Brand::paginate(10);
        return view('backend.brand.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
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
        //step 2: Khởi tạo Model và gán giá trị từ form cho những thuộc tính của đối tượng (Cột trong CSDL)

        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->slug =Str::slug($request->input('name')); //slug
        if($request->hasFile('image')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên brand
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/brand/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $brand->image = $path_upload.$filename;
        }
        //Website
        $brand->website = $request->input('website');
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $brand->position = $position;
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        $brand->is_active = $is_active;
        //Lưu
        $brand->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.brand.index');
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
        // Cách 1: Lấy chi tiết banner theo id
//        $brand = Banner::find($id);
        //Cách 2: Trả về dữ liệu banner(object), nếu ko trả về lỗi
        $brand = Brand::findorFail($id);
        return view('backend.brand.edit', ['data' => $brand]);
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
        $brand = Brand::findorFail($id);
        $brand->name = $request->input('name');
        $brand->slug =Str::slug($request->input('name')); //slug
        if($request->hasFile('new_image')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('new_image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên brand
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/brand/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $brand->image = $path_upload.$filename;
        }
        //Website
        $brand->website = $request->input('website');
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $brand->position = $position;
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        $brand->is_active = $is_active;
        //Lưu
        $brand->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.brand.index');
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
        $isDelete = Brand::destroy($id);

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
