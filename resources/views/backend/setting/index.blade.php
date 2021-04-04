@extends('backend.layouts.main')

@section('content')
    <style>
        tr td:first-child {max-width: 250px ;}
        .rating .active{
            color: #fd9727 !important;
        }
    </style>
    <section class="content-header">
        <h1>
            Thông tin cấu hình website
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action="{{ route('admin.setting.update', ['id' => $setting->id ]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Công ty (Doanh nghiệp,Cửa hàng,...)</label>
                                <input value="{{ $setting->company }}" type="text" class="form-control" id="company"
                                       name="company" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh Logo</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($setting->image)
                                    <img src="{{ asset($setting->image) }}" width="200">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Chi nhánh 1 (Cơ sở 1)</label>
                                <input value="{{ $setting->address }}" type="text" class="form-control" id="address"
                                       name="address" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Chi nhánh 2 (Cơ sở 2)</label>
                                <input value="{{ $setting->address2 }}" type="text" class="form-control" id="address2"
                                       name="address2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input value="{{ $setting->phone }}" type="text" class="form-control" id="phone"
                                       name="phone" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hotline</label>
                                <input value="{{ $setting->hotline }}" type="text" class="form-control" id="hotline"
                                       name="hotline" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">MST</label>
                                <input value="{{ $setting->tax }}" type="text" class="form-control" id="tax"
                                       name="tax" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input value="{{ $setting->facebook }}" type="text" class="form-control" id="facebook"
                                       name="facebook" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ $setting->email }}" type="text" class="form-control" id="email"
                                       name="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link bài viết giới thiệu</label>
                                <input value="{{ $setting->introduce }}" type="text" class="form-control" id="introduce"
                                       name="introduce" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <input value="{{ $setting->description }}" type="text" class="form-control" id="editor1"
                                       name="description" placeholder="">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
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
            _ckeditor.config.height = 400; //Thiết lập chiều cao


        })
    </script>
@endsection
