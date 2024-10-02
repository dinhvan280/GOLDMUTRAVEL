    @extends('frontend.template.layout')

@section('content')
    <div class="search-feature">
        <div class="container">
            <div class="tip-search-filter">
                <div class="search-form">
                    <form novalidate="" class="row ng-untouched ng-valid ng-dirty">
                        <div class="col-12 col-lg-8 mt-4">
                            <div class="row">
                                <div class="col-12 col-lg-6 search-form-item"><label>Nơi đi</label>
                                    <div class="search-drop"><i aria-hidden="true" class="fa fa-map-marker"></i>
                                        <input type="text" id="pickupPoint" autocomplete="off" spellcheck="false"
                                               tabindex="1" class="txt-input" placeholder="Chọn nơi đi">
                                    </div>
                                    <button type="button" class="btn-switch">
                                        <i aria-hidden="true" class="fa fa-expand"></i>
                                    </button>
                                </div>
                                <div class="col-12 col-lg-6 search-form-item"><label>Nơi đến</label>
                                    <div class="search-drop"><i aria-hidden="true" class="fa fa-map-marker"></i>
                                        <input type="text" id="dropOffPoint" autocomplete="off" spellcheck="false"
                                               tabindex="2" class="txt-input" placeholder="Chọn nơi đến">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mb-lg-0 mt-4 row">
                                <div class="col-12 col-lg-6 search-form-item"><label>Ngày đi</label>
                                    <div class="pi">
                                        <div class="close-m">×</div>
                                        <i aria-hidden="true" class="fa fa-calendar"></i>
                                        <ngx-datepicker id="myDatepicker" name="boardingDate" tabindex="3"
                                                        class="myDatepicker ng-untouched ng-valid ng-dirty"
                                                        _nghost-cej-c29="">
                                            <div _ngcontent-cej-c29=""
                                                 class="datepicker-container datepicker-default"><input
                                                    _ngcontent-cej-c29="" type="text" readonly=""
                                                    class="myDatepicker txt-input w-100 ng-pristine ng-valid ng-touched"
                                                    placeholder="Chọn ngày đi"><!----></div>
                                        </ngx-datepicker>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 search-form-item"><label style="height: 24px;"></label>
                                    <button type="button" class="btn-search btn-ani2">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 pl-3 pl-lg-0">
                            <div class="slider-search-filter slick-initialized slick-slider slick-dotted">
                                <button class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                        style="display: inline-block;">Previous
                                </button>
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                         style="opacity: 1; width: 2555px; transform: translate3d(-1095px, 0px, 0px);">
                                        <div class="slick-slide slick-cloned" data-slick-index="-1"
                                             aria-hidden="true" tabindex="-1" style="width: 365px;"><a
                                                href="https://blog.swio.vn/cac-dia-diem-nen-den-o-mu-cang-chai-phan-1/"
                                                target="_blank" class="image" tabindex="-1"><img
                                                    src="https://blog.swio.vn/wp-content/uploads/2021/09/deo-khau-pha-mu-cang-chai-min-525x375.jpg"
                                                    class="img-fluid">
                                                <p class="title">Các địa điểm nên đến ở Mù Cang Chải</p></a></div>
                                        <div class="slick-slide" data-slick-index="0" aria-hidden="true"
                                             tabindex="-1" role="tabpanel" id="slick-slide80"
                                             aria-describedby="slick-slide-control80" style="width: 365px;"><a
                                                href="https://blog.swio.vn/ma-thien-lanh-tay-ninh/" target="_blank"
                                                class="image" tabindex="-1"><img
                                                    src="https://blog.swio.vn/wp-content/uploads/2022/01/Best-Travel-Instagram-Post-1.png"
                                                    class="img-fluid">
                                                <p class="title">Ma Thiên Lãnh Tây Ninh: “Đà Lạt” của Đông Nam
                                                    Bộ</p></a></div>
                                        <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                             tabindex="-1" role="tabpanel" id="slick-slide81"
                                             aria-describedby="slick-slide-control81" style="width: 365px;"><a
                                                href="https://blog.swio.vn/vi-sao-may-lang-thang-thu-hut-gioi-tre/"
                                                target="_blank" class="image" tabindex="-1"><img
                                                    src="https://blog.swio.vn/wp-content/uploads/2021/11/3401-den-da-lat-o-tro-tren-may-163346-1-min-1024x577.jpg"
                                                    class="img-fluid">
                                                <p class="title">Vì sao Mây Lang Thang thu hút giới trẻ?</p></a>
                                        </div>
                                        <div class="slick-slide slick-current slick-active" data-slick-index="2"
                                             aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide82"
                                             aria-describedby="slick-slide-control82" style="width: 365px;"><a
                                                href="https://blog.swio.vn/cac-dia-diem-nen-den-o-mu-cang-chai-phan-1/"
                                                target="_blank" class="image" tabindex="0"><img
                                                    src="https://blog.swio.vn/wp-content/uploads/2021/09/deo-khau-pha-mu-cang-chai-min-525x375.jpg"
                                                    class="img-fluid">
                                                <p class="title">Các địa điểm nên đến ở Mù Cang Chải</p></a></div>
                                        <div class="slick-slide slick-cloned" data-slick-index="3"
                                             aria-hidden="true" tabindex="-1" style="width: 365px;"><a
                                                href="https://blog.swio.vn/ma-thien-lanh-tay-ninh/" target="_blank"
                                                class="image" tabindex="-1"><img
                                                    src="https://blog.swio.vn/wp-content/uploads/2022/01/Best-Travel-Instagram-Post-1.png"
                                                    class="img-fluid">
                                                <p class="title">Ma Thiên Lãnh Tây Ninh: “Đà Lạt” của Đông Nam
                                                    Bộ</p></a></div>
                                        <div class="slick-slide slick-cloned" data-slick-index="4"
                                             aria-hidden="true" tabindex="-1" style="width: 365px;"><a
                                                href="https://blog.swio.vn/vi-sao-may-lang-thang-thu-hut-gioi-tre/"
                                                target="_blank" class="image" tabindex="-1"><img
                                                    src="https://blog.swio.vn/wp-content/uploads/2021/11/3401-den-da-lat-o-tro-tren-may-163346-1-min-1024x577.jpg"
                                                    class="img-fluid">
                                                <p class="title">Vì sao Mây Lang Thang thu hút giới trẻ?</p></a>
                                        </div>
                                        <div class="slick-slide slick-cloned" data-slick-index="5"
                                             aria-hidden="true" tabindex="-1" style="width: 365px;"><a
                                                href="https://blog.swio.vn/cac-dia-diem-nen-den-o-mu-cang-chai-phan-1/"
                                                target="_blank" class="image" tabindex="-1"><img
                                                    src="https://blog.swio.vn/wp-content/uploads/2021/09/deo-khau-pha-mu-cang-chai-min-525x375.jpg"
                                                    class="img-fluid">
                                                <p class="title">Các địa điểm nên đến ở Mù Cang Chải</p></a></div>
                                    </div>
                                </div>
                                <button class="slick-next slick-arrow" aria-label="Next" type="button"
                                        style="display: inline-block;">Next
                                </button>
                                <ul class="slick-dots" style="" role="tablist">
                                    <li class="" role="presentation">
                                        <button type="button" role="tab" id="slick-slide-control80"
                                                aria-controls="slick-slide80" aria-label="1 of 3" tabindex="-1">1
                                        </button>
                                    </li>
                                    <li role="presentation" class="">
                                        <button type="button" role="tab" id="slick-slide-control81"
                                                aria-controls="slick-slide81" aria-label="2 of 3" tabindex="-1">2
                                        </button>
                                    </li>
                                    <li role="presentation" class="slick-active">
                                        <button type="button" role="tab" id="slick-slide-control82"
                                                aria-controls="slick-slide82" aria-label="3 of 3" tabindex="0"
                                                aria-selected="true">3
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form><!---->
                    <div class="search-seat-type">
                        <div data-dismiss="modal" class="close-m">×</div>
                        <h3>Loại ghế</h3>
                    </div>
                </div>
                <div class="search-list-btn">
                    <button type="button" class="btn btnMobileResetFilter">Làm mới</button>
                    <button type="button" class="btn btn-review btnMobileResetFilter"> Xem kết quả
                    </button>
                </div>
                <div class="search-range">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="departure-time"><p>Giờ lên xe</p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="slider-range"
                                                     class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                                    <div class="noUi-base">
                                                        <div class="noUi-origin noUi-connect" style="left: 0%;">
                                                            <div class="noUi-handle noUi-handle-lower"></div>
                                                        </div>
                                                        <div class="noUi-origin noUi-background"
                                                             style="left: 100%;">
                                                            <div class="noUi-handle noUi-handle-upper"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row slider-labels">
                                            <div class="col-xs-6"><span id="slider-range-value1">0:00</span></div>
                                            <div class="col-xs-6"><span id="slider-range-value2">23:59</span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                                    <input type="hidden" name="min-value" value="">
                                                    <input type="hidden" name="max-value" value="">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 check-point"><h3>Chọn nhà xe</h3>
                                <div class="search-drop">
                                    <input type="text" id="txt-input" autocomplete="off" spellcheck="false"
                                           class="txt-input" placeholder="Chọn nhà xe">
                                    <ul class="search-drop-list scrollbar">
                                        <li>
                                            <div data-dismiss="modal" class="close-m">×</div>
                                        </li>
                                        <li><h3>Chọn nhà xe</h3></li>
                                        <li>
                                            <div class="search-drop-input">
                                                <input type="text" spellcheck="false" class="txt-input"
                                                       placeholder="Tìm kiếm"></div>
                                        </li>
                                        <li>Không có dữ liệu</li>
                                    </ul>
                                </div>
                                <div class="search-drop">
                                    <input type="text" autocomplete="off" spellcheck="false" class="txt-input"
                                           placeholder="Chọn điểm đi">
                                    <ul class="search-drop-list scrollbar">
                                        <li>
                                            <div data-dismiss="modal" class="close-m">×</div>
                                        </li>
                                        <li><h3>Chọn điểm đi</h3></li>
                                        <li>
                                            <div class="search-drop-input">
                                                <input type="text" spellcheck="false" class="txt-input"
                                                       placeholder="Tìm kiếm">
                                            </div>
                                        </li>
                                        <li>Không có dữ liệu</li>
                                    </ul>
                                </div>
                                <div class="search-drop">
                                    <input type="text" autocomplete="off" spellcheck="false" class="txt-input"
                                           placeholder="Chọn điểm đến">
                                    <ul class="search-drop-list scrollbar">
                                        <li>
                                            <div data-dismiss="modal" class="close-m">×</div>
                                        </li>
                                        <li><h3>Chọn điểm đến</h3></li>
                                        <li>
                                            <div class="search-drop-input">
                                                <input type="text" spellcheck="false" class="txt-input"
                                                       placeholder="Tìm kiếm"></div>
                                        </li>
                                        <li>Không có dữ liệu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!----><!---->
            </div>
        </div>
    </div>
    </section>
    <section class="search-result">
        <div class="container"><!---->
            <div class="row search-sort">
                <div class="search-sort-block"><p><span>0 chuyến xe</span></p>
                    <p><span>Bà Rịa-Vũng Tàu đến Hồ Chí Minh [Thứ tư, 02/03/2022]</span></p></div>
                <div class="search-sort-text">
                    <div>
                        <div class="dropdown">
                            <div class="dropdown-select"><span>Tất cả đánh giá</span><i class="fa fa-angle-down"></i>
                            </div>
                            <input type="hidden" class="txt-input">
                            <ul class="dropdown-menu"><!---->
                                <li>Không có dữ liệu</li><!----></ul>
                        </div>
                        <div class="dropdown">
                            <div class="dropdown-select"><span>30 kết quả</span><i class="fa fa-angle-down"></i></div>
                            <input type="hidden" class="txt-input">
                            <ul class="dropdown-menu">
                                <li>10 kết quả</li>
                                <li>30 kết quả</li>
                                <li>50 kết quả</li>
                                <li>100 kết quả</li><!---->
                            </ul>
                        </div>
                    </div>
                    <ul class="sort-text">
                        <li><a href="javascript:;">Khởi hành sớm nhất</a></li>
                        <li><a href="javascript:;">Khởi hành muộn nhất</a></li>
                        <li><a href="javascript:;" class="active">Giá thấp nhất</a></li>
                        <li><a href="javascript:;">Giá cao nhất</a></li><!----></ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-result">
        <div class="container">
            <div class="row">
                <div class="mobile-result-content">
                    <div class="mobile-result-content-item"><a routerlink="/" class="back" href="/"><i
                                class="fa fa-angle-left"></i></a>
                        <div><p>Tìm thấy</p>
                            <p class="show-result">0 kết quả</p></div>
                    </div>
                    <div class="mobile-result-content-item mobile-search">
                        <div><p>Bà Rịa-Vũng Tàu - Hồ Chí Minh</p>
                            <p class="show-date">02/03/2022</p></div>
                        <button class="btn-mobile-search"><i aria-hidden="true" class="fa fa-angle-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ticket">
        <div class="container"><!---->
            <div class="row ticket-suggest-title"><h3>Nhà xe đề xuất</h3></div><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>8</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">06:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">08:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!---->
            <trip-detail id="detail_0">
                <div class="row ticket-services-detail animation open">
                    <div data-dismiss="modal" class="close-m">×</div>
                    <div class="col-12 col-lg-6">
                        <div class="slideshow slick-initialized slick-slider">
                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">
                                Previous
                            </button>
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 10200px;">
                                    <div class="item slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
                                        <img alt="Xe Lovabus Mặt trước xe Ghế ngồi 16 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-bk5rYqf-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -510px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
                                        <img alt="Xe Lovabus Bên hông xe Ghế ngồi 16 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-unuRuin-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -1020px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
                                        <img alt="Xe Lovabus Mặt trước xe Ghế ngồi 16 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-DbfQPSm-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -1530px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
                                        <img alt="Xe Lovabus Mặt trước xe Ghế ngồi 16 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-i3oa9Qo-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide slick-current slick-active" data-slick-index="4"
                                         aria-hidden="false" tabindex="0"
                                         style="width: 510px; position: relative; left: -2040px; top: 0px; z-index: 999; opacity: 1;">
                                        <img alt="Xe Lovabus Mặt trước xe Limousine 9 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-96JHMyY-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -2550px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Bên hông xe Limousine 9 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-tKfZ8QA-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -3060px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Bên hông xe Limousine 9 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-Eb5wxNT-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -3570px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Limousine 9 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-BBCosN1-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -4080px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Limousine 9 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-Iv5rlyf-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -4590px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Nội thất Ghế ngồi Limousine 9 chỗ"
                                             src="//////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-C0pTwQh-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -5100px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Limousine 9 chỗ"
                                             src="////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-khSEliQ-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="11" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -5610px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Sơ đồ ghế thường "
                                             src="//////static.vexere.com/c/i/11186/xe-hoa-mai-VeXeRe-QA0zH7C-1000x600.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="12" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -6120px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Limousine 9 chỗ"
                                             src="//////static.vexere.com/production/images/1615516595463.jpeg"></div>
                                    <div class="item slick-slide" data-slick-index="13" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -6630px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Ghế ngồi 10 chỗ"
                                             src="//////static.vexere.com/production/images/1620892743053.jpeg"></div>
                                    <div class="item slick-slide" data-slick-index="14" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -7140px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Bên hông xe Ghế ngồi 10 chỗ"
                                             src="//////static.vexere.com/production/images/1620892744013.jpeg"></div>
                                    <div class="item slick-slide" data-slick-index="15" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -7650px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Bên hông xe Ghế ngồi 10 chỗ"
                                             src="//////static.vexere.com/production/images/1620892744846.jpeg"></div>
                                    <div class="item slick-slide" data-slick-index="16" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -8160px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Bên hông xe Ghế ngồi 10 chỗ"
                                             src="//////static.vexere.com/production/images/1620892745806.jpeg"></div>
                                    <div class="item slick-slide" data-slick-index="17" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -8670px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Ghế ngồi 10 chỗ"
                                             src="//////static.vexere.com/production/images/1620892746878.jpeg"></div>
                                    <div class="item slick-slide" data-slick-index="18" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -9180px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Lovabus Mặt trước xe Ghế ngồi 10 chỗ"
                                             src="//////static.vexere.com/production/images/1620892747663.jpeg"></div>
                                    <div class="item slick-slide" data-slick-index="19" aria-hidden="true" tabindex="-1"
                                         style="width: 510px; position: relative; left: -9690px; top: 0px; z-index: 998; opacity: 0;">
                                        <img alt="Xe Hoa Mai Mặt trước xe Ghế ngồi 16 chỗ"
                                             src="//////static.vexere.com/production/images/1638939564714.jpeg"></div>
                                </div>
                            </div><!---->
                            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next
                            </button>
                        </div><!----><!----></div>
                    <div class="col-12 col-lg-6"><h2 class="service-title">Tiện ích &amp; Chính sách nhà xe</h2>
                        <div class="ticket-service-info scrollbar">
                            <div class="ticket-service-info-item"><h4>An toàn mùa Covid-19</h4>
                                <p>Là chương trình bảo vệ an toàn cho hành khách sử dụng dịch vụ của SWIO trong mùa dịch
                                    Covid. SWIO đồng hành các nhà xe đối tác triển khai biện pháp bảo vệ an toàn cho
                                    hành khách, như sau:<br>(1) Kiểm tra thân nhiệt hành khách trước khi lên xe;<br>(2)
                                    Trang bị nước rửa tay;<br>(3) Có đảm bảo khuyến cáo tất cả hành khách đeo khẩu trang
                                    khi lên xe;<br>(4) Có thực hiện khử trùng xe;<br>(5) Tài xế và nhân viên đã được
                                    tiêm vắc xin</p></div>
                            <div class="ticket-service-info-item"><h4>Xem vị trí xe trực tuyến</h4>
                                <p>Cho phép hành khách nhìn thấy được lộ trình và thời gian di chuyển của chiếc xe khách
                                    mình đã đặt vé.</p></div>
                            <div class="ticket-service-info-item"><h4>Nhân viên sử dụng tiếng anh</h4>
                                <p>Nhân viên phòng vé, tài xế , phụ xe có thể giao tiếp bằng tiếng anh với hành
                                    khách.</p></div>
                            <div class="ticket-service-info-item"><h4>Ghế massage</h4>
                                <p>Ghế massage giúp cho hành khách ngồi trên xe thoải mái trong thời gian dài </p></div>
                            <div class="ticket-service-info-item"><h4>Tivi LED</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Sạc điện thoại</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Siêu deal 12.12</h4>
                                <p>Duy nhất trong ngày 12.12, đặt vé để tận hưởng hàng nghìn voucher 20k - 50k - 100k -
                                    300k. </p></div>
                            <div class="ticket-service-info-item"><h4>Nhân viên đã tiêm vắc xin</h4>
                                <p>Tài xế và nhân viên nhà xe đã được tiêm vắc xin phòng Covid -19</p></div>
                            <div class="ticket-service-info-item"><h4>Rèm cửa</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Dàn âm thanh (Loa)</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Dây đai an toàn</h4>
                                <p>Trên xe có trang bị dây đai an toàn cho hành khách khi ngồi trên xe</p></div>
                            <div class="ticket-service-info-item"><h4>Xe trung chuyển</h4>
                                <p>Nhà xe có xe trung chuyển đón khách tận nơi tại nhà/khách sạn</p></div>
                            <div class="ticket-service-info-item"><h4>Khử trùng xe</h4>
                                <p>Nhà xe có thực hiện phun khử trùng Nano Bạc lên xe nhằm bảo vệ an toàn cho hành khách
                                    mùa Covid</p></div>
                            <div class="ticket-service-info-item"><h4>Nước rửa tay</h4>
                                <p>Nhà xe có trang bị nước rửa tay diệt khuẩn trước khi lên xe và trong xe</p></div>
                            <div class="ticket-service-info-item"><h4>Đo thân nhiệt</h4>
                                <p>Hành khách sẽ được đo thân nhiệt trước khi lên xe để xác định không nghi nhiễm/ lan
                                    truyền vi rút Covid cho hành khách khác.</p></div>
                            <div class="ticket-service-info-item"><h4>Khuyến cáo đeo khẩu trang</h4>
                                <p>Có đảm bảo khuyến cáo tất cả hành khách đeo khẩu trang khi lên xe</p></div>
                            <div class="ticket-service-info-item"><h4>Wifi</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Nước uống</h4>
                                <p>Nhà xe có phục vụ nước cho hành khách </p></div>
                            <div class="ticket-service-info-item"><h4>Điều hòa</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Khăn lạnh</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Búa phá kính</h4>
                                <p>Dùng để phá kính ô tô thoát hiểm trong trường hợp khẩn cấp.</p></div><!---->
                            <div class="ticket-service-info-item"><h4>An toàn Covid-19</h4>
                                <ul class="company-policies">
                                    <li>Yêu cầu đeo khẩu trang khi lên xe</li><!----></ul><!----></div>
                            <div class="ticket-service-info-item"><h4>Yêu cầu khi lên xe</h4>
                                <ul class="company-policies">
                                    <li>Có mặt tại văn phòng/quầy vé/bến xe trước 15 phút để làm thủ tục lên xe</li>
                                    <li>Không mang đồ ăn, thức ăn có mùi lên xe</li>
                                    <li>Không hút thuốc, uống rượu, sử dụng chất kích thích trên xe</li>
                                    <li>Không mang các vật dễ cháy nổ lên xe</li>
                                    <li>Không vứt rác trên xe</li><!----></ul><!----></div>
                            <div class="ticket-service-info-item"><h4>Hành lý xách tay</h4>
                                <ul class="company-policies">
                                    <li>Tổng trọng lượng hành lý không vượt quá 15 kg</li><!----></ul><!----></div>
                            <div class="ticket-service-info-item"><h4>Trẻ em và phụ nữ có thai</h4>
                                <ul class="company-policies">
                                    <li>Trẻ em từ 6 tuổi hoặc cao từ 100 cm trở lên mua vé như người lớn</li><!---->
                                </ul><!----></div><!----><!----></div>
                        <div class="ticket-service-policy"><h2>Chính sách - Phí hủy</h2>
                            <div class="ticket-service-time">
                                <ul>
                                    <li class="active"><span class="present-time"> Hiện tại </span><!----><!----><!---->
                                        <div class="fee-title">Không mất phí</div><!---->
                                        <div class="fee-depart">Khởi hành</div><!----></li><!----><!----></ul>
                            </div>
                            <p class="service-note"><span>Ghi chú:</span> Phí huỷ sẽ được tính trên giá gốc, không giảm
                                trừ khuyến mãi hoặc giảm giá; đồng thời không vượt quá số tiền quý khách đã thanh toán.
                            </p><!----></div>
                    </div><!----><!----><!----></div>
            </trip-detail>
            <div class="row ticket-suggest-title"><h3>Nhà xe bán chạy</h3></div><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img">
                    <img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                         alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">05:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">07:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">09:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">11:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">11:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">13:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-suggest-title"><h3>Nhà xe tốt nhất</h3></div><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">12:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">14:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">07:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">09:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">10:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">12:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>8</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">15:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">17:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">09:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">11:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">07:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">09:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">14:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">16:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">06:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">08:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">14:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">16:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>6</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">05:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">07:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">08:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">10:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">11:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">13:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">08:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">10:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">13:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">15:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>8</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">16:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">18:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">16:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">18:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">13:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">15:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>7</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">12:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">14:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">15:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">17:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>9</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">10:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">12:45</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1620892743053.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 10 chỗ</p>
                            <p class="seat-pos"><span>8</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">17:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến Xe Miền Đông - Quầy vé số 84-85">
                                        Bến Xe Miền Đông - Quầy vé số 84-85</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">19:15</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">110</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 15 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1638939564714.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 16 chỗ</p>
                            <p class="seat-pos"><span>15</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">06:30</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến xe Miền Tây">Bến xe Miền Tây</p>
                                </div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">09:10</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">120</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 40 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1638939564714.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 16 chỗ</p>
                            <p class="seat-pos"><span>12</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">06:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến xe Miền Tây">Bến xe Miền Tây</p>
                                </div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">08:40</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">120</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 40 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1638939564714.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 16 chỗ</p>
                            <p class="seat-pos"><span>14</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">10:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến xe Miền Tây">Bến xe Miền Tây</p>
                                </div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">12:40</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">120</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 40 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1638939564714.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 16 chỗ</p>
                            <p class="seat-pos"><span>14</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">07:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến xe Miền Tây">Bến xe Miền Tây</p>
                                </div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">09:40</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">120</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 40 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!----><!----><!---->
            <div class="row ticket-item">
                <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1638939564714.jpeg"
                                                  alt="Hoa Mai"></div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>Hoa Mai</h2>
                        <div class="ticket-header-seat"><p>Ghế ngồi 16 chỗ</p>
                            <p class="seat-pos"><span>14</span> ghế trống</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup" title="Văn phòng Hoa Mai Vũng Tàu">Văn phòng
                                        Hoa Mai Vũng Tàu</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info pickup-time">08:00</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff" title="Bến xe Miền Tây">Bến xe Miền Tây</p>
                                </div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info dropoff-time">10:40</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                    <p class="ticket-content-info">120</p></div>
                                <div><p class="ticket-content-title">Tổng thời gian</p>
                                    <p class="ticket-content-info">2 giờ 40 phút </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info">Thông tin chi tiết <i aria-hidden="true"
                                                                              class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price"><!----><!---->150,000 ₫</div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                             class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><!----><i
                            aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div><!---->
                    <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!----><!----><!----><!----><!---->
            <div class="text-center py-3">
                <button type="button" class="btn">Xem thêm</button><!----></div><!----><!----><!----><!----><!---->
        </div>
    </section>
    <dialog-message>
        <div tabindex="-1" role="dialog" aria-hidden="true" class="modal fade modal-custom" id="dialog-searchTrips">
            <div role="document" class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button><!----></div>
                    <div class="modal-body txt-center"><!----><!----></div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-cancel">Đồng ý</button><!----><!---->
                    </div>
                </div>
            </div>
        </div>
    </dialog-message>

@stop
