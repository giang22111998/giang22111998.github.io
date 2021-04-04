@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Cập Nhập Thương Hiệu <a href="{{route('admin.brand.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh Sách Thương Hiệu</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin thương hiệu</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.brand.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input value="{{$data->name}}" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên thương hiệu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh</label>
                                <input type="file" id="new_image" name="new_image">
                                <!-- Hiển thị ảnh cũ -->
                                <br>
                                <img src="{{ asset($data->image) }}" width="300">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input value="{{$data->website}}" type="text" class="form-control" id="website" name="website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position" value="{{$data->position}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_active"{{($data->is_active == 1) ? 'checked' : ''}}> Trạng thái hiển thị
                                    </label>
                                </div>
                            </div>

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
        $(function (){
            // Setup textarea sử dụng plugin Ckeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 500; //Thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; //Thiết lập chiều cao
        })
    </script>
@endsection
