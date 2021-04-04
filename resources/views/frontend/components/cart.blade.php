<!-- Shoping Cart -->
@if(count($cart))
    <div id="my-cart">
        <form class="bg0 p-t-75 p-b-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-1">Sản phẩm</th>
                                        <th class="column-2"></th>
                                        <th class="column-3">Giá</th>
                                        <th class="column-4">Số lượng</th>
                                        <th class="column-5">Tổng giá</th>
                                    </tr>
                                    @foreach($cart as $item)
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="{{asset($item->options->image)}}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{$item->name}}</td>
                                            <td class="column-3"> {{number_format($item->price,0,",",".")}} VNĐ</td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product"
                                                           type="number" name="qty" class="quantity  item-qty" value="{{ $item->qty }}">

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                                <input style="color: #01FF70"
                                                    data-id="{{ $item->rowId }}"
                                                    class="submit update-qty" name="update_cart" value="Cập nhật" type="submit">
                                            </td>
<!--                                            <td class="plantmore-product-quantity quantity css-input">
                                                <input type="number" name="qty" class="quantity  item-qty" value="{{ $item->qty }}" >
                                                <br>
                                                <div class="input-color">
                                                    <input data-id="{{ $item->rowId }}" class="submit update-qty" name="update_cart" value="Cập nhật" type="submit">
                                                </div>
                                            </td>-->
                                            <td class="column-5">{{ number_format($item->qty * $item->price ,0,",",".") }} VNĐ</td>

                                        </tr>
                                @endforeach
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <div class="flex-w flex-m m-r-20 m-tb-5">
                                    <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                                    <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                        Áp dụng phiếu giảm giá
                                    </div>
                                </div>

                                {{--                        <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">--}}
                                {{--                            Cập nhật giỏ hàng--}}
                                {{--                        </div>--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Tổng số giỏ hàng
                            </h4>

                            <div class="flex-w flex-t bor12 p-b-13">
                                <div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
                                </div>

                                <div class="size-209">
								<span class="mtext-110 cl2">
									{{ $totalPrice }} VNĐ
								</span>
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
                                </div>

                                <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                    <p class="stext-111 cl6 p-t-2">
                                        There are no shipping methods available. Please double check your address, or contact us if you need any help.
                                    </p>

                                    <div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>

                                        <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                            <select class="js-select2" name="time">
                                                <option>Select a country...</option>
                                                <option>USA</option>
                                                <option>UK</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>

                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
                                        </div>

                                        <div class="bor8 bg0 m-b-22">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
                                        </div>

                                        <div class="flex-w">
                                            <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                                Update Totals
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
                                </div>

                                <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									$79.65
								</span>
                                </div>
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Proceed to Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@section('my_javascript')
    <script type="text/javascript">
        $(function () {
            // xóa sản phẩm khỏi giỏ hàng
            $(document).on("click", '.remove-to-cart', function () {
                var result = confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng ?");
                if (result) {
                    var product_id = $(this).attr('data-id');
                    $.ajax({
                        url: '/gio-hang/xoa-sp-gio-hang/' + product_id,
                        type: 'get',
                        data: {
                            id: product_id
                        }, // dữ liệu truyền sang nếu có
                        dataType: "HTML", // kiểu dữ liệu trả về
                        success: function (response) {
                            $('#my-cart').html(response);
                        },
                        error: function (e) { // lỗi nếu có
                            console.log(e.message);
                        }
                    });
                }
            });

            // cập nhật số lượng của từng sản phẩm trong giỏ hàng
            $(document).on("click", '.update-qty', function (e) {
                var rowId = $(this).attr('data-id');
                var qty = $(this).closest('.quantity').find('.item-qty').val(); // lấy số lượng của ô input

                // Kiểm tra Nếu không phải là số nguyên Hoặc số lượng < 1
                if (isNaN(qty) || qty < 1) {
                    alert("Số lượng là số nguyên lớn hơn >= 1");
                    $(this).closest('.quantity').find('.item-qty').val(1);
                    return false;
                }

                $.ajax({
                    url: '/gio-hang/cap-nhat-so-luong-sp',
                    type: 'get',
                    data: {
                        rowId: rowId,
                        qty: qty
                    }, // dữ liệu truyền sang nếu có
                    dataType: "HTML", // kiểu dữ liệu trả về
                    success: function (response) {
                        if (response != false) {
                            $('#my-cart').html(response);
                        }
                    },
                    error: function (e) { // lỗi nếu có
                        console.log(e.message);
                    }
                });
            });
        })
    </script>
@endsection

@else
    <style>
        .buyother {
            display: block;
            overflow: hidden;
            background: #fff;
            line-height: 40px;
            text-align: center;
            margin: 15px auto;
            width: 300px;
            font-size: 14px;
            color: #82ae46;
            font-weight: 700;
            text-transform: uppercase;
            border: 2px solid #82ae46;
            border-radius: 5px;
        }
    </style><br>
    <h3 class="text-center"><i class="fa fa-opencart"></i>Bạn chưa có sản phẩm trong giỏ hàng</h3>
    <a href="/" class="buyother"><i class="fa fa-chevron-left"></i> Trang chủ</a>
@endif
