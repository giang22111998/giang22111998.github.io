@extends('frontend.layouts.main')

@section('content')
    {{--    <div class="page-head_agile_info_w3l">
            <div class="container">
                <h3>Liên <span>hệ</span></h3>
                <!--/w3_short-->
                <div class="services-breadcrumb">
                    <div class="agile_inner_breadcrumb">

                        <ul class="w3_short">
                            <li><a href="{{route('shop.index')}}">Trang chủ</a><i>|</i></li>
                            <li>Liên hệ</li>
                        </ul>
                    </div>
                </div>
                <!--//w3_short-->
            </div>
        </div>
        <!--/contact-->
        <div class="banner_bottom_agile_info">
            <div class="container">
                <div class="agile-contact-grids">
                    <div class="agile-contact-left">
                        <div class="col-md-6 address-grid">
                            <h4>Để biết thêm <span>thông tin</span></h4>
                            <div class="mail-agileits-w3layouts">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                <div class="contact-right">
                                    <p>Điện thoại </p><span>{{$setting->phone}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mail-agileits-w3layouts">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <div class="contact-right">
                                    <p>Email </p><a href="mailto:info@example.com">{{$setting->email}}</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mail-agileits-w3layouts">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="contact-right">
                                    <p>Địa chỉ</p><span>{{$setting->address}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
                                <li class="share">Chia sẻ :</li>
                                <li><a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a></li>
                                <li><a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 contact-form">
                            <h4 class="white-w3ls"><span>Phản hồi khách hàng</span></h4>

                            <form role="form" action="{{route('shop.postContact')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="styled-input agile-styled-input-top">
                                    <input type="text" name="name" required="">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="text" name="phone" required="">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="email" name="email" required="">
                                    <label>Email <span class="required">*</span></label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <textarea name="content" required=""></textarea>
                                    <label>Nội dung <span class="required">*</span></label>
                                    <span></span>
                                </div>
                                <input role="alert" type="submit" value="GỬI" id="btnSend" name="submit">
                                @if(session('msg'))
                                    <p style="color: #01FF70" class="glyphicon glyphicon-ok">{{session('msg')}}</p>
                                @endif
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="contact-w3-agile1 map" data-aos="flip-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1881095598137!2d105.82538631493259!3d21.025157986000355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7638a63181%3A0x989ced7c56776da5!2zMTI4IEjDoG8gTmFtLCBDaOG7oyBE4burYSwgxJDhu5FuZyDEkGEsIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1608910310884!5m2!1svi!2s"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <!--        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
                        class="map" style="border:0" allowfullscreen=""></iframe>-->
        </div>

        <div class="banner_bottom_agile_info">
            <div class="container">
                <div class="contact-grid-agile-w3s">
                    <div class="col-md-4 contact-grid-agile-w3">
                        <div class="contact-grid-agile-w31">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Địa chỉ</h4>
                            <p><span>{{$setting->address}}</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid-agile-w3">
                        <div class="contact-grid-agile-w32">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Điện thoại</h4>
                            <p>{{$setting->phone}}<span>{{$setting->hotline}}</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid-agile-w3">
                        <div class="contact-grid-agile-w33">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p><a href="mailto:info@example.com">{{$setting->email}}</a><span><a
                                        href="mailto:info@example.com">info@example2.com</a></span></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--//contact-->--}}

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/frontend/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Liên hệ
        </h2>
    </section>
    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form id="contact-form" action="{{route('shop.postContact')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Gửi tin nhắn cho chúng tôi
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email"
                                   placeholder="Địa chỉ email của bạn">
                            <img class="how-pos4 pointer-none" src="/frontend/images/icons/icon-email.png" alt="ICON">
                        </div>
                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="content"
                                      placeholder="Chúng tôi có thể giúp gì?"></textarea>
                        </div>

                        <button role="alert" type="submit" value="GỬI" id="btnSend" name="submit"
                                class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Gửi
                        </button>
                        @if(session('msg'))
                            <p style="color: #090909" class="glyphicon glyphicon-ok">{{session('msg')}}</p>
                        @endif
                    </form>
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Địa chỉ
							</span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                {{$setting->address}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Điện thoại
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{$setting->phone}}
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Email
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                {{$setting->email}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-w3-agile1 map" data-aos="flip-right">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1504129190303!2d105.84302151461382!3d21.026666785999456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab96bf894437%3A0xdc34f511ab062329!2zNjggSGFpIELDoCBUcsawbmcsIFRy4bqnbiBIxrBuZyDEkOG6oW8sIEhvw6BuIEtp4bq_bSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1611105432986!5m2!1svi!2s"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
@endsection
