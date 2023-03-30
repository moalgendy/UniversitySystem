
<!DOCTYPE html>
<html lang="en" dir="{{ app()->getlocale() == "ar" ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- css link  -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">

<!--- Style css -->
{{-- @if (App::getLocale() == 'en')
    
@else
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}"> 
@endif --}}


    {{-- toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


</head>
<body>