<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Đăng Nhập</title>
    <script src="{{ asset('login/js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('login/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <!--header start here-->
    <div class="header">
        <div class="header-main">
            <h1>Đăng Nhập</h1>
            <div class="header-bottom">
                <div class="header-right w3agile">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						@foreach ($errors->all() as $err)
							{{ $err }}<br>
						@endforeach
					</div>
				@endif

				@if (session('Thongbao'))
						{{ session('Thongbao') }}
				@endif
                    <div class="header-left-bottom agileinfo">

                        <form action="{{ route('loginUser') }}" method="post">
							{{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                            @csrf
                            <input type="text" value="user_name" name="user_name" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'user_name';}" />
                            <input type="password" value="password" name="password" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'password';}" />
                            <div class="remember">
                                <span class="checkbox1">
                                    <label class="checkbox"><input type="checkbox" name="" checked=""><i>
                                        </i>Lưu Tài Khoản</label>
                                </span>
                                <div class="forgot">
                                    <h6><a href="{{route('forgotPW')}}">Quên mật khẩu?</a></h6>
                                </div>
                                <div class="clear"> </div>
                            </div>

                            <input type="submit" value="Login">
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--header end here-->
        <div class="copyright">
            <p>Copyright© 2021 Thăng Long University Login Form. All rights reserved</a></p>
        </div>
        <!--footer end here-->
</body>

</html>
