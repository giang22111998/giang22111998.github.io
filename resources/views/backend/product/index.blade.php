@extends('backend.layouts.main')

@section('content')
    <style>
        tr td:first-child {
            max-width: 250px;
        }

        .rating .active {
            color: #fd9727 !important;
        }
    </style>
    <section class="content-header">
        <h1>
            Danh Sách Sản Phẩm <a href="{{route('admin.product.create')}}" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Thêm sản phẩm</a>
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
                                    <th style="max-with:200px">Tên Sản Phẩm</th>
                                    <th>Danh Mục</th>
                                    <th>Hình Ảnh</th>
                                    <th>Giá Khuyến mại</th>
                                    <th>Giá Gốc</th>
                                    <th>Số Lượng</th>
                                    <th>Sản phẩm Hot</th>
                                    <th>Trạng Thái</th>
                                    <th>Vị Trí</th>
                                    <th class="text-center">Hành Động</th>
                                </tr>
                                </tbody>
                                <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                                @foreach($data as $key => $item)
                                    <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                        <td class="text-center">{{ $key }}</td>
                                        <td class="text-center">{{ $item->created_at }}</td>
                                        <td>{{\Illuminate\Support\Str::limit($item->name,30)}}</td>

                                        <td>{{ @$item->category->name }}</td>
                                        <td>
                                        @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                            <img src="{{asset($item->image)}}" width="50" height="50">
                                        @endif
                                        </td>

                                        <td>{{ number_format($item->sale) }}</td>
                                        <td>{{ number_format($item->price) }}</td>
                                        <td class="text-center">{{$item->stock}}</td>
                                        <td class="text-center">{{ ($item->is_hot == 1) ? 'Có' : 'Không' }}</td>
                                        <td class="text-center">{{ ($item->is_active == 1) ? 'Hiển thị' : 'Ẩn' }}</td>
                                        <td class="text-center">{{$item->position}}</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.product.edit', ['id'=> $item->id])}}" class="btn bg-orange margin "> <i class="fa fa-pencil-square-o"></i></a>
                                            <button onclick="deleteItem('product',{{ $item->id }})" class="btn bg-navy margin"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin">
                                {{ $data->links() }}
                            </ul>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
@endsection
