<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>Vận chuyển</h3>
                    <p>Miễn phí giao hàng</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>Hỗ trợ 24/7</h3>
                    <p>Tư vấn sản phẩm</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>Hoàn trả lại tiền</h3>
                    <p>Sản phẩm lỗi, không đúng với đơn đặt hàng</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>Tặng quà miễn phí</h3>
                    <p>Các ngày lễ lớn</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>

<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <h2><a href="index.html"><span>E</span>lite Shoppy </a></h2>
            <p></p>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Thông tin <span>sản phẩm</span> </h4>
                    @foreach($menu as $item)
                        @if($item->parent_id == 0)
                    <ul>
                        <li><a href="index.html">{{$item->name}}</a></li>

                    </ul>
                        @endif
                    @endforeach
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Thông tin <span>liên hệ</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Phone Number</h6>
                                <p>{{$setting->phone}}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:example@email.com"> {{$setting->email}}</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Location 1</h6>
                                <p>{{$setting->address}}</p>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="w3-address-right">
                                <h6>Location 2</h6>
                                <p>{{$setting->address2}}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="single.html"><img src="/frontend/images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/frontend/images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        </div>
        <p class="copy-right">&copy eliteshoppy.com.vn <a href="http://eliteshoppy.com/">Eliteshoppy</a></p>
    </div>
</div>
