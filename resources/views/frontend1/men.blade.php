@extends('frontend1.layouts.main')

@section('content')
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- mens -->
            <div class="col-md-4 products-left">
                <div class="filter-price">
                    <h3>Filter By <span>Price</span></h3>
                    <ul class="dropdown-menu6">
                        <li>
                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>
                <div class="css-treeview">
                    <h4>Categories</h4>
                    <ul class="tree-list-pad">
                        <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Men's Wear</label>
                            <ul>
                                <li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Ethnic Wear</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Caps</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                        <li><a href="mens.html">Pants</a></li>
                                        <li><a href="mens.html">SunGlasses</a></li>
                                        <li><a href="mens.html">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox"  id="item-0-1" /><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Party Wear</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Caps</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                        <li><a href="mens.html">Pants</a></li>
                                        <li><a href="mens.html">SunGlasses</a></li>
                                        <li><a href="mens.html">Trousers</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox"  id="item-0-2" /><label for="item-0-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Casual Wear</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Caps</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                        <li><a href="mens.html">Pants</a></li>
                                        <li><a href="mens.html">SunGlasses</a></li>
                                        <li><a href="mens.html">Trousers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Best Collections</label>
                            <ul>
                                <li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> New Arrivals</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                        <li><a href="mens.html">Pants</a></li>
                                        <li><a href="mens.html">SunGlasses</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Best Offers</label>
                            <ul>
                                <li><input type="checkbox"  id="item-2-0" /><label for="item-2-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Summer Discount Sales</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                        <li><a href="mens.html">Pants</a></li>
                                        <li><a href="mens.html">SunGlasses</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-2-1" /><label for="item-2-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Exciting Offers</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                        <li><a href="mens.html">Pants</a></li>
                                        <li><a href="mens.html">SunGlasses</a></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Flat Discounts</label>
                                    <ul>
                                        <li><a href="mens.html">Shirts</a></li>
                                        <li><a href="mens.html">Shoes</a></li>
                                        <li><a href="mens.html">Pants</a></li>
                                        <li><a href="mens.html">SunGlasses</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="community-poll">
                    <h4>Community Poll</h4>
                    <div class="swit form">
                        <form>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
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
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-top">

                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src="/frontend/images/banner2.jpg" alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="/frontend/images/banner5.jpg" alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="/frontend/images/banner2.jpg" alt=" "/>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="/frontend/images/bb2.jpg" alt=" " />
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4>Exclusive Men's <span>Collections</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                            odit aut fugit. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m8.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m8.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Party Men's Blazer</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$260.99</span>
                                <del>$390.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Party Men's Blazer">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m7.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m7.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Analog Watch</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$160.99</span>
                                <del>$290.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Analog Watch">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/s1.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/s1.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Running Shoes</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$80.99</span>
                                <del>$89.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Running Shoes">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

            <div class="single-pro">
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m1.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m1.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$45.99</span>
                                <del>$69.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Formal Blue Shirt" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m2.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m2.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Gabi Full Sleeve Sweatshirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$45.99</span>
                                <del>$69.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Sweatshirt" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m3.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m3.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Dark Blue Track Pants</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$80.99</span>
                                <del>$89.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Dark Blue Track Pants" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m4.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m4.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Round Neck Black T-Shirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$190.99</span>
                                <del>$159.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Black T-Shirt" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m5.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m5.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Men's Black Jeans</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$60.99</span>
                                <del>$90.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Men's Black Jeans" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m7.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m7.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Analog Watch</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$160.99</span>
                                <del>$290.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Analog Watch" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m6.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m6.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Reversible Belt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$30.99</span>
                                <del>$50.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Reversible Belt" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="/frontend/images/m8.jpg" alt="" class="pro-image-front">
                            <img src="/frontend/images/m8.jpg" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Party Men's Blazer</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$260.99</span>
                                <del>$390.71</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Party Men's Blazer" />
                                        <input type="hidden" name="amount" value="30.99" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //mens -->
    <!--/grids-->
    <div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE SHIPPING</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>24/7 SUPPORT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE GIFT COUPONS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>


@endsection
@section('script')
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>

    <script type='text/javascript'>//<![CDATA[
        $(window).load(function(){
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 9000,
                values: [ 1000, 7000 ],
                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

        });//]]>

    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
@endsection
