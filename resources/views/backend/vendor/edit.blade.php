@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Cập nhật Cung Cấp <a href="{{route('admin.vendor.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh sách nhà cung cấp</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin nhà cung cấp</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.vendor.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                                    <input value="{{$data->name}}" type="text" class="form-control" id="name" name="name"
                                           placeholder="Nhập tên...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input value="{{$data->phone}}" type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <textarea type="text" class="form-control" id="pwd" name="address" >{{$data->address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thay đổi ảnh</label>
                                    <input type="file" id="new_image" name="new_image">
                                    <!-- Hiển thị ảnh cũ -->
                                    <br>
                                    <img src="{{ asset($data->image) }}" class="img-rounded" width="300">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input value="{{$data->email}}" type="email" class="form-control" id="email" name="email"
                                           placeholder="Nhập Email...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input value="{{$data->website}}" type="text" class="form-control" id="website" name="website">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position" value="{{$data->position}}">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_active" {{($data->is_active == 1) ? 'checked' : ''}}> Trạng thái hiển thị
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn bg-purple btn-flat margin btn-lg btn-block">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection

<script>
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
    })
</script>
