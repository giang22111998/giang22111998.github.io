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
            Danh Sách Danh Mục <a href="{{route('admin.category.create')}}" class="btn btn-info pull-right"><i
                    class="fa fa-plus"></i> Thêm Danh Mục</a>

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
                            <tbody>
                            <tr>
                                <th class="text-center">TT</th>
                                <th class="text-center">Ngày</th>
                                <th>Tên danh mục</th>
                                <th>Hình ảnh</th>
                                <th class="text-center">Danh mục cha</th>
                                <th class="text-center">Vị Trí</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Loại</th>
                                <th class="text-center">Sơ lược</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </tbody>
                            <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                            @foreach($data as $key => $item)
<!--                                Thêm class cho bảng-->
                                <tr class="item-{{$item->id}}">
                                    <td class="text-center">{{ $key }}</td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
<!--                                        Kiểm tra hình ảnh tồn tại-->
                                        @if (asset($item->image))
                                        <img src="{{($item->image)}}" width="50" height="50">
                                        @endif
                                    </td>
                                    <td class="text-center">{{$item->parent_id}}</td>
                                    <td class="text-center">{{$item->position}}</td>
                                    <td class="text-center">{{$item->is_active}}</td>
                                    <td class="text-center">{{$item->type}}</td>
                                    <td class="text-center">{{$item->summary}}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.category.edit', ['id'=>$item->id])}}"
                                           class="btn bg-orange margin "> <i class="fa fa-pencil-square-o"></i></a>
                                        <button onclick="deleteItem('category',{{$item->id}})"
                                                class="btn bg-navy margin"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin">
                            {{ $data->links() }}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection
