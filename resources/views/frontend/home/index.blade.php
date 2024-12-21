@extends('frontend.template.layout')

@section('content')
    <div class="slider-side">
        <div class="bg-video pyro">
            <div class="overlap">
                <div class="search-group"><p>GOLDMU - Cam kết hoàn 150% nếu nhà xe không giữ vé !</p>
                    <div class="search-feature">
                        <div class="container">
                            <div class="trip-search-filter">
                                <div class="search-form">
                                    <form novalidate="" action="{{route('trips.search')}}"
                                          autocomplete="false"
                                          enctype="multipart/form-data" method="GET" class="row ng-untouched ng-pristine ng-valid">
                                        <div class="col-12 col-lg-8 mt-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 search-form-item"><label>Nơi đi</label>
                                                    <div class="search-drop">
                                                        <i aria-hidden="true" class="fa fa-map-marker"></i>
                                                        <input type="text" id="pickupPoint" value="" autocomplete="off"
                                                               spellcheck="false" tabindex="1" class="txt-input"
                                                               placeholder="Chọn nơi đi" name="departure" required>
                                                        <ul class="search-drop-list scrollbar" id="pickupPoint">
                                                        </ul>
                                                    </div>
                                                    <button type="button" class="btn-switch">
                                                        <i aria-hidden="true" class="fa fa-expand"></i>
                                                    </button>
                                                </div>
                                                <div class="col-12 col-lg-6 search-form-item"><label>Nơi đến</label>
                                                    <div class="search-drop">
                                                        <i aria-hidden="true" class="fa fa-map-marker"></i>
                                                        <input type="text" id="dropOffPoint" autocomplete="off"
                                                               spellcheck="false" tabindex="2" class="txt-input"
                                                               placeholder="Chọn nơi đến" name="destination" required>
                                                        <ul class="search-drop-list scrollbar" id="dropOffPoint">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 mb-lg-0 mt-4 row">
                                                <div class="col-12 col-lg-6 search-form-item"><label>Ngày đi</label>
                                                    <div class="pi">
                                                        <div class="close-m">×</div>
                                                        <i aria-hidden="true" class="fa fa-calendar"></i>
                                                        <div class="datetime">
                                                            <div class="datepicker-container datepicker-default">
                                                                <input type="text" id="date" name="datetime" autocomplete="false"
                                                                       class="datetime txt-input w-100 ng-untouched ng-pristine ng-valid"
                                                                       placeholder="Chọn ngày đi">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 search-form-item">
                                                    <label style="height: 24px;"></label>
                                                    <button type="submit" class="btn-search btn-ani2">Tìm kiếm</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 pl-3 pl-lg-0">
                                            <div
                                                class="slider-search-filter slick-initialized slick-slider slick-dotted">
                                                <button class="slick-prev slick-arrow" aria-label="Previous"
                                                        type="button" style="display: inline-block;">Previous
                                                </button>
                                                <div class="slick-list draggable">
                                                    <div class="slick-track"
                                                         style="opacity: 1; width: 2408px; transform: translate3d(-688px, 0px, 0px);">

                                                        <div class="slick-slide slick-current slick-active"
                                                             data-slick-index="1" aria-hidden="false" tabindex="0"
                                                             role="tabpanel" id="slick-slide01"
                                                             aria-describedby="slick-slide-control01"
                                                             style="width: 344px;"><a
                                                                href="#"
                                                                target="_blank" class="image" tabindex="0"><img
                                                                    src="https://blog.swio.vn/wp-content/uploads/2021/11/3401-den-da-lat-o-tro-tren-may-163346-1-min-1024x577.jpg"
                                                                    class="img-fluid"></a></div>


                                                    </div>
                                                </div>
                                                <button class="slick-next slick-arrow" aria-label="Next" type="button"
                                                        style="display: inline-block;">Next
                                                </button>
                                                <ul class="slick-dots" style="" role="tablist">
                                                    <li class="" role="presentation">
                                                        <button type="button" role="tab" id="slick-slide-control00"
                                                                aria-controls="slick-slide00" aria-label="1 of 3"
                                                                tabindex="-1">1
                                                        </button>
                                                    </li>
                                                    <li role="presentation" class="slick-active">
                                                        <button type="button" role="tab" id="slick-slide-control01"
                                                                aria-controls="slick-slide01" aria-label="2 of 3"
                                                                tabindex="0" aria-selected="true">2
                                                        </button>
                                                    </li>
                                                    <li role="presentation" class="">
                                                        <button type="button" role="tab" id="slick-slide-control02"
                                                                aria-controls="slick-slide02" aria-label="3 of 3"
                                                                tabindex="-1">3
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form><!---->
                                </div>
                            </div>
                        </div>
                        <div class="people"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="popular-bus">
        <div class="container">
            <div class="row mb-2 mb-lg-5">
                <div class="col">
                    <div class="title"><h2>Các chuyến chạy trong ngày</h2></div>
                </div>
            </div>
            <ul class="row popular-bus-list">
                <li class="col-12 col-md-6" style="padding-left: 50px;">
                    <h3 class="name">Chiều đi</h3>
                </li>
                <li class="col-12 col-md-6" style="padding-left: 50px;">
                    <h3 class="name">Chiều về</h3>
                </li>
                @foreach($listChuyen as $items => $item)
                    <li class="col-12 col-md-6">
                        <div class="popular-bus-item">
                            <div class="item-info d-flex align-items-center">
                                <i aria-hidden="true" class="fa fa-map-marker"></i>
                                @if($item->chieu == 'di')
                                    <h4 class="name">{{$item->diem_dau}}</h4>
                                    <img src="/assets/images/icon_swap.svg" alt="icon swag" class="icon-swap">
                                    <h4 class="name">{{$item->diem_cuoi}}</h4>
                                @else
                                    <h4 class="name">{{$item->diem_cuoi}}</h4>
                                    <img src="/assets/images/icon_swap.svg" alt="icon swag" class="icon-swap">
                                    <h4 class="name">{{$item->diem_dau}}</h4>
                                @endif

                            </div>
                            <div class="item-content">
                                <div class="row">
                                    <div class="col-12 col-xl-5">
                                        <div class="group"><span class="text-muted">Tổng thời gian:</span><span
                                                class="des">2g50ph</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <div class="group"><span class="text-muted">Khoảng cách:</span><span
                                                class="des">250km</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-5">
                                        <div class="group"><span class="text-muted">Giờ khởi hành:</span><span
                                                class="des">{{date('G:i', strtotime($item->gio))}}h</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <div class="group"><span class="text-muted">Loại xe:</span><span
                                                class="des">{{$item->ten_lx}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 action align-items-center">
                                    <div class="col-12 col-lg-6 pl-0">
                                        <p class="prices h4 text-theme"> {{ number_format(floatval($item->gia_ve), 0, ',', '.') . "đ" }}</p>
                                    </div>
                                    <div class="col-12 col-lg-6 text-right">
                                        <a class="btn btn-booking btn-theme btn-ani2"
                                           href="{{route('ticket.show', [$item->ma_tuyen, $item->ma_xe])}}">Đặt vé ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="policy why-swio">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="title"><h2>Tại sao nên đặt vé tại chúng tôi!</h2></div>
                </div>
            </div>
            <div class="row why-swio-list">
                <div class="col-12 col-lg-4 mb-3">
                    <div class="why-swio-item"><img src="/assets/images/why1.svg" alt="Dịch vụ tốt nhất">
                        <div class="content"><h5>Dịch vụ tốt nhất</h5>
                            <p class="des">Dịch vụ chất lượng Nhật Bản và luôn tôn trọng khách hàng.</p></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <div class="why-swio-item"><img src="/assets/images/why2.svg" alt="Giữ chỗ 100%">
                        <div class="content"><h5>Giữ chỗ 100%</h5>
                            <p class="des">Cam kết giữ chỗ 100% khi đặt vé tại goldmu.info</p></div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <div class="why-swio-item"><img src="/assets/images/why3.svg" alt="Thanh toán dễ dàng">
                        <div class="content"><h5>Thanh toán dễ dàng</h5>
                            <p class="des">ATM - Internet Banking - Momo - Visa - Master - QR Code</p></div>
                    </div>
                </div>
            </div>
            <div class="sale-off">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-10 d-flex align-items-center">
                        <img src="/assets/images/stop-bus.svg" title="" alt="icon-sale-off" width="30px">
                        <span>Đăng ký thành viên để nhận được nhiều ưu đãi hơn từ
                            <strong class="name">GOLDMU</strong>.</span></div>
                    <div class="col-12 col-lg-2 text-right">
                        <button data-target="#memberModal" id="register" data-toggle="modal" type="button"
                                class="btn btn-sm uppercase btn-outline-theme rounded-pill btn-ani1">Đăng ký ngay
                        </button>
                    </div>
                </div>
            </div><!----></div>
    </section>
    <section class="call-to-action">
        <div class="container">
            <div class="call-to-action-detail">
                <div class="info"><img src="/assets/images/icon-bus.svg" title="" alt="">
                    <div class="call-to-action-title"><h4>Tìm vé ngay hôm nay!</h4>
                        <p>Mua vé ngay hôm nay để nhận được nhiều ưu đãi hấp dẫn từ GOLDMU!</p></div>
                </div>
                <a href="javascript:;" class="link-cta btn btn-booking btn-theme btn-ani2 uppercase rounded-pill">Tìm
                    Vé Ngay!</a></div>
        </div>
    </section>
    <section class="policy">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title"><h2>Hỗ trợ khách hàng</h2>
                        <p>Giải đáp thắc mắc của khách hàng về quá trình đặt vé và vô vàn các tiện ích khác mà GOLDMU
                            mang lại</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="policy-item"><img src="/assets/images/support-use.svg" alt="Icon support-use">
                        <h2>Điều khoản sử dụng</h2>
                        <p>Tìm hiểu các quy định và chính sách của GOLDMUTRAVEL</p><a routerlinkactive="active"
                                                                              class="link-more w-200 btn-ani1"
                                                                              href="{{route('term')}}">Xem
                            chi tiết</a></div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="policy-item"><img src="/assets/images/support-guide.svg" alt="Icon support-guide">
                        <h2>Chính sách bảo mật</h2>
                        <p>Tìm hiểu về các chính sách bảo mật thông tin khách hàng</p><a routerlinkactive="active"
                                                                                       class="link-more w-200 btn-ani1"
                                                                                       href="{{route('privacy')}}">Xem
                            chi tiết</a></div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="policy-item"><img src="/assets/images/support-faq.svg" alt="Icon support-faq">
                        <h2>Câu hỏi thường gặp</h2>
                        <p>Giải đáp các thắc mắc thường gặp của khách hàng</p><a routerlinkactive="active"
                                                                                 class="link-more w-200 btn-ani1"
                                                                                 href="{{route('question')}}">Xem
                            chi tiết</a></div>
                </div>
            </div>
        </div>
    </section>
    <layout-footer>
        <div class="nav-mobile">
            <ul>
                <li>
                    <button routerlinkactive="active" class="btn-notification- active" tabindex="0">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="mobile-copy" stroke="none" stroke-width="1" fill="currentColor"
                               fill-rule="evenodd">
                                <g id="icons8-home-(2)" transform="translate(1.000000, 1.000000)"
                                   fill="currentColor" fill-rule="nonzero" stroke="currentColor">
                                    <path
                                        d="M10.9701607,0.000409444203 C10.7747007,0.00657074938 10.5864978,0.0702690392 10.4330514,0.182196912 L1.74739583,6.49848548 C0.645013844,7.30041681 0,8.52581826 0,9.8213403 L0,20.5897698 C0,21.3589624 0.694470211,22 1.52777778,22 L7.63888889,22 C8.47219633,22 9.16666667,21.3589624 9.16666667,20.5897698 L9.16666667,14.9488492 C9.16666667,14.7824166 9.29191694,14.6668031 9.47222222,14.6668031 L12.5277778,14.6668031 C12.7080831,14.6668031 12.8333333,14.7824166 12.8333333,14.9488492 L12.8333333,20.5897698 C12.8333333,21.3589624 13.5278037,22 14.3611111,22 L20.4722222,22 C21.3055297,22 22,21.3589624 22,20.5897698 L22,9.8213403 C22,8.52581826 21.3549863,7.30041681 20.2526042,6.49848548 L11.5669486,0.182196912 C11.3974358,0.0585903889 11.1860801,-0.00579063667 10.9701607,0.000409444203 Z M11,1.9240515 L19.1187064,7.82828853 C19.7812132,8.3102313 20.1666667,9.04326048 20.1666667,9.8213403 L20.1666667,20.3077238 L14.6666667,20.3077238 L14.6666667,14.9488492 C14.6666667,13.8686383 13.6980281,12.974527 12.5277778,12.974527 L9.47222222,12.974527 C8.30197194,12.974527 7.33333333,13.8686383 7.33333333,14.9488492 L7.33333333,20.3077238 L1.83333333,20.3077238 L1.83333333,9.8213403 C1.83333333,9.04326048 2.21878629,8.3102313 2.88129356,7.82828853 L11,1.9240515 Z"
                                        id="Shape"></path>
                                </g>
                            </g>
                        </svg>
                        <span>Trang chủ</span></button>
                </li>
                <li>
                    <button data-toggle="modal" data-target="#manageTicket">
                        <svg width="33px" height="24px" viewBox="0 0 33 24">
                            <g id="mobile-copy" stroke="none" stroke-width="1" fill="currentColor"
                               fill-rule="evenodd">
                                <g id="ticket-(2)"
                                   transform="translate(16.000000, 12.500000) rotate(90.000000) translate(-16.000000, -12.500000) translate(5.000000, -3.000000)"
                                   fill="#242528" fill-rule="nonzero" stroke="#242528">
                                    <path
                                        d="M17.732997,0.417525773 L17.7139973,0.417525773 L15.0430809,0.429688302 C14.6901446,0.43124093 14.3878746,0.657411928 14.3225266,0.969238014 C14.0257262,2.42227003 12.618299,3.47833834 10.9748132,3.48092614 C10.95898,3.48092614 10.9431468,3.48092614 10.9273136,3.48092614 C9.2679946,3.47290404 7.84156754,2.42045858 7.50964619,0.95888694 C7.43940437,0.651977565 7.14001302,0.431499756 6.79168274,0.429947062 L4.12076644,0.417525773 L4.10176664,0.417525773 C2.06676913,0.418043327 0.417525773,1.90109343 0.417525773,3.73012819 L0.417525773,27.1051821 C0.419828784,28.9336994 2.06820849,30.4154556 4.10234235,30.4175258 L6.36361067,30.4175258 C6.74418317,30.4175258 7.06228646,30.1569375 7.09740733,29.8163872 C7.26552709,28.2210279 8.74837791,26.9983073 10.5309079,26.9848509 L10.574953,26.9848509 C12.3433771,26.995202 13.8083795,28.2220631 13.944545,29.8070712 C13.9747721,30.151762 14.2946026,30.4175258 14.6792053,30.4175258 L17.7327092,30.4175258 C19.7668431,30.4154556 21.4152228,28.9336994 21.4175258,27.1051821 L21.4175258,3.72986943 C21.4175258,1.90057591 19.7679946,0.417525773 17.732997,0.417525773 Z M19.9435991,27.1049234 C19.9421598,28.2021372 18.9530168,29.0910357 17.7327092,29.0923295 L15.3122453,29.0923295 C14.8188254,27.0992303 12.8310396,25.6324831 10.5119081,25.6599134 C8.23135208,25.6795805 6.260551,27.0966425 5.73834336,29.0923295 L4.10234235,29.0923295 C2.88174686,29.0910357 1.89289177,28.2021372 1.89145241,27.1049234 L1.89145241,3.72986943 C1.89145241,2.63213807 2.88117115,1.74246324 4.10234235,1.74246324 L4.11356955,1.74246324 L6.22370283,1.75203796 C6.89733329,3.56580494 8.78033219,4.79318349 10.907738,4.80534601 C10.9304802,4.80534601 10.9526467,4.8058636 10.9753889,4.8058636 C13.0981888,4.80482843 14.9762936,3.56994537 15.6199851,1.7517792 L17.7217699,1.74246324 L17.732997,1.74246324 C18.9541683,1.74246324 19.943887,2.63213807 19.943887,3.72986943 L19.943887,27.1049234 L19.9435991,27.1049234 Z"
                                        id="Shape"></path>
                                </g>
                            </g>
                        </svg>
                        <span>Quản lý vé</span></button>
                </li>
                <li>
                    <button>
                        <svg width="24px" height="24px" viewBox="0 0 24 24">
                            <g id="mobile-copy" stroke="none" stroke-width="1" fill="currentColor"
                               fill-rule="evenodd">
                                <g id="telephone-(1)" transform="translate(1.000000, 1.000000)" fill="#242528"
                                   fill-rule="nonzero" stroke="#242528">
                                    <path
                                        d="M4.45820094,14.6241194 C6.63633957,17.2179859 9.25834259,19.2602569 12.2509952,20.705346 C13.3903997,21.2432656 14.9141816,21.8814753 16.6118484,21.9908827 C16.7170946,21.9954414 16.8177649,22 16.9230111,22 C18.0624155,22 18.9775998,21.6079569 19.723475,20.8010775 C19.728051,20.7965189 19.7372028,20.7874016 19.7417787,20.7782843 C20.0071822,20.4591794 20.309193,20.1719851 20.6249316,19.8665562 C20.8399999,19.6614173 21.0596441,19.4471612 21.2701365,19.2283465 C22.2448078,18.2163282 22.2448078,16.9307915 21.2609847,15.9506838 L18.5108559,13.2109407 C18.0441119,12.7277248 17.4858494,12.4724409 16.9001315,12.4724409 C16.3144135,12.4724409 15.7515752,12.7277248 15.2711034,13.2063821 L13.6329235,14.8383755 C13.4819181,14.7517613 13.3263368,14.6742644 13.1799073,14.6013262 C12.9968705,14.5101533 12.8275614,14.4235392 12.6765559,14.3278077 C11.1848055,13.3841691 9.83033278,12.1533361 8.53534699,10.5714878 C7.88099022,9.74637381 7.44170176,9.05346042 7.13511502,8.34687111 C7.56525164,7.95938666 7.96793273,7.55366763 8.35688606,7.15706589 C8.4941637,7.01574803 8.63601727,6.87443017 8.77787083,6.73311231 C9.27207035,6.24077911 9.5374738,5.67094903 9.5374738,5.09200166 C9.5374738,4.51305429 9.27664628,3.9432242 8.77787083,3.45089101 L7.41424623,2.09241608 C7.25408898,1.93286366 7.10308357,1.77786987 6.94750224,1.61831745 C6.64549142,1.30832988 6.32975283,0.989225031 6.01859017,0.702030667 C5.54727026,0.241607957 4.99358376,0 4.40786581,0 C3.82672378,0 3.26846135,0.241607957 2.77883775,0.706589308 L1.06744312,2.41152093 C0.445117793,3.03149606 0.0927718375,3.78367178 0.0195570936,4.65437215 C-0.0673854148,5.74388728 0.133955131,6.90178201 0.655610181,8.30128471 C1.45639644,10.466639 2.66443972,12.4769996 4.45820094,14.6241194 Z M1.13608194,4.75010361 C1.190993,4.14380439 1.42436499,3.63779528 1.86365346,3.20016577 L3.56589625,1.50435143 C3.8312997,1.24906755 4.12415867,1.11686697 4.40786581,1.11686697 C4.68699702,1.11686697 4.97070415,1.24906755 5.23153168,1.51346871 C5.53811842,1.79610443 5.82640147,2.09241608 6.13756413,2.40696229 C6.29314546,2.56651471 6.45330271,2.72606714 6.61345997,2.8901782 L7.97708457,4.24865313 C8.2607917,4.53128885 8.40722119,4.81848322 8.40722119,5.10111894 C8.40722119,5.38375466 8.2607917,5.67094903 7.97708457,5.95358475 C7.83523101,6.09490261 7.69337744,6.24077911 7.55152387,6.38209697 C7.12596317,6.8106092 6.727858,7.21632822 6.28856954,7.60381268 C6.2794177,7.61292996 6.27484178,7.6174886 6.26568993,7.62660588 C5.88588845,8.00497306 5.94537543,8.36510568 6.03689386,8.63862412 C6.04146978,8.65230004 6.0460457,8.66141732 6.05062162,8.67509324 C6.40296758,9.51844177 6.89259118,10.3207625 7.65677007,11.2780771 C9.02954652,12.9647741 10.4755377,14.273104 12.0679584,15.2805636 C12.264723,15.4082056 12.4752154,15.5084956 12.67198,15.6087857 C12.8550169,15.6999586 13.024326,15.7865727 13.1753314,15.8823042 C13.1936351,15.8914215 13.2073628,15.9005387 13.2256665,15.909656 C13.3766719,15.9871529 13.5231014,16.023622 13.6695309,16.023622 C14.0356046,16.023622 14.2735525,15.7911314 14.3513432,15.7136345 L16.0627379,14.0087029 C16.3281413,13.7443017 16.6164244,13.6029838 16.9001315,13.6029838 C17.2479015,13.6029838 17.5316087,13.81724 17.7100696,14.0087029 L20.4693503,16.7530046 C21.0184608,17.3000414 21.0138849,17.8926647 20.4556225,18.4716121 C20.2634338,18.6767509 20.0620932,18.8727725 19.8470249,19.0779113 C19.5267104,19.3878989 19.1926682,19.7070037 18.8906573,20.0671363 C18.3644264,20.6324078 17.7375251,20.896809 16.927587,20.896809 C16.8497963,20.896809 16.7674298,20.8922503 16.6896391,20.8876917 C15.1887368,20.7919602 13.7930808,20.2084542 12.7451948,19.7115624 C9.8989716,18.3394115 7.40051846,16.3928719 5.32762603,13.9220887 C3.62080731,11.875259 2.47225101,9.9697472 1.71264805,7.92747617 C1.24132813,6.67384998 1.06286719,5.66639039 1.13608194,4.75010361 Z"
                                        id="Shape"></path>
                                </g>
                            </g>
                        </svg>
                        <span><a href="tel:1900 636 750">Hỗ trợ</a></span></button>
                </li>
                <li>
                    <button class="btn-account" data-is-logged="0">
                        <svg width="23px" height="22px" viewBox="0 0 23 22">
                            <g id="mobile-copy" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Group-47" transform="translate(0.124579, 0.000000)" stroke="#000000"
                                   stroke-width="2">
                                    <rect id="Rectangle" x="7.875421" y="1" width="7" height="8" rx="3.5"></rect>
                                    <path
                                        d="M11.375421,13 C15.0596876,13 18.3618873,14.5489811 20.5698603,16.9998935 C18.3620347,19.4509599 15.059758,21 11.375421,21 C7.69115437,21 4.38895473,19.4510189 2.18098173,17.0001065 C4.38880729,14.5490401 7.691084,13 11.375421,13 L11.375421,13 Z"
                                        id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                        <span>Tài khoản</span></button>
                </li>
            </ul>
        </div><!----><!---->

@stop
