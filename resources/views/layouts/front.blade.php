<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="4KP0mHB-RKmQrJzLm98WkbdV-VDtF5LQeJvx1CVjkLA" />
    <link rel="icon" type="image/x-icon" href="/images/code-origins/Logo.png">
    <title> @yield('title')</title>
    <meta name="description" content=" @yield('description')">
    <meta name="keywords" content=" @yield('keywords')">
    <link rel="canonical" href=" @yield('url')">
    <link rel="stylesheet" href="/css/style.css">
    @yield('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div>
        <header class="header">
            <div class="head header_left">
                <img src="/images/aivine/headerLeftrococo.png" alt="" class="header_left_background_img">
                <img src="/images/aivine/logo.png" alt="" class="header_left_logo">
            </div>
           
            <div class="head header_right">
                <ul class="header_right_ul">
                    <li class="header_right_li"><a class="header_right_li_a" href="/">HOME</a></li>
                    <li class="header_right_li"><a class="header_right_li_a" href="/contacts">TO ORDER</a></li>
                </ul>
            </div>
        </header>


        @yield('content')


            <div class="footer">
            <img src="/images/aivine/headerLeftrococo.png" alt="" class="footer_background_img1">
            <div class="footer_block">
            <img src="/images/aivine/logo2.png" alt="" class="footer_left_logo">
                <a class="footer_button"><p class="footer_button_text">TO ORDER</p></a>
                <div class="copyright_box">
                    <p class="copyright_text">© 2024, All Rights Reserved by <a href="https://codeorigins.am/"
                    target="_blank" class='codeOrigins'>Codeorigins.am</a></p>
                </div>
            </div>
                
            </div>
            
    
    </div>
    
    @yield('script')
</body>

</html>
