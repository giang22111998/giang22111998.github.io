@extends('frontend.layouts.main')

@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/frontend/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
           Giỏ hàng của bạn
        </h2>
    </section>
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Shoping Cart
			</span>
        </div>
    </div>
<div id="my-cart">
    @include('frontend.components.cart')
</div>


@endsection



