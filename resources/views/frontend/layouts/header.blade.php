<header class="header-v3">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop p-l-45">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="/frontend/images/icons/logo-02.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="/">Trang chủ</a>
                        </li>

                        <li>
                            <a href="#">Cửa hàng</a>
                            <ul class="sub-menu">
                                @foreach($menu as $item)
                                    @if($item->parent_id == 0)
                                <li><a href="{{route('shop.category',['slug' =>$item->slug])}}">{{$item->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>

                        {{--                        <li class="label1" data-label1="hot">--}}
                        {{--                            <a href="shoping-cart.html">Features</a>--}}
                        {{--                        </li>--}}

                        <li>
                            <a href="{{route('shop.articles')}}">Tin tức</a>
                        </li>

                        <li>
                            <a href="{{route('shop.about')}}">Giới thiệu</a>
                        </li>

                        <li>
                            <a href="{{route('shop.contact')}}">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m h-full">
                    <div class="flex-c-m h-full p-r-25 bor6">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti " data-notify="{{ !empty(session('totalItem')) ? session('totalItem') : 0 }}">
                            <a href="{{ route('shop.cart') }}" class="nav-link">
                                <i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class="flex-c-m h-full p-lr-19">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="/frontend/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
            <div class="flex-c-m h-full p-r-5">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart"
                     data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="{{route('shop.category',['slug' =>$item->slug])}}">Trang chủ</a>

            </li>

            <li>
                <a href="/">Cửa hàng</a>
                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
                <ul class="sub-menu-m">
                    @foreach($menu as $item)
                        @if($item->parent_id == 0)
                            <li><a href="{{route('shop.category',['slug' =>$item->slug])}}">{{$item->name}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>

            {{--            <li>--}}
            {{--                <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>--}}
            {{--            </li>--}}

            <li>
                <a href="{{route('shop.articles')}}">Tin tức</a>
            </li>

            <li>
                <a href="{{route('shop.about')}}">Giới thiệu</a>
            </li>

            <li>
                <a href="{{route('shop.contact')}}">Liên hệ</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04">
            <i class="zmdi zmdi-close"></i>
        </button>

        <form class="container-search-header">
            <div class="wrap-search-header">
                <input class="plh0" type="text" name="search" placeholder="Search...">

                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </form>
    </div>
</header>
