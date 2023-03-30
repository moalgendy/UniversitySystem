<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getlocale() == "ar" ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/fonts/iconic/css/material-design-iconic-font.min.css') }}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/vendor/animate/animate.css') }}">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/vendor/css-hamburgers/hamburgers.min.css') }}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/vendor/animsition/css/animsition.min.css') }}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/vendor/select2/select2.min.css') }}">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/vendor/daterangepicker/daterangepicker.css') }}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/css/util.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('login_v3/css/main.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Scripts -->
        @vite([ 'resources/js/app.js','public/login_v3/vendor/jquery/jquery-3.2.1.min.js','public/login_v3/vendor/animsition/js/animsition.min.js','public/login_v3/vendor/bootstrap/js/popper.js','public/login_v3/js/main.js','public/login_v3/vendor/countdowntime/countdowntime.js','public/login_v3/vendor/daterangepicker/daterangepicker.js','public/login_v3/vendor/daterangepicker/moment.min.js','public/login_v3/vendor/select2/select2.min.js','public/login_v3/vendor/bootstrap/js/bootstrap.min.js'])



        @if (App::getLocale() == 'en')
            
        @else
            
            <style>
                .input100 {
                font-family: Poppins-Regular;
                font-size: 16px;
                color: #fff;
                line-height: 1.2;

                display: block;
                width: 100%;
                height: 45px;
                background: transparent;
                padding: 0 38px 0 5px;
                }

                .label-checkbox100 {
                font-family: Poppins-Regular;
                font-size: 17px;
                color: #fff;
                line-height: 1.2;

                display: block;
                position: relative;
                padding-right: 26px;
                cursor: pointer;
                letter-spacing: 
                }

                .label-checkbox100::before {
                content: "\f26b";
                font-family: Material-Design-Iconic-Font;
                font-size: 13px;
                color: transparent;

                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                width: 16px;
                height: 16px;
                border-radius: 2px;
                background: #fff;
                right: 0;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%);
                }
            </style>

        @endif
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>

{{-- 
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script> --}}
