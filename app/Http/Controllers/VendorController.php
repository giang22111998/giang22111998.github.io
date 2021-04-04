<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VendorController extends Controller
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
        $data = Vendor::latest()->paginate(5);

        // Cách 3: Lấy toàn bộ dữ liệu
        //$data = Vendor::all();
        //$data = Vendor::paginate(10);
        return view('backend.vendor.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.vendor.create');
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

        $vendor = new Vendor();
        //Tên
        $vendor->name = $request->input('name');
        $vendor->slug =Str::slug($request->input('name'));//slug
        if($request->hasFile('image')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên banner
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/vendor/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $vendor->image = $path_upload.$filename;
        }
        //Email
        $vendor->email = $request->input('email');
        //Phone
        $vendor->phone = $request->input('phone');
        //Website
        $vendor->website = $request->input('website');
        //Address
        $vendor->address = $request->input('address');
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        $vendor->is_active = $is_active;
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $vendor->position = $position;
        //Lưu
        $vendor->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.vendor.index');
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
        // Cách 1: Lấy chi tiết vendor theo id
//        $vendor = Vendor::find($id);
        //Cách 2: Trả về dữ liệu vendor(object), nếu ko trả về lỗi
        $vendor= Vendor::findorFail($id);
        return view('backend.vendor.edit', ['data' => $vendor]);

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
        $vendor = Vendor::findorFail($id);
        //Tên
        $vendor->name = $request->input('name');
        $vendor->slug =Str::slug($request->input('name'));//slug
        if($request->hasFile('new_image')) { //Dòng này kiểm tra ảnh mới có được chọn hay ko
            //Xóa file ảnh cũ
            //hàm @unlink của PHP
            //(Lưu ý: thêm @ đằng trước tránh bị lỗi. Mục đích thêm @ là nếu có lỗi thì sẽ bỏ qua )
            @unlink(public_path($vendor->image));
            //get new_image
            //Get file
            $file = $request->file('new_image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên vendor
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/vendor/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $vendor->image = $path_upload.$filename;
        }
        //Email
        $vendor->email = $request->input('email');
        //Phone
        $vendor->phone = $request->input('phone');
        //Website
        $vendor->website = $request->input('website');
        //Address
        $vendor->address = $request->input('address');
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        $vendor->is_active = $is_active;
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $vendor->position = $position;
        //Lưu
        $vendor->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.vendor.index');
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
        $isDelete = Vendor::destroy($id);

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
