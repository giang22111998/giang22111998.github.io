<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="">
                    <i class="fa fa-calendar"></i> <span>Bảng Điều Khiển</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.category.index')}}">
                    <i class="fa fa-folder-open-o"></i> Quản Lý Danh Mục
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.product.index')}}">
                    <i class=" fa fa-database"></i> Quản Lý Sản Phẩm
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.order.index')}}">
                    <i class="fa fa-cart-plus"></i> Quản Lý Đơn Đặt Hàng
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.brand.index')}}">
                    <i class="fa fa-id-card"></i> Quản Lý Thương Hiệu
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.article.index')}}">
                    <i class="fa  fa-newspaper-o"></i> Quản Lý Bài Viết
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.contact.index')}}">
                    <i class="fa fa-compress"></i> Quản Lý Liên Hệ
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.banner.index')}}">
                    <i class="fa fa-photo"></i> Quản Lý Hình Ảnh
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.vendor.index')}}">
                    <i class="fa fa-align-justify"></i> Quản Lý Nhà Cung Cấp
                </a>
            </li>

            <li class="">
                <a href="{{route('admin.user.index')}}">
                    <i class="fa fa-user"></i> Quản Lý Người Dùng
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.setting.index')}}">
                    <i class="fa fa-gear"></i> Cài Đặt Website
                </a>
            </li>
        </ul>
    </section>

</aside>
