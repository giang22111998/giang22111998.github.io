<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cách 1: Lấy dữ liệu phân trang - mỗi trang 10 bản ghi
        //$data = Article::paginate(5);

        // Cách 2: Lấy dữ liệu mới nhất và phân trang mỗi trang 10 bản ghi
        $data = Article::latest()->paginate(4);

        // Cách 3: Lấy toàn bộ dữ liệu
        //$data = Article::all();
      //  $data = Article::paginate(2);

        return view('backend.article.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.article.create');
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
        //validate dữ liệu
//        $request->validate([
//            'email' => 'required|email|max:255',
//            'password' => 'required|string|min:6'
//        ]); // validate false => tạo ra biến $errors để toàn thông tin bị lỗi cho từng trường
//
//
//        // validate thành công
//
//        $dataLogin = [
//            'email' => $request->input('email'),
//            'password' => $request->input('password')
//        ];

        $article = new Article();
        $article->title = $request->input('title');
        $article->slug =Str::slug($request->input('slug'));//slug
        if($request->hasFile('image')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên banner
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/article/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $article->image = $path_upload.$filename;
        }
        //Sơ lược
        $article->summary = $request->input('summary');
        //Mô tả
        $article->description = $request->input('description');
        //Type
        $article->type = $request->input('type');
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $article->position = $position;
        //Type
        $article->type = $request->input('type');
        //Url
        $article->url = $request->input('url');
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        //Trạng thái
        $article->is_active = $is_active;
        //user_id
        $article->user_id = $request->input('user_id ');
        //Tiêu đề meta
        $article->meta_title = $request->input('meta_title');
        //Mô tả meta
        $article->meta_description = $request->input('meta_description');
        //Lưu
        $article->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.article.index');


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
//        $article = Article::find($id);
        //Cách 2: Trả về dữ liệu article(object), nếu ko trả về lỗi
        $article = Article::findorFail($id);
        return view('backend.article.edit', ['data' => $article]);
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
        $article = Article::findorFail($id);
        $article->title = $request->input('title');
        $article->slug =Str::slug($request->input('slug'));//slug
        if($request->hasFile('new_image')) { //Dòng này kiểm tra xem có image có được chọn
            //Get file
            $file = $request->file('new_image');
            //Đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName();//$file-getClientOriginalName() --Tên banner
            //Định nghĩa đường dẫn sẽ upload lên
            $path_upload ='upload/article/';
            //Thực hiện upload file
            $file->move($path_upload,$filename);
            //Lưu lại cái tên
            $article->image = $path_upload.$filename;
        }
        //Sơ lược
        $article->summary = $request->input('summary');
        //Mô tả
        $article->description = $request->input('description');
        //Type
        $article->type = $request->input('type');
        //Vị trí
        $position = 0;
        if ($request->has('position')){
            $position=$request->input('position');
        }
        $article->position = $position;
        //Type
        $article->type = $request->input('type');
        //Url
        $article->url = $request->input('url');
        //Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra $is_active có tồn tại hay ko?
            $is_active = $request->input('is_active');
        }
        //Trạng thái
        $article->is_active = $is_active;
        //user_id
        $article->user_id = $request->input('user_id ');
        //Tiêu đề meta
        $article->meta_title = $request->input('meta_title');
        //Mô tả meta
        $article->meta_description = $request->input('meta_description');
        //Lưu

        $article->save();
        //Chuyển hướng về trang danh sách
        return  redirect()->route('admin.article.index');
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
        $isDelete = Article::destroy($id);

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
