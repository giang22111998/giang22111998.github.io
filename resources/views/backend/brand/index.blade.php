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
           Danh sách Thương Hiệu <a href="{{route('admin.brand.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus"> </i> Thêm Thương hiệu</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-tools">
                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Tìm kiếm...">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <td>TT</td>
                                <th>Tên thương hiệu</th>
                                <th>Hình Ảnh</th>
                                <th>Website</th>
                                <th class="text-center">Vị Trí</th>
                                <th class="text-center">Trạng Thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr class="item-{{$item->id}}"> {{--Thêm class cho bảng--}}
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @if ($item->image)  {{--Kiểm tra hình ảnh tồn tại--}}
                                            <img src="{{asset($item->image)}}" width="50" height="50">
                                            @endif
                                    </td>
                                    <td>{{$item->website}}</td>
                                    <td class="text-center">{{$item->position}}</td>
                                    <td class="text-center">{{($item->is_active == 1) ? 'Hiển thị' : 'Ẩn'}}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.brand.edit', ['id'=>$item->id])}}" class="btn bg-orange margin "><i class="fa fa-pencil-square-o"></i></a>
                                        <button onclick="deleteItem('brand',{{$item->id}})" class="btn bg-navy margin"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin">
                            {{ $data->links() }}
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('script')
    <script>
        $(function () {
            $('#example1').DataTable();
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
