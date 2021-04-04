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
           Danh sách bài viết <a href="{{route('admin.article.create')}}" class="btn btn-info pull-right"><i
                    class="fa fa-plus"></i> Thêm mới bài viết</a>
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
                                <td>TT</td>
                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>Sơ lược</th>
                                <th>Mô tả</th>
                                <th>Loại</th>
                                <th>Vị Trí</th>
                                <th>Status</th>
                                <th>Website</th>
                                <th>Trạng thái</th>
                                <th>User_ID</th>
                                <th>Tiêu đề Meta</th>
                                <th>Mô tả Meta</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </tbody>
                            <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                            @foreach($data as $key => $item)
                                <tr class="item-{{$item->id}}"> {{--Thêm class cho bảng--}}
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        @if ($item->image)  {{--Kiểm tra hình ảnh tồn tại--}}
                                        <img src="{{asset($item->image)}}" width="50" height="50">
                                        @endif
                                    </td>
                                    <td>{!!\Illuminate\Support\Str::limit($item->summary,40)!!}</td>
                                    <td>{{\Illuminate\Support\Str::limit($item->description,50)}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->position}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->url}}</td>
                                    <td>{{$item->is_active}}</td>
                                    <td>{{$item->user_id}}</td>
                                    <td>{{$item->meta_title}}</td>
                                    <td>{{$item->meta_description}}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.article.edit', ['id'=>$item->id])}}"
                                           class="btn bg-orange margin "> <i class="fa fa-pencil-square-o"></i></a>
                                        <button onclick="deleteItem('article',{{$item->id}})"
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
