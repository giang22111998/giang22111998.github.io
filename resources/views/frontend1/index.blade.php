@extends('frontend1.layouts.main')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($banners as $key => $item)
                <div class="item {{ ($key == 0) ? 'active' : 'item'}}{{ ($key != 0) ? ($key+1) : '' }}"
                     style="background-image: url('{{ $item->image }}')">
                    <div class="container">
                        <div class="carousel-caption">
                            <!-- <h3>The Biggest <span>Sale</span></h3>
                                    <p>Special for today</p>
                                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a> -->
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
    <!-- //banner quảng cáo -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            @foreach($banners_quangcao as $item)
                <div class="banner_bottom_agile_info_inner_w3ls">
                    <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                        <figure class="effect-roxy">
                            <img src="{{asset($item->image)}}" alt=" " class="img-responsive"/>
                            <figcaption>
                                <h3><span>Xu     </span> hướng</h3>
                                <p>{{$item->title}}</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info"><span>Khuyến mại</span></h3>
            <div class="col-md-4 bb-grids bb-left-agileits-w3layouts">
                @foreach($hot1_Products as $key => $product)
                    <a href="womens.html">
                        <div class="bb-left-agileits-w3layouts-inner grid">
                            <figure class="effect-roxy">
                                <img src="{{asset($product->image)}}" alt=" " class="img-responsive"/>
                                <figcaption>
                                    <h3><span>S</span>ale </h3>
                                    <p>Upto 20%</p>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
                @foreach($hot2_Products as $key => $product)
                    <a href="mens.html">
                        <div class="bb-middle-agileits-w3layouts grid">
                            <figure class="effect-roxy">
                                <img src="{{asset($product->image)}}" alt=" " class="img-responsive"/>
                                <figcaption>
                                    <h3><span>S</span>ale </h3>
                                    <p>Upto 20%</p>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
                @foreach($hot3_Products as $key => $product)
                    <a href="mens.html">
                        <div class="bb-middle-agileits-w3layouts grid">
                            <figure class="effect-roxy">
                                <img src="{{asset($product->image)}}" alt=" " class="img-responsive"/>
                                <figcaption>
                                    <h3><span>S</span>ale </h3>
                                    <p>Upto 20%</p>
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                @endforeach
            </div>

            {{--            <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">--}}
            {{--                        @foreach($hot3_Products as $key => $product)--}}
            {{--                <a href="mens.html">--}}
            {{--                    <div class="bb-middle-agileits-w3layouts forth grid">--}}
            {{--                        <figure class="effect-roxy">--}}
            {{--                            <img src="{{asset($product->image)}}" alt=" " class="img-responsive">--}}
            {{--                            <figcaption>--}}
            {{--                                <h3><span>S</span>ale </h3>--}}
            {{--                                <p>Upto 65%</p>--}}
            {{--                            </figcaption>--}}
            {{--                        </figure>--}}
            {{--                    </div>--}}
            {{--                </a>--}}
            {{--                    @endforeach--}}
            {{--<!--                <div class="clearfix"></div>-->--}}
            {{--            </div>--}}
        </div>
    </div>
    <!--/grids-->
    <!--    <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
                <a href="womens.html"><img src="/frontend/images/bot_1.jpg" alt=" ">
                    <h4>Flat <span>50%</span> offer</h4>
                </a>

            </div>
            <div class="col-md-6 multi-gd-img multi-gd-text ">
                <a href="womens.html"><img src="/frontend/images/bot_2.jpg" alt=" ">
                    <h4>Flat <span>50%</span> offer</h4>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>-->
    <!--/grids-->
    <!-- /new_arrivals -->
    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">

            <h3 class="wthree_text_info"><span>Sản phẩm mới</span></h3>
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    @foreach($list as $item)
                        <li> {{ $item['category']->name }}</li>
                    @endforeach
                    <div class="resp-tabs-container">
                        @foreach($list as $key => $item)
                            <div class="tab{{ ($key + 1)}}">
                                @foreach($item['products'] as $product)
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                @if($product->image)
                                                    <img src="{{asset($product->image)}}" alt=""
                                                         class="pro-image-front">
                                                @else
                                                    <img src="{{asset('found not')}}" alt="" class="pro-image-back">
                                                @endif
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="{{route('shop.product',['slug' =>$product->slug])}}"
                                                           class="link-product-add-cart">Chi tiết</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">New</span>

                                            </div>
                                            <div class="item-info-product ">
                                                <h4>
                                                    <a href="{{route('shop.product',['slug' =>$product->slug])}}">{{\Illuminate\Support\Str::limit($product->name,50)}}</a>
                                                </h4>
                                                <div class="info-product-price">
                                                    <span class="item_price"><a
                                                            href="{{route('shop.product',['slug' =>$product->slug])}}">{{number_format($product->sale,0,",",".")}}đ</a></span>
                                                    <del>{{number_format($product->price,0,",",".")}}đ</del>
                                                </div>
                                                <div
                                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart"/>
                                                            <input type="hidden" name="add" value="1"/>
                                                            <input type="hidden" name="business" value=" "/>
                                                            <input type="hidden" name="item_name"
                                                                   value="Formal Blue Shirt"/>
                                                            <input type="hidden" name="amount" value="30.99"/>
                                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                                            <input type="hidden" name="currency_code" value="USD"/>
                                                            <input type="hidden" name="return" value=" "/>
                                                            <input type="hidden" name="cancel_return" value=" "/>
                                                            <input type="submit" name="submit" value="Thêm vào giỏ"
                                                                   class="button"/>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        @endforeach
                    </div>
                </ul>

            </div>
        </div>

    </div>
    <!-- //new_arrivals -->
    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6>We Offer Flat <span>40%</span> Discount</h6>

            <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
        </div>
    </div>
    <!-- //we-offer -->
    <!--/grids-->
@endsection
