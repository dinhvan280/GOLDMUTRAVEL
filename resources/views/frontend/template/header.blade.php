<!DOCTYPE html>
<html lang="vi">
<head>
    <base>
    <link rel="icon" type="image/x-icon" href="{{asset('images/image/logo.png')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/vendors/slick/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/vendors/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/scss/font-awesome.min.css')}}">
    <link href="{{asset('assets/css/animate.min.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" href="{{asset('assets/scss/styles.css')}}">
    <link rel="stylesheet" href="{{asset('libs/jquery-datetimepicker/jquery.datetimepicker.min.css')}}">

    <title>KimLong -Trang bán vé xe khách trực tuyến hàng đầu tại Việt Nam</title>
    <meta name="title" content="KimLongTravel -Trang bán vé xe khách trực tuyến hàng đầu tại Việt Nam"/>
    <meta name="description"
          content="Dễ dàng đặt vé xe khách, xe limousine nhanh chóng, tiết kiệm. Vô vàn ưu đãi, mã giảm giá và có cam kết hoàn tiền đến 150%"/>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WWQ43HJBMQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-WWQ43HJBMQ');
    </script>



</head>
<body style="padding-right: 0px;">
<!-- APP -->
<div class="main-content">
    <div id="embedCodeHeader"></div>
    <span></span>
    <div class="home-content">
        <div class="header-nav">
            <nav class="menu sticky">
                <div class="toggle" id="menu-toggle"><span></span></div>
                <h1 id="logo">
                    <a routerlink="/" routerlinkactive="active" href="/" class="active">
                        <img src="{{asset('images/image/logo.png')}}" alt="KIMLONGTRAVEL">
                    </a>
                </h1>
                <ul class="nav menu-main">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a routerlinkactive="active" class="nav-link" href="{{url('gioi-thieu')}}">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#check-booking" data-toggle="modal" data-target="#manageTicket"
                           class="menu-link menu-link-manage">Quản lý vé</a>
                    </li>
                    <li class="nav-item">
                        <a routerlinkactive="active" class="nav-link" href="{{route('contact')}}">Liên hệ</a>
                    </li>
                </ul>
                <div class="nav-info">
                    <div class="nav-info-support">
                        <i aria-hidden="true" class="fa fa-phone"></i><span>1900 20 53</span></div>
                    <div class="nav-info-language order">
                        <a href="{{route('carts.index')}}" class="cart_infor">
                            <i aria-hidden="true" class="fa fa-shopping-basket"></i>
                            @php
                                $kPerson = getPersonTicket();
                                $personTickets = \Illuminate\Support\Facades\Cache::get($kPerson) ?? [];
                            @endphp
                            <span id="total_ticket_cart">@if(count($personTickets)) {{count($personTickets)}} @else 0 @endif</span>
                        </a>
                    </div>

                    @if(getSessionUser())
                        <div data-target="#memberModal" class="acccount-form login nav-info-account" id="customer_info"
                             data-toggle=""><i aria-hidden="true" class="active fa fa-user-circle"></i>
                            <span>{{ getSessionUser()->name}}</span>
                        </div>
                        <div class="acccount-form">
                            <div class="account-mobile">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 account-item account-header"><p>Xin chào!</p><h5> Kim
                                                Long</h5></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 account-item wallet">
                                            <div><span>Ví SWIO</span><span class="myPoint"></span> ₫</div>
                                        </div>
                                        <div class="col-12 account-item"><a href="{{route('customers.history', ['id' => getSessionUser()->id])}}">
                                                <p>
                                                    <svg width="21px" height="20px" viewBox="0 0 21 20" version="1.1">
                                                        <g id="mobile-copy" stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <g id="Group-55">
                                                                <path
                                                                    d="M2.5,7 C1.11928711,7 0,8.11928711 0,9.5 C0,10.8807129 1.11928711,12 2.5,12 C3.88071289,12 5,10.8807129 5,9.5 C5,8.11928711 3.88071289,7 2.5,7 Z M2.5,10.9795898 L2.5,10.9795898 C1.68286133,10.9795898 1.02041016,10.3171387 1.02041016,9.5 C1.02041016,8.68286133 1.68286133,8.02041016 2.5,8.02041016 C3.31713867,8.02041016 3.97958984,8.68286133 3.97958984,9.5 C3.97958984,10.3171387 3.3171875,10.9795898 2.5,10.9795898 Z"
                                                                    id="Shape" fill="currentColor"
                                                                    fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M2.5,14 C1.11928711,14 0,15.1192871 0,16.5 C0,17.8807129 1.11928711,19 2.5,19 C3.88071289,19 5,17.8807129 5,16.5 C5,15.1192871 3.88071289,14 2.5,14 Z M2.5,17.9795898 L2.5,17.9795898 C1.68286133,17.9795898 1.02041016,17.3171387 1.02041016,16.5 C1.02041016,15.6828613 1.68286133,15.0204102 2.5,15.0204102 C3.31713867,15.0204102 3.97958984,15.6828613 3.97958984,16.5 C3.97958984,17.3171387 3.3171875,17.9795898 2.5,17.9795898 Z"
                                                                    id="Shape" fill="currentColor"
                                                                    fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M2.5,0 C1.11928711,0 0,1.11928711 0,2.5 C0,3.88071289 1.11928711,5 2.5,5 C3.88071289,5 5,3.88071289 5,2.5 C5,1.11928711 3.88071289,0 2.5,0 Z M2.5,3.97958984 C1.68286133,3.97958984 1.02041016,3.31713867 1.02041016,2.5 C1.02041016,1.68286133 1.68286133,1.02041016 2.5,1.02041016 C3.31713867,1.02041016 3.97958984,1.68286133 3.97958984,2.5 C3.97958984,3.31713867 3.3171875,3.97958984 2.5,3.97958984 Z"
                                                                    id="Shape" fill="currentColor"
                                                                    fill-rule="nonzero"></path>
                                                                <line x1="7.5" y1="2.5" x2="19.5" y2="2.5" id="Line-3"
                                                                      stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round"></line>
                                                                <line x1="7.5" y1="9.5" x2="19.5" y2="9.5" id="Line-3"
                                                                      stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round"></line>
                                                                <line x1="7.5" y1="16.5" x2="19.5" y2="16.5" id="Line-3"
                                                                      stroke="currentColor" stroke-width="2"
                                                                      stroke-linecap="round"></line>
                                                            </g>
                                                        </g>
                                                    </svg>Danh sách đặt chỗ
                                                </p>
                                                <i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
                                        <div class="col-12 account-item"><a href="{{route('customers.point')}}">
                                                <p>
                                                    <svg height="21" version="1.1" id="Layer_1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 22 22" xml:space="preserve"
                                                         style="enable-background: new 0 0 22 22;"><style
                                                            type="text/css"> .st0 {
                                                                fill-opacity: 0.85;
                                                            }

                                                            .st1 {
                                                                opacity: 0.8;
                                                            } </style>
                                                        <g>
                                                            <path d="M20.3,14.1h-3.2c-0.1,0-0.1,0-0.1,0.1v0.6c0,0.1,0,0.1,0.1,0.1h3.2c0.1,0,0.1,0,0.1-0.1v-0.6
                                                C20.4,14.1,20.3,14.1,20.3,14.1z M18.6,15.8h-1.5c-0.1,0-0.1,0-0.1,0.1v0.6c0,0.1,0,0.1,0.1,0.1h1.5c0.1,0,0.1,0,0.1-0.1v-0.6
                                                C18.7,15.8,18.7,15.8,18.6,15.8z M14.4,12.9h-0.5c-0.1,0-0.1,0.1-0.1,0.1v3.1c0,0,0,0.1,0.1,0.1l1.9,1.4c0.1,0,0.2,0,0.2,0l0.3-0.4
                                                v0c0-0.1,0-0.2,0-0.2l-1.6-1.2v-2.8C14.5,13,14.5,12.9,14.4,12.9z"
                                                                  class="st0"></path>
                                                            <path d="M7.9,20.6H3.1c-0.5,0-1-0.4-1-1V2.9c0-0.5,0.4-1,1-1h14.3c0.5,0,1,0.4,1,1v5.8c0.5,0.4,1,0.8,1.4,1.3V2.9
                                                c0-1.3-1-2.3-2.3-2.3H3.1c-1.3,0-2.3,1-2.3,2.3v16.8c0,1.3,1,2.3,2.3,2.3h6.5C9,21.6,8.4,21.1,7.9,20.6z"
                                                                  class="st1"></path>
                                                            <path d="M14.9,5.5H5.2c-0.3,0-0.6-0.3-0.6-0.6V4.7c0-0.3,0.3-0.6,0.6-0.6h9.8c0.3,0,0.6,0.3,0.6,0.6v0.1
                                                C15.6,5.2,15.3,5.5,14.9,5.5z" class="st1"></path>
                                                            <path d="M17.6,18c-0.8,0.9-1.9,1.6-3.2,1.6c-2.3,0-4.2-1.9-4.2-4.2c0-2.3,1.9-4.2,4.2-4.2c1.3,0,2.4,0.6,3.2,1.5h1.6
                                                c-0.9-1.7-2.7-2.8-4.8-2.8c-3,0-5.5,2.4-5.5,5.5c0,3,2.4,5.5,5.5,5.5c2.1,0,3.9-1.2,4.8-2.9H17.6z"
                                                                  class="st1"></path>
                                                            <path
                                                                d="M10.9,7.8H5.2C4.8,7.8,4.6,8,4.6,8.4v0.1c0,0.3,0.3,0.6,0.6,0.6h3.3C9.2,8.5,10,8.1,10.9,7.8z"
                                                                class="st1"></path>
                                                        </g></svg>
                                                    Lịch sử tích điểm
                                                </p>
                                                <i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
{{--                                        <div class="col-12 account-item"><a href="/mypages/exchange-voucher">--}}
{{--                                                <p>--}}
{{--                                                    <svg height="21" version="1.1" id="Layer_1"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
{{--                                                         viewBox="0 0 22 22" xml:space="preserve"--}}
{{--                                                         style="enable-background: new 0 0 22 22;"><style--}}
{{--                                                            type="text/css"> .st0 {--}}
{{--                                                                opacity: 0.8;--}}
{{--                                                            }--}}

{{--                                                            .st1 {--}}
{{--                                                                fill-opacity: 0.85;--}}
{{--                                                            } </style>--}}
{{--                                                        <g>--}}
{{--                                                            <path d="M19.1,18H2.9c-1.5,0-2.7-1.2-2.7-2.7v-3h0.6c0.7,0,1.3-0.6,1.3-1.3S1.6,9.7,0.9,9.7H0.2v-3--}}
{{--                                                    C0.2,5.2,1.4,4,2.9,4h16.2c1.5,0,2.7,1.2,2.7,2.7v3h-0.7c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3h0.7v3C21.8,16.8,20.6,18,19.1,18z--}}
{{--                                                        M1.5,13.5v1.8c0,0.7,0.6,1.4,1.4,1.4h16.2c0.7,0,1.4-0.6,1.4-1.4v-1.8c-1.1-0.3-2-1.3-2-2.5s0.8-2.2,2-2.5V6.7--}}
{{--                                                    c0-0.7-0.6-1.4-1.4-1.4H2.9c-0.7,0-1.4,0.6-1.4,1.4v1.8c1.1,0.3,2,1.3,2,2.5S2.7,13.2,1.5,13.5z"--}}
{{--                                                                  class="st0"></path>--}}
{{--                                                            <path d="M7.5,14.3L8.2,15c0.1,0.1,0.2,0,0.2,0l6.1-7.1c0.1-0.1,0-0.2,0-0.2L13.8,7c-0.1-0.1-0.2,0-0.2,0l-6.1,7.1--}}
{{--                                                    C7.4,14.2,7.4,14.3,7.5,14.3z" class="st1"></path>--}}
{{--                                                            <circle cx="8.3" cy="8.7" r="1.3" class="st1"></circle>--}}
{{--                                                            <circle cx="13.6" cy="13.2" r="1.3" class="st1"></circle>--}}
{{--                                                        </g></svg>--}}
{{--                                                    Đổi voucher--}}
{{--                                                </p>--}}
{{--                                                <i aria-hidden="true" class="fa fa-angle-right"></i></a></div>--}}
                                        <div class="col-12 account-item"><a href="{{route('customers.profile')}}">
                                                <p>
                                                    <svg width="21px" height="20px" viewBox="0 0 21 20" version="1.1">
                                                        <g id="mobile-copy" stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <g id="user-(1)" fill="currentColor" fill-rule="nonzero">
                                                                <path
                                                                    d="M16.2175391,12.2824609 C15.1828184,11.2477773 13.9512324,10.4818027 12.607502,10.0181211 C14.0466777,9.02689258 14.9921875,7.36799219 14.9921875,5.4921875 C14.9921875,2.46380273 12.5283848,0 9.5,0 C6.47161523,0 4.0078125,2.46380273 4.0078125,5.4921875 C4.0078125,7.36799219 4.95332227,9.02689258 6.39253516,10.0181211 C5.04880469,10.4818027 3.81721875,11.2477773 2.78249805,12.2824609 C0.988185547,14.0768105 0,16.4624609 0,19 L1.484375,19 C1.484375,14.5801621 5.08016211,10.984375 9.5,10.984375 C13.9198379,10.984375 17.515625,14.5801621 17.515625,19 L19,19 C19,16.4624609 18.0118145,14.0768105 16.2175391,12.2824609 Z M9.5,9.5 C7.29009961,9.5 5.4921875,7.702125 5.4921875,5.4921875 C5.4921875,3.28225 7.29009961,1.484375 9.5,1.484375 C11.7099004,1.484375 13.5078125,3.28225 13.5078125,5.4921875 C13.5078125,7.702125 11.7099004,9.5 9.5,9.5 Z"
                                                                    id="Shape"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    Tài khoản của tôi
                                                </p>
                                                <i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
                                        <div class="col-12 account-item"><a href="{{route('customers.change_password')}}">
                                                <p>
                                                    <svg width="21px" height="5px" viewBox="0 0 21 5" version="1.1">
                                                        <g id="mobile-copy" stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <g id="Group-52" fill="currentColor" fill-rule="nonzero">
                                                                <g id="Group-50">
                                                                    <path
                                                                        d="M6.29998031,3 L0.700019687,3 C0.313424021,3 0,2.776132 0,2.5 C0,2.223868 0.313424021,2 0.700019687,2 L6.29998031,2 C6.68657598,2 7,2.223868 7,2.5 C7,2.77617887 6.68657598,3 6.29998031,3 Z"
                                                                        id="Path"></path>
                                                                    <path
                                                                        d="M1.94726348,5 C1.51612756,5 1.16659349,4.74827652 1.16666667,4.43778593 C1.16666667,4.33912044 1.20274714,4.24214154 1.27124879,4.15670524 L4.39378237,0.260683466 C4.62504862,-0.0013703793 5.10756078,-0.0787426732 5.47136603,0.0878080412 C5.81372791,0.244555454 5.93236164,0.564006049 5.74427484,0.822844834 L2.62166808,4.71886661 C2.4825424,4.89247992 2.22558803,4.99957835 1.94726348,5 Z"
                                                                        id="Path"></path>
                                                                    <path
                                                                        d="M5.05416088,5 C4.77526747,5 4.5175966,4.89284823 4.37818648,4.71891767 L1.25576583,0.822873023 C1.05590807,0.547746493 1.20358766,0.20805483 1.58559333,0.0641141118 C1.94498602,-0.0712881973 2.38853704,0.0140958979 2.60617782,0.26065565 L5.72859848,4.15670029 C5.94419018,4.42560749 5.81626951,4.76941024 5.44289922,4.92468279 C5.32427255,4.97401583 5.18961921,5 5.05262408,5 L5.05416088,5 L5.05416088,5 Z"
                                                                        id="Path"></path>
                                                                </g>
                                                                <g id="Group-49"
                                                                   transform="translate(6.000000, 0.000000)">
                                                                    <path
                                                                        d="M6.29998031,3 L0.700019687,3 C0.313424021,3 0,2.776132 0,2.5 C0,2.223868 0.313424021,2 0.700019687,2 L6.29998031,2 C6.68657598,2 7,2.223868 7,2.5 C7,2.77617887 6.68657598,3 6.29998031,3 Z"
                                                                        id="Path"></path>
                                                                    <path
                                                                        d="M1.94726348,5 C1.51612756,5 1.16659349,4.74827652 1.16666667,4.43778593 C1.16666667,4.33912044 1.20274714,4.24214154 1.27124879,4.15670524 L4.39378237,0.260683466 C4.62504862,-0.0013703793 5.10756078,-0.0787426732 5.47136603,0.0878080412 C5.81372791,0.244555454 5.93236164,0.564006049 5.74427484,0.822844834 L2.62166808,4.71886661 C2.4825424,4.89247992 2.22558803,4.99957835 1.94726348,5 Z"
                                                                        id="Path"></path>
                                                                    <path
                                                                        d="M5.05416088,5 C4.77526747,5 4.5175966,4.89284823 4.37818648,4.71891767 L1.25576583,0.822873023 C1.05590807,0.547746493 1.20358766,0.20805483 1.58559333,0.0641141118 C1.94498602,-0.0712881973 2.38853704,0.0140958979 2.60617782,0.26065565 L5.72859848,4.15670029 C5.94419018,4.42560749 5.81626951,4.76941024 5.44289922,4.92468279 C5.32427255,4.97401583 5.18961921,5 5.05262408,5 L5.05416088,5 L5.05416088,5 Z"
                                                                        id="Path"></path>
                                                                </g>
                                                                <g id="Group-51"
                                                                   transform="translate(12.000000, 0.000000)">
                                                                    <path
                                                                        d="M6.29998031,3 L0.700019687,3 C0.313424021,3 0,2.776132 0,2.5 C0,2.223868 0.313424021,2 0.700019687,2 L6.29998031,2 C6.68657598,2 7,2.223868 7,2.5 C7,2.77617887 6.68657598,3 6.29998031,3 Z"
                                                                        id="Path"></path>
                                                                    <path
                                                                        d="M1.94726348,5 C1.51612756,5 1.16659349,4.74827652 1.16666667,4.43778593 C1.16666667,4.33912044 1.20274714,4.24214154 1.27124879,4.15670524 L4.39378237,0.260683466 C4.62504862,-0.0013703793 5.10756078,-0.0787426732 5.47136603,0.0878080412 C5.81372791,0.244555454 5.93236164,0.564006049 5.74427484,0.822844834 L2.62166808,4.71886661 C2.4825424,4.89247992 2.22558803,4.99957835 1.94726348,5 Z"
                                                                        id="Path"></path>
                                                                    <path
                                                                        d="M5.05416088,5 C4.77526747,5 4.5175966,4.89284823 4.37818648,4.71891767 L1.25576583,0.822873023 C1.05590807,0.547746493 1.20358766,0.20805483 1.58559333,0.0641141118 C1.94498602,-0.0712881973 2.38853704,0.0140958979 2.60617782,0.26065565 L5.72859848,4.15670029 C5.94419018,4.42560749 5.81626951,4.76941024 5.44289922,4.92468279 C5.32427255,4.97401583 5.18961921,5 5.05262408,5 L5.05416088,5 L5.05416088,5 Z"
                                                                        id="Path"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    Đổi mật khẩu
                                                </p>
                                                <i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
                                        <div class="col-12 account-item"><a href="{{route('logout.customer')}}">
                                                <p>
                                                    <svg width="21px" height="20px" viewBox="0 0 21 20" version="1.1">
                                                        <g id="mobile-copy" stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <g id="logout" fill="currentColor" fill-rule="nonzero">
                                                                <path
                                                                    d="M19.7525,8.66167969 L17.6125391,7.15300781 C17.2248047,6.8796875 16.6889062,7.15800781 16.6889062,7.63191406 L16.6889062,8.55464844 L6.41390625,8.55464844 C6.0903125,8.55464844 5.82792969,8.81699219 5.82792969,9.140625 C5.82792969,9.46425781 6.0903125,9.7265625 6.41390625,9.7265625 L16.6888281,9.7265625 L16.6888281,10.6492578 C16.6888281,11.1262891 17.2275781,11.3994141 17.6124219,11.1281641 L19.7523828,9.61949219 C20.0791797,9.38925781 20.0857813,8.89714844 19.7525,8.66167969 Z"
                                                                    id="Path"></path>
                                                                <path
                                                                    d="M16.8152734,12.9030078 C16.5352344,12.7410547 16.1767188,12.8366797 16.0146484,13.1168359 C14.6382422,15.4963672 12.0653125,17.0938281 9.12511719,17.0938281 C4.73972656,17.0938281 1.17191406,13.5260156 1.17191406,9.140625 C1.17191406,4.75523437 4.73972656,1.18742187 9.12511719,1.18742187 C12.0672656,1.18742187 14.6390234,2.78636719 16.0146094,5.16433594 C16.1766406,5.44449219 16.5352344,5.54007812 16.8152344,5.37816406 C17.0953516,5.21613281 17.1910547,4.85765625 17.0290625,4.57753906 C15.4460156,1.84089844 12.4894141,0.0155078125 9.12511719,0.0155078125 C4.08164062,0.0155078125 0,4.09671875 0,9.140625 C0,14.1841016 4.08121094,18.2657422 9.12511719,18.2657422 C12.4908594,18.2657422 15.4467188,16.4390625 17.0291016,13.7036328 C17.1910938,13.4235156 17.0953906,13.0650781 16.8152734,12.9030078 Z"
                                                                    id="Path"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    Đăng xuất
                                                </p>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div data-target="#memberModal" class="login nav-info-account" data-toggle="modal">
                            <i aria-hidden="true" class="fa fa-user-circle"></i>
                            <span>
                                Đăng nhập
                                </span>
                        </div>
                    @endif
                </div>


                <div class="notification-mobile">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 notifications-header">Thông báo</div>
                            <div class="col-12 notifications-no-result">Chưa có thông báo nào</div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="member-modal" id="login-customer">
                <div id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true"
                     class="modal fade login-modal modal-custom">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" id="modal-customer">
                            <form method="POST" action="{{route('postLogin.customer')}}" class="ng-untouched ng-pristine ng-invalid">
                                @csrf
                                <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                            aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body"><h3>Đăng nhập</h3>
                                    <div class="item position-relative"><label>Tài khoản hoặc email</label><input
                                            formcontrolname="email" type="text" name="email"
                                            class="txt-input ng-untouched ng-pristine ng-invalid"
                                            placeholder="Nhập tài khoản hoặc email"></div>
                                    <div class="item position-relative"><label>Mật khẩu</label><input
                                            formcontrolname="password" name="password" id="txtPassword"
                                            class="txt-input ng-untouched ng-pristine ng-invalid"
                                            placeholder="Nhập mật khẩu" type="password">
                                        <button type="button" class="btn btn-eye" title="Hiện mật khẩu"><i
                                                aria-hidden="true" id="toggle_pwd" class="fa-eye-slash fa"></i></button>
                                        </div></div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-confirm">Đăng nhập</button>
                                    <div class="register">
                                        <a href="#"><span id="forgot-password"> Quên mật khẩu?</span></a>
                                        <div data-target="#memberModal2" class="login nav-info-account"
                                             data-toggle="modal">
                                            <i aria-hidden="true" ></i>
                                            <span id="register" class="txt-register"> Đăng ký</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div id="manageTicket" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true"
                 class="modal fade login-modal modal-custom">
                <div role="document" class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form novalidate="" spellcheck="false" class="ng-untouched ng-pristine ng-invalid">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body"><h3>Tra cứu thông tin đặt chỗ</h3>
                                <div class="item position-relative"><label>Mã đặt chỗ</label>
                                    <input type="text" formcontrolname="bookingId" required="" class="txt-input ng-untouched ng-pristine ng-invalid" placeholder="Nhập mã đặt chỗ">
                                </div>
                                <div class="item position-relative"><label>Số điện thoại</label>
                                    <input type="tel" inputmode="numeric" pattern="[0-9]{10,11}" digitonly="" formcontrolname="bookingPhoneNumber" required="" class="txt-input ng-untouched ng-pristine ng-invalid"placeholder="Nhập số điện thoại">
                                </div>
                                <p class="notes">Trường hợp không thể huỷ vé qua mạng hoặc muốn đổi sang vé khác vui
                                    lòng liên hệ <a href="/">KIMLONGTRAVEL</a> qua số điện thoại <a
                                        href="tel:1900 636 750">1900
                                        636 750</a></p></div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-confirm">Xem thông tin đặt chỗ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="result_content">
