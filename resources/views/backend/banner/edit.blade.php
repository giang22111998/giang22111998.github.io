@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Cập nhập Banner <a href="{{route('admin.banner.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh sách Banner</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Banner</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.banner.update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input value="{{$data->title}}" type="text" class="form-control" id="title"
                                           name="title" placeholder="Nhập tên tiêu đề">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thay đổi ảnh</label>
                                    <input type="file" id="new_image" name="new_image">
                                    <!-- Hiển thị ảnh cũ -->
                                    <br>
                                    <img src="{{ asset($data->image) }}" width="300">
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Loại</label>
                                    <select class="form-control" name="type">
                                        <option value="1"{{($data->type == 1) ? 'selected' : ''}}>Slide</option>
                                        <option value="2"{{($data->type == 2) ? 'selected' : ''}}>Background</option>
                                        <option value="3"{{($data->type == 3) ? 'selected' : ''}}>Banner right</option>
                                        <option value="4"{{($data->type == 4) ? 'selected' : ''}}>Banner left</option>
                                        <option value="5"{{($data->type == 5) ? 'selected' : ''}}>Ảnh quảng cáo</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('type') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Target</label>
                                    <select class="form-control" name="target">
                                        <option value="_blank" {{($data->target =='_blank') ? 'selected' : ''}}>_blank
                                        </option>
                                        <option value="_self"{{($data->target =='_self') ? 'selected' : ''}}>_self
                                        </option>
                                    </select>
                                    @if ($errors->has('target'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('target') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tùy chỉnh liên kết Url</label>
                                    <input value="{{$data->url}}" type="text" class="form-control" id="url" name="url"
                                           placeholder="Url">
                                    @if ($errors->has('url'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('url') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position"
                                           value="{{$data->position}}">
                                    @if ($errors->has('position'))
                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('position') }}</span>
                                    @endif
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1"
                                               name="is_active" {{($data->is_active == 1) ? 'checked' : ''}}> Trạng thái
                                        hiển thị
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea id="editor1" name="description" class="form-control" rows="10"
                                              placeholder="Enter ...">{{$data->description}}</textarea>
                                </div>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn bg-purple btn-flat margin btn-lg btn-block">Lưu
                                </button>
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
            // Setup textarea sử dụng plugin Ckeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 500; //Thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200; //Thiết lập chiều cao
        })
    </script>
@endsection
