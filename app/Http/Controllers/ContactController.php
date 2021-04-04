<?php

namespace App\Http\Controllers;


use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cách 1: Lấy dữ liệu phân trang - mỗi trang 10 bản ghi
        //$data = contact::paginate(5);

        // Cách 2: Lấy dữ liệu mới nhất và phân trang mỗi trang 10 bản ghi
        $data = contact::latest()->paginate(7);

        // Cách 3: Lấy toàn bộ dữ liệu
//        $data = Contact::all();
        //$data = Contact::paginate(10);

        return view('backend.contact.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.contact.create');
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

        $contact = new Contact();
        $contact->name = $request->input('name');
        //Phone
        $contact->phone = $request->input('phone');
        //Email
        $contact->email = $request->input('email');
        //Content
        $contact->content = $request->input('content');
        //Lưu
        $contact->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.contact.index');
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
        // Cách 1: Lấy chi tiết contact theo id
//        $contact = contact::find($id);
        //Cách 2: Trả về dữ liệu contact(object), nếu ko trả về lỗi
        $contact = Contact::findorFail($id);
        return view('backend.contact.edit', ['data' => $contact]);
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
        $contact = Contact::findorFail($id);
        $contact->name = $request->input('name');
        //Phone
        $contact->phone = $request->input('phone');
        //Email
        $contact->email = $request->input('email');
        //Content
        $contact->content = $request->input('content');
        //Lưu
        $contact->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.contact.index');
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
        $isDelete = Contact::destroy($id);

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
