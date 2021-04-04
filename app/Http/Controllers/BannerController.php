<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BannerController extends Controller
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
        $data = Banner::latest()->paginate(5);

        // Cách 3: Lấy toàn bộ dữ liệu
        //$data = Banner::all();
        //$data = Banner::paginate(10);

        return view('backend.banner.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
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
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'position' => 'required|integer'
        ]); // validate false => tạo ra biến $errors để toàn thông tin bị lỗi cho từng trường



        //step 2: Khởi tạo Model và gán giá trị từ form cho những thuộc tính của đối tượng (Cột trong CSDL)
        $banner = new Banner();
        $banner->title = $request->input('title');
        $banner->slug =Str::slug($request->input('title'));//slug
        if($request->hasFile('image')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên banner
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/banner/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $banner->image = $path_upload.$filename;
        }
        //Url
        $banner->url = $request->input('url');
        //Target
        $banner->target = $request->input('target');
        //Type
        $banner->type = $request->input('type');
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        //Trạng thái
        $banner->is_active = $is_active;
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $banner->position = $position;
        //Mô tả
        $banner->description = $request->input('description');
        //Lưu
        $banner->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.banner.index');
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
//        $banner = Banner::find($id);
        //Cách 2: Trả về dữ liệu banner(object), nếu ko trả về lỗi
        $banner = Banner::findorFail($id);
        return view('backend.banner.edit', ['data' => $banner]);
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
        //step 1: validate dữ liệu
        $request->validate([
            'title' => 'required|max:255',
            /*'image' => 'required|image',*/
            'url' => 'required|url',
            'position' => 'required|integer',
            'type' => 'required',
            'target' => 'required',
            'description' => 'required',
        ]); // validate false => tạo ra biến $errors để toàn thông tin bị lỗi cho từng trường
        $banner = Banner::findorFail($id);
        $banner->title = $request->input('title');
        $banner->slug =Str::slug($request->input('title'));//slug
        if($request->hasFile('new_image')) { //Dòng này kiểm tra ảnh mới có được chọn hay ko
            //Xóa file ảnh cũ
            //hàm @unlink của PHP
            //(Lưu ý: thêm @ đằng trước tránh bị lỗi. Mục đích thêm @ là nếu có lỗi thì sẽ bỏ qua )
            @unlink(public_path($banner->image));
            //get new_image
            $file = $request->file('new_image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên banner
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/banner/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $banner->image = $path_upload.$filename;
        }
        //Url
        $banner->url = $request->input('url');
        //Target
        $banner->target = $request->input('target');
        //Type
        $banner->type = $request->input('type');
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        //Trạng thái
        $banner->is_active = $is_active;
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $banner->position = $position;
        //Mô tả
        $banner->description = $request->input('description');
        //Lưu
        $banner->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.banner.index');
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
        $isDelete = Banner::destroy($id);

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
