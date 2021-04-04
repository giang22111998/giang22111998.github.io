<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/backend/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/backend/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/backend/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" role="form" action="{{route('admin.postLogin')}}" method="post">
                @csrf
					<span class="login100-form-title p-b-43">
						Admin Login
					</span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember password
                        </label>
                    </div>

                    {{--						<div>--}}
                    {{--							<a href="/backend/login/#" class="txt1">--}}
                    {{--								Quên mật khẩu--}}
                    {{--							</a>--}}
                    {{--						</div>--}}
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

{{--                <div class="text-center p-t-46 p-b-20">--}}
{{--                    <span class="txt2">hoặc đăng ký bằng cách sử dụng</span>--}}
{{--                </div>--}}

{{--                <div class="login100-form-social flex-c-m">--}}
{{--                    <a href="/backend/login/#" class="login100-form-social-item flex-c-m bg1 m-r-5">--}}
{{--                        <i class="fa fa-facebook-f" aria-hidden="true"></i>--}}
{{--                    </a>--}}

{{--                    <a href="/backend/login/#" class="login100-form-social-item flex-c-m bg2 m-r-5">--}}
{{--                        <i class="fa fa-twitter" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </form>

            <div class="login100-more"
                 style="background-image: url('/backend/login/images/pexels-pixabay-261579.jpg');">
            </div>
        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="/backend/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/backend/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/backend/login/vendor/bootstrap/js/popper.js"></script>
<script src="/backend/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/backend/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/backend/login/vendor/daterangepicker/moment.min.js"></script>
<script src="/backend/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/backend/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/backend/login/js/main.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
