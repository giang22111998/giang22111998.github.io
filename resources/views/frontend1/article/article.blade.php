@extends('frontend1.layouts.main')

@section('content')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Giới <span>thiệu </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{route('shop.index')}}">Trang chủ</a><i>|</i></li>
                        <li>Giới thiệu</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    <!-- /banner_bottom_agile_info -->
    <div class="banner_bottom_agile_info">
        <div class="container">
<!--            <div class="agile_ab_w3ls_info">

                <div class="col-md-6 ab_pic_w3ls">
                    <img src="/frontend/images/ab_pic.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 ab_pic_w3ls_text_info">
                    <h5>About Our Elite <span> Shoppy</span> </h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor..</p>
                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                </div>
                <div class="clearfix"></div>

            </div>-->
            <div class="banner_bottom_agile_info">
                <div class="container">
                    @foreach($banners_quangcao as $item)
                        <div class="banner_bottom_agile_info_inner_w3ls">
                            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                                <figure class="effect-roxy">
                                    <img src="{{asset($item->image)}}" alt=" " class="img-responsive"/>
                                    <figcaption>
                                        <h3><span>Xu     </span>    hướng</h3>
                                        <p>{{$item->title}}</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- team -->
    <div class="banner_bottom_agile_info team">
        <div class="container">
            <h3 class="wthree_text_info">Sự kiện <span>cửa hàng</span></h3>
            <div class="inner_w3l_agile_grids">
                @foreach($data as $item)
                    <div class="col-md-3 team-grids">
                        <div class="thumbnail team-w3agile">
                            <img style=" display: inline-block; text-align: center; height: 250px; width: 950px;max-width: 100%; max-height: 100%;"
                                 src="{{asset($item->image)}}" class="img-responsive" alt="">
                            <div class="social-icons team-icons right-w3l fotw33 ">
                                <div class="caption">
                                    <h4>{{$item->title}}</h4>
                                </div>
                                <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                    <li>
                                        <a href="#" class="facebook">
                                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram">
                                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="pinterest">
                                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                @endforeach
               {{-- <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t1.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Joanna Vilken</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li>
                                    <a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t2.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Anika Mollik</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li>
                                    <a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t3.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Megali Deo</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li>
                                    <a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="images/t4.jpg" class="img-responsive" alt="">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Retas Word</h4>
                                <p>Add Short Description</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                <li>
                                    <a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>--}}

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
@endsection
