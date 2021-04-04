@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm mới liên hệ <a href="{{route('admin.contact.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh sách liên hệ</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin liên hệ</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.contact.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập tên</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Nhập tên...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                           placeholder="Nhập số điện thoại...">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Nhập Email...">
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn bg-purple btn-flat margin btn-lg btn-block">Tạo
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea id="content1" name="content" class="form-control" rows="10"
                                              placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
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
            var _ckeditor = CKEDITOR.replace('content1');
            _ckeditor.config.height = 500; //Thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('content2');
            _ckeditor.config.height = 200; //Thiết lập chiều cao
        })
    </script>
@endsection

