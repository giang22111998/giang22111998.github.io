<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cách 1: Lấy dữ liệu phân trang - mỗi trang 10 bản ghi
        //$data = User::paginate(5);

        // Cách 2: Lấy dữ liệu mới nhất và phân trang mỗi trang 10 bản ghi
        $data = User::latest()->paginate(5);

        // Cách 3: Lấy toàn bộ dữ liệu
        //  $data = User::all();
        //$data = User::paginate(5);
        return view('backend.user.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all(); //Lấy toàn bộ quyền
        return view('backend.user.create',['roles'=>$roles]);

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

        $User = new User();
        //Tên
        $User->name = $request->input('name');
        //Email
        $User->email =$request->input('email');
        //Password
        $User->password = bcrypt($request->input('password'));
        //Remember_token
        $User->remember_token = $request->input('remember_token');
        //Role_id
        $User->role_id = $request->input('role_id');

        if($request->hasFile('avatar')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('avatar');
            //Đặt tên cho file avatar
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên User
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/user/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $User->avatar = $path_upload.$filename;
        }
        //Trạng thái
//        $is_active = 0;
//        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
//            $is_active = $request->input('is_active');
//        }
//        $User->is_active = $is_active;
        //Lưu
        $User->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.user.index');
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
        // Cách 1: Lấy chi tiết User theo id
//        $User = User::find($id);
        //Cách 2: Trả về dữ liệu User(object), nếu ko trả về lỗi

        $user= User::findOrFail($id);
        $roles = Role::all(); //Lấy toàn bộ quyền
        return view('backend.user.edit', ['user' => $user, 'roles' =>$roles]);

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
        $User = User::findorFail($id);
        $User->name = $request->input('name');
        //Email
        $User->email = $request->input('email');
        //Password
        if($request->input('new_password')){
            $user->password = bcrypt($request->input('new_password'));
        }
        //Remember_token
        if($request->input('new_remember_token')){
            $user->remember_token = $request->input('new_remember_token');
        }
        //Role_id
        $User->role_id = $request->input('role_id');
        if($request->hasFile('new_avatar')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('new_avatar');
            //Đặt tên cho file avatar
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên User
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/user/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $User->avatar = $path_upload.$filename;
        }
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        $User->is_active = $is_active;
        //Lưu

        $User->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.user.index');
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
        $isDelete = User::destroy($id);

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
