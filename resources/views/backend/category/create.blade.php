@extends('backend.layouts.main')

@section('content')
    <style>.w-50 {
            width: 50%
        }</style>
    <section class="content-header">
        <h1>
            {{--            Thêm mới Danh mục <a href="{{route('admin.category.index')}}" type="button" class="btn bg-purple btn-flat margin btn-lg">Danh sách</a>--}}
<!--            Thêm mới sản phẩm <a href="{{route('admin.category.index')}}"
                                 class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh Sách Sản Phẩm</a>-->
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Danh mục</h3>
                        <a href="{{route('admin.category.index')}}"
                           class="btn btn-flat btn-success pull-right "><i
                                class="fa fa-list"></i> Danh Sách Sản Phẩm</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.category.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục sản phẩm</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">-- chọn --</option>
                                        @foreach($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại</label>
                                    <select class="form-control" name="type">
                                        <option>-- chọn --</option>
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Nhập tên danh mục">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert"
                                              style="color:red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh</label>
                                    <input type="file" id="image" name="image">
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert"
                                              style="color:red;">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="is_active"> Trạng thái hiển thị
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input type="number" class="form-control" id="position" name="position" value="0">
                            </div>
                            @if ($errors->has('position'))
                                <span class="invalid-feedback" role="alert"
                                      style="color:red;">{{ $errors->first('position') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="from-group">
                                <label>Sơ lược</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10"></textarea>
                            </div>
                        </div>

                </div>
            </div>
            <!-- /.box-body -->
            <div class="from-group">
                <div class="box-footer">
                    <button type="submit" class="btn bg-purple btn-flat margin btn-lg btn-block">Tạo mới</button>
                </div>
            </div>
            </form>
        </div>
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
