@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm mới bài viết <a href="{{route('admin.article.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh sách bài biết</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin bài viết</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.article.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           placeholder="Nhập tiêu đề...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh</label>
                                    <input type="file" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Loại</label>
                                    <select class="form-control" name="type">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position" value="0">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tùy chỉnh liên kết Url</label>
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Url">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_active"> Trạng thái hiển thị
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User_Id</label>
                                    <input type="number" class="form-control" id="user_id" name="position" value="0">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sơ lược</label>
                                    <textarea id="editor1" name="summary" class="form-control" rows="10"
                                              placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea id="editor2" name="description" class="form-control" rows="10" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <textarea id="editor3" name="status" class="form-control" rows="10" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề Meta</label>
                                    <textarea type="text" class="form-control" id="editor4" name="meta_title"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả Meta</label>
                                    <textarea type="text" class="form-control" id="editor5" name="meta_description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="box-footer">
                                    <button type="submit" class="btn bg-purple btn-flat margin btn-lg btn-block">Tạo</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
            // Setup textarea sử dụng plugin Ckeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 500; //Thiết lập chiều cao

            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; //Thiết lập chiều cao

            var _ckeditor = CKEDITOR.replace('editor3');
            _ckeditor.config.height = 100; //Thiết lập chiều cao

            var _ckeditor = CKEDITOR.replace('editor4');
            _ckeditor.config.height = 100; //Thiết lập chiều cao

            var _ckeditor = CKEDITOR.replace('editor5');
            _ckeditor.config.height = 100; //Thiết lập chiều cao

        })
    </script>
@endsection

