<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
        <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />
        <meta name="description" content="AYA Bank is a leading private sector bank in Myanmar. The Bank was licensed by the Central Bank of Myanmar as a development bank on 2nd July 2010 and relicensed under the Financial Institutions Law 2016 as a full service bank.">

        <title>@yield('title')</title>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-228606560-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-228606560-1', {
                cookie_flags: 'max-age=7200;secure;samesite=none'
            });
        </script>

        <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />
        <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
        <link rel="stylesheet" href="{{ url('/css/core.css') }}" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="{{url('/fonts/Pyidaungsu-1.8_Regular.ttf')}}">
        <link href="{{url('/fonts/Sora-Regular.ttf')}}">

        <style type="text/css">
            @font-face {
                font-family: 'Pyidaungsu';
                font-style: normal;
                src: url('/fonts/Pyidaungsu-1.8_Regular.ttf');
            }
            @font-face {
                font-family: 'W35Art House';
                font-style: normal;
                src: url('/fonts/W35Art House.TTF');
            }
            @font-face {
                font-family: 'Sora';
                font-style: normal;
                src: url('/fonts/Sora-Regular.ttf');
            }
            html, body, table{
                font-family: 'Sora', sans-serif;
                background-color: #ffffff;
                font-size: 14px;
                color: #2e2e2e !important;
            }
            h1 {
                font-family: 'Sora', sans-serif;
            }
            /*.prevent-select {
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }*/
            img {
                pointer-events: none;
            }
            .menu > .nav-item {            
                text-transform: uppercase !important;
                color: #222222 !important;
            }
            .menu > .nav-item:hover {
                color: #A5000B !important;
            }
            .menu > .nav-item.active > a {
                color: #A5000B !important;
            }
            .why_use_AYA{
                background-color: #fff;
                border: 1px solid #dedede;
                border-radius: 10px;
                padding: 20px 20px;
                cursor: pointer;
            }
            .why_use_AYA:hover{
                cursor: pointer;  
                -webkit-box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
                -moz-box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
                box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
                border: 1px solid #fff;
            }
            .mb20 {
                margin-bottom: 20px;
            }
            .space-6 {
                height: 6px;
            }
            .space-10 {
                height: 10px;
            } 
            .space-20 {
                height: 20px;
            }  
            .space-29 {
                height: 29px;
            }
            .space-30 {
                height: 30px;
            }
            .space-33 {
                height: 33px;
            }
            .space-40 {
                height: 40px;
            }
            .space-50 {
                height: 50px;
            }
            .space-60 {
                height: 60px;
            }
            .space-80 {
                height: 80px;
            }
            .space-86 {
                height: 86px;
            }
            .space-90 {
                height: 90px;
            }
            .space-100 {
                height: 100px;
            }
            .secure_req_application_icon {
                background-color: #A5000B;
                color: #fff;
                border-radius: 50%;
                font-size: 20px;
            }
            .tox-statusbar__branding {
                display: none !important;
            }
            .page_edit_icon {
                font-size: 18px;
                line-height: 18px;
                cursor: pointer;
                border: 1px solid #2e2e2e;
                padding: 10px;
                border-radius: 50%;
                color: #2e2e2e;
            }
            .page_edit_icon_red {
                border: 1px solid #fff;
                color: #fff;
            }
            .page_edit_icon:hover {
                background-color: #2e2e2e80;
                color: #fff;
            }
            .page_edit_icon_red:hover {
                border: 1px solid #fff;
                background-color: #fff;
                color: #a02226;
            }
        </style>

        <script src="{{ url('/js/helpers.js') }}"></script>
        <script src="{!! url('/assets/tinymce/js/tinymce/tinymce.min.js') !!}" referrerpolicy="origin"></script>
    </head>
    <body class="prevent-select">
        @yield('content')

    </body>
</html>
