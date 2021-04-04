@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Cập nhập Danh mục <a href="{{route('admin.category.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh Sách Sản Phẩm</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục sản phẩm</label>
                                    <input type="number" class="form-control" id="parent_id" name="parent_id" value="{{$data->parent_id}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại</label>
                                    <input type="number" class="form-control" id="type" name="type" value="{{$data->type}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input value="{{$data->name}}" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh</label>
                                    <input type="file" id="new_image" name="new_image">
                                    <!-- Hiển thị ảnh cũ -->
                                    <br>
                                    <img src="{{ asset($data->image) }}" width="300">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="is_active" {{($data->is_active == 1) ? 'checked' : ''}}> Trạng thái hiển thị
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control" id="position" name="position" value="{{$data->position}}">
                            </div>

                                <label>Sơ lược</label>
                                <textarea id="editor1" name="summary" class="form-control" rows="10"
                                          placeholder="Enter ...">{{$data->summary}}</textarea>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn bg-purple btn-flat margin btn-lg btn-block">Lưu</button>
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
            // setup textarea sử dụng plugin CKeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 500; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; // thiết lập chiều cao
        })
    </script>
@endsection
