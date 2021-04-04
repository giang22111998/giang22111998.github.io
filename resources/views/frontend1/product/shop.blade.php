@extends('frontend1.layouts.main')

@section('content')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">

                <div class="container">
                    <div class="services-breadcrumb">
                        <div class="agile_inner_breadcrumb" style="margin-top: 6%">
                            <ul class="w3_short">
                                <li><a href="{{route('shop.index')}}">Trang chủ</a><i>|</i></li>
                                <li>{{$category->name}}</li>

                            </ul>
                        </div>
                    </div>
                    <!--//w3_short-->
                </div>

    </div>
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- mens -->
            <div class="col-md-3 products-left">
                <div class="filter-price">
                    <h3>Tìm kiếm <span>sản phẩm</span></h3>
                    <ul class="dropdown-menu6">
                        <li>
                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;"/>
                        </li>
                    </ul>
                </div>

                <div class="css-treeview">
                    <h4>Thể loại sản phẩm</h4>
                    <ul class="tree-list-pad">
                        @php
                            $dem = 0;
                        @endphp
                        @foreach($menu as $item)
                            @if($item->parent_id == 0)

                                <li><input type="checkbox" checked="checked" id="item-{{ $dem }}"/><label
                                        for="item-{{ $dem }}"><i class="fa fa-long-arrow-right"
                                                                 aria-hidden="true"></i> {{$item->name}}</label>
                                    <ul>
                                    @foreach($menu as $child)
                                        @if($child->parent_id == $item->id)
                                            <!--<li><input type="checkbox" id="item-0-0" />
                                    <label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        <a href="{{route('shop.category',['slug' =>$child->slug])}}">{{ $child->name }}</a></label></li>-->
                                                <ul>
                                                    <li>
                                                        <a href="{{route('shop.category',['slug' =>$child->slug])}}">{{ $child->name }}</a>
                                                    </li>
                                                </ul>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @php
                                    $dem++;
                                @endphp
                            @endif
                        @endforeach
                    </ul>
                </div>
                @foreach($brands as $brand)
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="{{asset($brand->image)}}" alt=" "/>
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4><span>{{$brand->name}}</span></h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @endforeach
                <div class="community-poll">
                    <h4>Community Poll</h4>
                    <div class="swit form">
                        <form>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio" checked=""><i></i>More
                                        convenient for shipping and delivery</label></div>
                            </div>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio"><i></i>Lower Price</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio"><i></i>Track your
                                        item</label></div>
                            </div>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio"><i></i>Bigger Choice</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio"><i></i>More colors to choose</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio"><i></i>Secured
                                        Payment</label></div>
                            </div>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio"><i></i>Money back guaranteed</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="radio"><label><input type="radio" name="radio"><i></i>Others</label></div>
                            </div>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-9 products-right">
                <h5>Product <span>Compare(0)</span></h5>
                <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sort By</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Default</option>
                            <option value="null">Name(A - Z)</option>
                            <option value="null">Name(Z - A)</option>
                            <option value="null">Price(High - Low)</option>
                            <option value="null">Price(Low - High)</option>
                            <option value="null">Model(A - Z)</option>
                            <option value="null">Model(Z - A)</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sorting">
                        <h6>Showing</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">7</option>
                            <option value="null">14</option>
                            <option value="null">28</option>
                            <option value="null">35</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @foreach($all_products as $product)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->image)}}" alt="" class="pro-image-front">
                                <img src="{{asset('found not')}}" alt="" class="pro-image-back">
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
                                            <input type="hidden" name="item_name" value="Formal Blue Shirt"/>
                                            <input type="hidden" name="amount" value="30.99"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>

                <div class="pagination" style="text-align: center">
                        {{ $all_products->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>

@endsection

