@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Cập nhật Cung Cấp <a href="{{route('admin.user.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh sách người dùng</a>
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
                    <form role="form" action="{{route('admin.user.update',['id'=>$user->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cấp quyền</label>
                                    <select class="form-control" name="role_id">
                                        <option>-- chọn --</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role -> id}}" {{ ($user->role_id == $role->id) ? 'selected' : ''}}>{{$role -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên người dùng</label>
                                    <input value="{{$user->name}}" type="text" class="form-control" id="name"
                                           name="name"
                                           placeholder="Nhập tên...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input value="{{$user->email}}" type="email" class="form-control" id="email"
                                           name="email"
                                           placeholder="Nhập Email...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật khẩu mới</label>
                                    <input value="" type="password" class="form-control"
                                           id="password"
                                           name="password" placeholder="Nhập mật khẩu...">
                                </div>
                                <div class="form-group">
                                    <label for="remember_token">Xác nhận mật khẩu mới</label>
                                    <input value="" type="password" class="form-control"
                                           id="remember_token" name="remember_token" placeholder="Nhập mật khẩu...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vai trò</label>
                                    <select class="form-control" name="role_id">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1"
                                                   name="is_active" {{($user->is_active == 1) ? 'checked' : ''}}> Trạng thái hiển thị
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thay đổi ảnh</label>
                                    <input type="file" id="new_avatar" name="new_avatar">
                                    <!-- Hiển thị ảnh cũ -->
                                    <br>
                                    @if($user->avatar)
                                        <img src="{{ asset($user->avatar) }}" width="300">
                                    @endif
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
