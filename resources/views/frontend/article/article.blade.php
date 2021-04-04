@extends('frontend.layouts.main')

@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/frontend/images/bg-02.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Tin tức
        </h2>
    </section>


    <!-- Content page -->

    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                    @foreach($data as $item)
                        <!-- item blog -->
                        <div class="p-b-63">
                            <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                <img style=" display: inline-block; text-align: center; height: 450px; width: 800px;max-width: 100%; max-height: 100%;"
                                    src="{{asset($item->image)}}" alt="IMG-BLOG">
                            </a>
                            <div class="p-t-32">
                                <h4 class="p-b-15">
                                    <a href="blog-detail.html" class="ltext-108 cl2 hov-cl1 trans-04">
                                        {{$item->title}}
                                    </a>
                                </h4>

                                <p class="stext-117 cl6">
                                    {!!$item->summary   !!}
                                </p>

                                <div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>
                                        <span>
											{{date('d-m-Y',strtotime($item->update_at))}}
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>
										<span>
											StreetStyle, Fashion, Couple
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											8 Bình luận
										</span>
									</span>

                                    <a href="blog-detail.html" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                        Xem thêm

                                        <i class="fa fa-long-arrow-right m-l-9"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <!-- Pagination -->
{{--                        <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">--}}
{{--                            <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">--}}
{{--                                1--}}
{{--                            </a>--}}

{{--                            <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">--}}
{{--                                2--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>

                </div>

                <div class="col-md-4 col-lg-3 p-b-80">
                    <div class="side-menu">
                        <div class="bor17 of-hidden pos-relative">
                            <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Tìm kiếm">

                            <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </div>

                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Menu
                            </h4>

                            <ul>
                                @foreach($menu as $item)
                                    @if($item->parent_id == 0)
                                <li class="bor18">
                                    <a href="{{route('shop.category',['slug' =>$item->slug])}}"
                                       class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                        {{$item->name}}
                                    </a>
                                </li>
                                    @endif
                                @endforeach
                            </ul>

                        </div>

                        <div class="p-t-65">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Sản phẩm nổi bật
                            </h4>

                            <ul>
                                @foreach($hot1_Products as $key => $product)
                                <li class="flex-w flex-t p-b-30">
                                    <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                        <img style=" display: inline-block; text-align: center; height: 125px; width: 100px;max-width: 100%; max-height: 100%;"
                                            src="{{asset($product->image)}}" alt="PRODUCT">
                                    </a>

                                    <div class="size-215 flex-col-t p-t-8">
                                        <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                            {{\Illuminate\Support\Str::limit($product->name,50)}}
                                        </a>

                                        <span class="stext-116 cl6 p-t-20">
											{{number_format($product->sale,0,",",".")}}đ
										</span>
                                    </div>
                                </li>
                                @endforeach
                                    @foreach($hot2_Products as $key => $product)
                                        <li class="flex-w flex-t p-b-30">
                                            <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                                <img style=" display: inline-block; text-align: center; height: 125px; width: 100px;max-width: 100%; max-height: 100%;"
                                                     src="{{asset($product->image)}}" alt="PRODUCT">
                                            </a>

                                            <div class="size-215 flex-col-t p-t-8">
                                                <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                                    {{\Illuminate\Support\Str::limit($product->name,50)}}
                                                </a>

                                                <span class="stext-116 cl6 p-t-20">
											{{number_format($product->sale,0,",",".")}}đ
										</span>
                                            </div>
                                        </li>
                                    @endforeach
                                    @foreach($hot3_Products as $key => $product)
                                        <li class="flex-w flex-t p-b-30">
                                            <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                                <img style=" display: inline-block; text-align: center; height: 125px; width: 100px;max-width: 100%; max-height: 100%;"
                                                     src="{{asset($product->image)}}" alt="PRODUCT">
                                            </a>

                                            <div class="size-215 flex-col-t p-t-8">
                                                <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                                    {{\Illuminate\Support\Str::limit($product->name,50)}}
                                                </a>

                                                <span class="stext-116 cl6 p-t-20">
											{{number_format($product->sale,0,",",".")}}đ
										</span>
                                            </div>
                                        </li>
                                    @endforeach
                                    @foreach($hot4_Products as $key => $product)
                                        <li class="flex-w flex-t p-b-30">
                                            <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                                <img style=" display: inline-block; text-align: center; height: 125px; width: 100px;max-width: 100%; max-height: 100%;"
                                                     src="{{asset($product->image)}}" alt="PRODUCT">
                                            </a>

                                            <div class="size-215 flex-col-t p-t-8">
                                                <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                                    {{\Illuminate\Support\Str::limit($product->name,50)}}
                                                </a>

                                                <span class="stext-116 cl6 p-t-20">
											{{number_format($product->sale,0,",",".")}}đ
										</span>
                                            </div>
                                        </li>
                                    @endforeach
                                    @foreach($hot5_Products as $key => $product)
                                        <li class="flex-w flex-t p-b-30">
                                            <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                                <img style=" display: inline-block; text-align: center; height: 125px; width: 100px;max-width: 100%; max-height: 100%;"
                                                     src="{{asset($product->image)}}" alt="PRODUCT">
                                            </a>

                                            <div class="size-215 flex-col-t p-t-8">
                                                <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                                    {{\Illuminate\Support\Str::limit($product->name,50)}}
                                                </a>

                                                <span class="stext-116 cl6 p-t-20">
											{{number_format($product->sale,0,",",".")}}đ
										</span>
                                            </div>
                                        </li>
                                    @endforeach
                            </ul>
                        </div>

                        <div class="p-t-50">
                            <h4 class="mtext-112 cl2 p-b-27">
                                Tags
                            </h4>

                            <div class="flex-w m-r--5">
                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Fashion
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Lifestyle
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Denim
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Streetstyle
                                </a>

                                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    Crafts
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
