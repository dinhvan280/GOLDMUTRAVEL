@include('frontend.template.header')
            <div class="search-feature">
                <div class="container">
                    <trip-search-filter>
                        <div class="search-form">
                            <form novalidate="" class="row ng-untouched ng-pristine ng-valid">
                                <div class="col-12 col-lg-8 mt-4">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 search-form-item"><label>Nơi đi</label>
                                            <div class="search-drop"><i aria-hidden="true" class="fa fa-map-marker"></i>
                                                <!----><input type="text" id="pickupPoint" autocomplete="off"
                                                              spellcheck="false" tabindex="1" class="txt-input"
                                                              placeholder="Chọn nơi đi"><!----></div>
                                            <button type="button" class="btn-switch"><i aria-hidden="true"
                                                                                        class="fa fa-expand"></i>
                                            </button>
                                        </div>
                                        <div class="col-12 col-lg-6 search-form-item"><label>Nơi đến</label>
                                            <div class="search-drop"><i aria-hidden="true" class="fa fa-map-marker"></i>
                                                <!----><input type="text" id="dropOffPoint" autocomplete="off"
                                                              spellcheck="false" tabindex="2" class="txt-input"
                                                              placeholder="Chọn nơi đến"><!----></div>
                                        </div>
                                    </div>
                                    <div class="mb-3 mb-lg-0 mt-4 row">
                                        <div class="col-12 col-lg-6 search-form-item"><label>Ngày đi</label>
                                            <div class="pi">
                                                <div class="close-m">×</div>
                                                <i aria-hidden="true" class="fa fa-calendar"></i>
                                                <ngx-datepicker id="myDatepicker" name="boardingDate" tabindex="3"
                                                                class="myDatepicker ng-untouched ng-pristine ng-valid"
                                                                _nghost-pcj-c29="">
                                                    <div _ngcontent-pcj-c29=""
                                                         class="datepicker-container datepicker-default"><input
                                                            _ngcontent-pcj-c29="" type="text" readonly=""
                                                            class="myDatepicker txt-input w-100 ng-untouched ng-pristine ng-valid"
                                                            placeholder="Chọn ngày đi"><!----></div>
                                                </ngx-datepicker>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 search-form-item"><label
                                                style="height: 24px;"></label>
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
                                                 style="opacity: 1; width: 2555px; transform: translate3d(-365px, 0px, 0px);">
                                                <div class="slick-slide slick-cloned" data-slick-index="-1"
                                                     aria-hidden="true" tabindex="-1" style="width: 365px;">
                                                    <div class="image"><img
                                                            src="https://blog.swio.vn/wp-content/uploads/2021/10/MicrosoftTeams-image-3-min-743x375.png"
                                                            class="img-fluid"></div>
                                                </div>
                                                <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                                     aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10"
                                                     aria-describedby="slick-slide-control10" style="width: 365px;">
                                                    <div class="image"><img
                                                            src="https://blog.swio.vn/wp-content/uploads/2021/11/swio_11-min-750x371.png"
                                                            class="img-fluid"></div>
                                                </div>
                                                <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                                     tabindex="-1" role="tabpanel" id="slick-slide11"
                                                     aria-describedby="slick-slide-control11" style="width: 365px;">
                                                    <div class="image"><img
                                                            src="https://blog.swio.vn/wp-content/uploads/2021/11/thong-tin-phong-chong-covid-min.png"
                                                            class="img-fluid"></div>
                                                </div>
                                                <div class="slick-slide" data-slick-index="2" aria-hidden="true"
                                                     tabindex="-1" role="tabpanel" id="slick-slide12"
                                                     aria-describedby="slick-slide-control12" style="width: 365px;">
                                                    <div class="image"><img
                                                            src="https://blog.swio.vn/wp-content/uploads/2021/10/MicrosoftTeams-image-3-min-743x375.png"
                                                            class="img-fluid"></div>
                                                </div>
                                                <div class="slick-slide slick-cloned" data-slick-index="3"
                                                     aria-hidden="true" tabindex="-1" style="width: 365px;">
                                                    <div class="image"><img
                                                            src="https://blog.swio.vn/wp-content/uploads/2021/11/swio_11-min-750x371.png"
                                                            class="img-fluid"></div>
                                                </div>
                                                <div class="slick-slide slick-cloned" data-slick-index="4"
                                                     aria-hidden="true" tabindex="-1" style="width: 365px;">
                                                    <div class="image"><img
                                                            src="https://blog.swio.vn/wp-content/uploads/2021/11/thong-tin-phong-chong-covid-min.png"
                                                            class="img-fluid"></div>
                                                </div>
                                                <div class="slick-slide slick-cloned" data-slick-index="5"
                                                     aria-hidden="true" tabindex="-1" style="width: 365px;">
                                                    <div class="image"><img
                                                            src="https://blog.swio.vn/wp-content/uploads/2021/10/MicrosoftTeams-image-3-min-743x375.png"
                                                            class="img-fluid"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="slick-next slick-arrow" aria-label="Next" type="button"
                                                style="display: inline-block;">Next
                                        </button>
                                        <ul class="slick-dots" style="" role="tablist">
                                            <li class="slick-active" role="presentation">
                                                <button type="button" role="tab" id="slick-slide-control10"
                                                        aria-controls="slick-slide10" aria-label="1 of 3" tabindex="0"
                                                        aria-selected="true">1
                                                </button>
                                            </li>
                                            <li role="presentation" class="">
                                                <button type="button" role="tab" id="slick-slide-control11"
                                                        aria-controls="slick-slide11" aria-label="2 of 3" tabindex="-1">
                                                    2
                                                </button>
                                            </li>
                                            <li role="presentation" class="">
                                                <button type="button" role="tab" id="slick-slide-control12"
                                                        aria-controls="slick-slide12" aria-label="3 of 3" tabindex="-1">
                                                    3
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form><!---->
                            <div class="search-seat-type">
                                <div data-dismiss="modal" class="close-m">×</div>
                                <h3>Loại ghế</h3>
                                <div class="checkbox"><input type="checkbox" name="check" value="check" id="seatTypes0"><label
                                        for="seatTypes0">VIP Limousine</label></div><!----><!----><!---->
                                <div class="checkbox"><input type="checkbox" name="check" value="check" id="seatTypes1"><label
                                        for="seatTypes1">Ghế ngồi</label></div><!----><!----><!----></div>
                        </div>
                        <div class="search-list-btn">
                            <button type="button" class="btn btnMobileResetFilter">Làm mới</button>
                            <button type="button" class="btn btn-review btnMobileResetFilter"> Xem 12<!----><!----> kết
                                quả
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
                                                    <div class="col-xs-6"><span id="slider-range-value1">0:00</span>
                                                    </div>
                                                    <div class="col-xs-6"><span id="slider-range-value2">23:59</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                                            <input type="hidden" name="min-value" value=""><input
                                                                type="hidden" name="max-value" value=""></form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8 check-point"><h3>Chọn nhà xe</h3>
                                        <div class="search-drop">
                                            <input type="text" id="txt-input" autocomplete="off"
                                                   spellcheck="false" class="txt-input"
                                                   placeholder="Chọn nhà xe">
                                            <ul class="search-drop-list scrollbar">
                                                <li>
                                                    <div data-dismiss="modal" class="close-m">×</div>
                                                </li>
                                                <li><h3>Chọn nhà xe</h3></li>
                                                <li>
                                                    <div class="search-drop-input">
                                                        <input type="text" spellcheck="false" class="txt-input"
                                                               placeholder="Tìm kiếm">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="check" value="check"
                                                               id="checkCompany17782"><label
                                                            for="checkCompany17782">Phúc Lộc Thọ Limousine
                                                            <span>(12)</span><!----></label></div>
                                                </li><!----><!----><!----><!----></ul>
                                        </div>
                                        <div class="search-drop"><input type="text" autocomplete="off"
                                                                        spellcheck="false" class="txt-input"
                                                                        placeholder="Chọn điểm đi">
                                            <ul class="search-drop-list scrollbar">
                                                <li>
                                                    <div data-dismiss="modal" class="close-m">×</div>
                                                </li>
                                                <li><h3>Chọn điểm đi</h3></li>
                                                <li>
                                                    <div class="search-drop-input"><input type="text" spellcheck="false"
                                                                                          class="txt-input"
                                                                                          placeholder="Tìm kiếm"></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup0.0"><label
                                                            for="checkPickup0.0">143 Trung Kính (Cổng Trường Đại học
                                                            Phương Đông) (6)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup0.1"><label
                                                            for="checkPickup0.1">8 Tôn Thất Thuyết (6)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup0.2"><label
                                                            for="checkPickup0.2">Ngõ 75 Trần Thái Tông (6)</label></div>
                                                </li><!----><!---->
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup1.0"><label
                                                            for="checkPickup1.0">Cây xăng Linh Đàm (6)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup1.1"><label
                                                            for="checkPickup1.1">Trạm xe bus - cây xăng Hà Thành
                                                            (6)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup1.2"><label
                                                            for="checkPickup1.2">31 Thịnh Liệt - quán Cafe Mộc
                                                            (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup1.3"><label
                                                            for="checkPickup1.3">Honda Nguyên Hùng - cầu Trắng Giải
                                                            Phóng (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup1.4"><label
                                                            for="checkPickup1.4">UBND Hoàng Mai (1)</label></div>
                                                </li><!----><!---->
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup2.0"><label
                                                            for="checkPickup2.0">166 Khuất Duy Tiến(Trước cổng nhà văn
                                                            hóa quận Thanh Xuân) (6)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup2.1"><label
                                                            for="checkPickup2.1">Điện máy XANH Nguyễn Xiển (6)</label>
                                                    </div>
                                                </li><!----><!---->
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup3.0"><label
                                                            for="checkPickup3.0">8 Tôn Thất Thuyết - Đối diện Bến xe Mỹ
                                                            Đình (6)</label></div>
                                                </li><!----><!---->
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup4.0"><label
                                                            for="checkPickup4.0">198 Trần Khát Chân (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup4.1"><label
                                                            for="checkPickup4.1">254B Lê Thanh Nghị (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup4.2"><label
                                                            for="checkPickup4.2">51 Đại Cồ Việt (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup4.3"><label
                                                            for="checkPickup4.3">Cổng sau Đại học Bách Khoa - Trần Đại
                                                            Nghĩa (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup4.4"><label
                                                            for="checkPickup4.4">Khu đô thị Times City (1)</label></div>
                                                </li><!----><!---->
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup5.0"><label
                                                            for="checkPickup5.0">AEON MALL Long Biên (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup5.1"><label
                                                            for="checkPickup5.1">Aeon Mall Long Biên (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup5.2"><label
                                                            for="checkPickup5.2">Sân Golf Long Biên (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup5.3"><label
                                                            for="checkPickup5.3">Số 99 Chu Huy Mân (1)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkPickup5.4"><label
                                                            for="checkPickup5.4">Vinhomes Riverside (1)</label></div>
                                                </li><!----><!----><!----><!----><!----><!----></ul>
                                        </div>
                                        <div class="search-drop"><input type="text" autocomplete="off"
                                                                        spellcheck="false" class="txt-input"
                                                                        placeholder="Chọn điểm đến">
                                            <ul class="search-drop-list scrollbar">
                                                <li>
                                                    <div data-dismiss="modal" class="close-m">×</div>
                                                </li>
                                                <li><h3>Chọn điểm đến</h3></li>
                                                <li>
                                                    <div class="search-drop-input"><input type="text" spellcheck="false"
                                                                                          class="txt-input"
                                                                                          placeholder="Tìm kiếm"></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkDropOff0.0"><label
                                                            for="checkDropOff0.0">Thành phố Nam Định (7)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkDropOff0.1"><label
                                                            for="checkDropOff0.1">Văn phòng Nam Định (7)</label></div>
                                                </li>
                                                <li>
                                                    <div class="checkbox"><input type="checkbox" name="check"
                                                                                 value="check"
                                                                                 id="checkDropOff0.2"><label
                                                            for="checkDropOff0.2">Thành Phố Nam Định (1)</label></div>
                                                </li><!----><!----><!----><!----><!----><!----></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!----><!----></trip-search-filter>
                </div>
            </div>
        </section>
        <section class="search-result">
            <div class="container"><!---->
                <div class="row search-sort">
                    <div class="search-sort-block"><p><span>12 chuyến xe</span></p>
                        <p><span>Hà Nội đến Nam Định [Thứ tư, 05/01/2022]</span></p></div>
                    <div class="search-sort-text">
                        <div>
                            <div class="dropdown">
                                <div class="dropdown-select"><span>Tất cả đánh giá</span><i
                                        class="fa fa-angle-down"></i></div>
                                <input type="hidden" class="txt-input">
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i
                                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                    class="fa fa-star active"></i><i
                                                aria-hidden="true" class="fa fa-star active"></i><!----><i
                                                aria-hidden="true" class="fa fa-star"></i><!----><span class="ml-2">trở lên (12)</span>
                                        </div>
                                    </li><!----><!----></ul>
                            </div>
                            <div class="dropdown">
                                <div class="dropdown-select"><span>30 kết quả</span><i class="fa fa-angle-down"></i>
                                </div>
                                <input type="hidden" class="txt-input">
                                <ul class="dropdown-menu">
                                    <li>10 kết quả</li>
                                    <li>30 kết quả</li>
                                    <li>50 kết quả</li>
                                    <li>100 kết quả</li><!----></ul>
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
                        <div class="mobile-result-content-item"><p>Tìm thấy</p>
                            <p class="show-result">12 kết quả</p></div>
                        <div class="mobile-result-content-item mobile-search">
                            <div><p>Hà Nội - Nam Định</p>
                                <p class="show-date">05-01-2022</p></div>
                            <button class="btn-mobile-search"><i aria-hidden="true" class="fa fa-angle-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ticket">
            <div class="container"><!---->
                <div class="row ticket-suggest-title"><h3>Nhà xe đề xuất</h3></div><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1566794227529.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 12 chỗ</p>
                                <p class="seat-pos"><span>11</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="AEON MALL Long Biên">AEON MALL Long
                                            Biên</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">08:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">09:30</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">82</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 30 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.4</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!---->
                <div class="row ticket-suggest-title"><h3>Nhà xe bán chạy</h3></div><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1566794227529.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 12 chỗ</p>
                                <p class="seat-pos"><span>11</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="AEON MALL Long Biên">AEON MALL Long
                                            Biên</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">11:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">12:30</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">82</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 30 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.4</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1566794227529.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 12 chỗ</p>
                                <p class="seat-pos"><span>11</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="AEON MALL Long Biên">AEON MALL Long
                                            Biên</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">09:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">10:30</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">82</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 30 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.4</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1566794227529.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 12 chỗ</p>
                                <p class="seat-pos"><span>11</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="AEON MALL Long Biên">AEON MALL Long
                                            Biên</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">20:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">21:30</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">82</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 30 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.4</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-suggest-title"><h3>Nhà xe tốt nhất</h3></div><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1603770367346.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 19 chỗ</p>
                                <p class="seat-pos"><span>18</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="8 Tôn Thất Thuyết">8 Tôn Thất
                                            Thuyết</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">13:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">14:20</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">100</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 20 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.3</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1603770367346.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 19 chỗ</p>
                                <p class="seat-pos"><span>18</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="8 Tôn Thất Thuyết">8 Tôn Thất
                                            Thuyết</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">11:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">12:20</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">100</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 20 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.3</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1603770367346.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 19 chỗ</p>
                                <p class="seat-pos"><span>18</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="8 Tôn Thất Thuyết">8 Tôn Thất
                                            Thuyết</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">18:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">19:20</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">100</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 20 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.3</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1566794227529.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 12 chỗ</p>
                                <p class="seat-pos"><span>11</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="AEON MALL Long Biên">AEON MALL Long
                                            Biên</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">17:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">18:30</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">82</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 30 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.3</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1603770367346.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 19 chỗ</p>
                                <p class="seat-pos"><span>18</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="8 Tôn Thất Thuyết">8 Tôn Thất
                                            Thuyết</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">15:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">16:20</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">100</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 20 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.3</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1603770367346.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 19 chỗ</p>
                                <p class="seat-pos"><span>18</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="8 Tôn Thất Thuyết">8 Tôn Thất
                                            Thuyết</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">20:01</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">21:21</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">100</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 20 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.3</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1603770367346.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 19 chỗ</p>
                                <p class="seat-pos"><span>18</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="8 Tôn Thất Thuyết">8 Tôn Thất
                                            Thuyết</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">08:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">09:20</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">100</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 20 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.3</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!---->
                <div class="row ticket-item">
                    <div class="ticket-item-img"><img src="//////static.vexere.com/production/images/1566794227529.jpeg"
                                                      alt="Phúc Lộc Thọ Limousine"></div>
                    <div class="ticket-item-info">
                        <div class="ticket-header"><h2>Phúc Lộc Thọ Limousine</h2>
                            <div class="ticket-header-seat"><p>Limousine 12 chỗ</p>
                                <p class="seat-pos"><span>11</span> ghế trống</p></div>
                        </div>
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup" title="AEON MALL Long Biên">AEON MALL Long
                                            Biên</p></div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">19:00</p></div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff" title="Văn phòng Nam Định">Văn phòng Nam
                                            Định</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">20:30</p></div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">82</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">1 giờ 30 phút </p></div>
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
                        <div class="price"><!----><!---->105,000 ₫</div>
                        <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                                 class="fa fa-star active"></i><i
                                aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                    class="fa fa-star active"></i>
                            <!----><i aria-hidden="true" class="fa fa-star"></i><!----><p>( <span>4.2</span> )</p></div>
                        <!---->
                        <button type="button" class="btn-book">Đặt vé</button><!----><!----><!----><!----><!----><!---->
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----></div>
        </section>
        <dialog-message>
            <div tabindex="-1" role="dialog" aria-hidden="true" class="modal fade modal-custom" id="dialog-searchTrips">
                <div role="document" class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body txt-center"><!----><!----></div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-cancel">Đồng ý</button><!---->
                            <!----></div>
                    </div>
                </div>
            </div>
        </dialog-message>
        <section class="policy why-swio">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <div class="title"><h2>Tại sao bạn nên đặt vé tại SWIO</h2></div>
                    </div>
                </div>
                <div class="row why-swio-list">
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="why-swio-item"><img src="assets/images/why1.svg" alt="Dịch vụ tốt nhất">
                            <div class="content"><h5>Dịch vụ tốt nhất</h5>
                                <p class="des">Dịch vụ chất lượng Nhật Bản và luôn tôn trọng khách hàng.</p></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="why-swio-item"><img src="assets/images/why2.svg" alt="Giữ chỗ 100%">
                            <div class="content"><h5>Giữ chỗ 100%</h5>
                                <p class="des">Cam kết giữ chỗ 100% khi đặt vé tại swio.vn</p></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="why-swio-item"><img src="assets/images/why3.svg" alt="Thanh toán dễ dàng">
                            <div class="content"><h5>Thanh toán dễ dàng</h5>
                                <p class="des">ATM - Internet Banking - Momo - Visa - Master - QR Code</p></div>
                        </div>
                    </div>
                </div><!----></div>
        </section>
        <section class="call-to-action">
            <div class="container">
                <div class="call-to-action-detail">
                    <div class="info"><img src="assets/images/icon-bus.svg" title="" alt="">
                        <div class="call-to-action-title"><h4>Tìm vé ngay hôm nay!</h4>
                            <p>Mua vé ngay hôm nay để nhận được nhiều ưu đãi hấp dẫn từ SWIO!</p></div>
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
                            <p>Giải đáp thắc mắc của khách hàng về quá trình đặt vé và vô vàn các tiện ích khác mà SWIO
                                mang lại</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="policy-item"><img src="assets/images/support-use.svg" alt="Icon support-use">
                            <h2>Điều khoản sử dụng</h2>
                            <p>Tìm hiểu các quy định và chính sách của SWIO</p><a routerlinkactive="active"
                                                                                  class="link-more w-200 btn-ani1"
                                                                                  href="/blog/dieu-khoan-su-dung">Xem
                                chi tiết</a></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="policy-item"><img src="assets/images/support-guide.svg" alt="Icon support-guide">
                            <h2>Hướng dẫn sử dụng</h2>
                            <p>Hướng dẫn khách hàng cách đặt vé, thanh toán, huỷ vé </p><a routerlinkactive="active"
                                                                                           class="link-more w-200 btn-ani1"
                                                                                           href="/blog/huong-dan-dat-hang-va-thanh-toan">Xem
                                chi tiết</a></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="policy-item"><img src="assets/images/support-faq.svg" alt="Icon support-faq">
                            <h2>Câu hỏi thường gặp</h2>
                            <p>Giải đáp các thắc mắc thường gặp của khách hàng</p><a routerlinkactive="active"
                                                                                     class="link-more w-200 btn-ani1"
                                                                                     href="/blog/cau-hoi-thuong-gap">Xem
                                chi tiết</a></div>
                    </div>
                </div>
            </div>
        </section>
        <layout-footer><!---->
            <div class="sort-mobile">
                <ul>
                    <li>
                        <button class="sort-mobile-link"><i aria-hidden="true" class="fa fa-sort-amount-desc"></i><span>Sắp xếp</span>
                        </button>
                    </li>
                    <li>
                        <button class="sort-mobile-advanced"><i aria-hidden="true" class="fa fa-object-group"></i><span>Lọc kết quả</span>
                        </button>
                    </li>
                </ul>
            </div><!---->
            <footer class="footer">
                <div class="footer-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <div class="footer-item"><a routerlink="/" routerlinkactive="active" href="/"
                                                            class="active"><img src="assets/images/logo.svg" alt="SWIO"
                                                                                class="logo"></a>
                                    <p>GOLDMUTRAVEL -Trang bán vé xe khách trực tuyến hàng đầu tại Việt Nam.</p>
                                    <div class="social"><h5>Kết nối với chúng tôi</h5>
                                        <ul>
                                            <li><a href="https://www.facebook.com/SWIOvn-108203591455951/"
                                                   target="_blank"><img src="assets/images/icon-facebook.svg"
                                                                        alt="Facebook"></a></li>
                                            <li><a href="https://www.instagram.com/swio_traveltickets/" target="_blank"><img
                                                        src="assets/images/icon-instagram.svg" alt="Instagram"></a></li>
                                            <li><a href="https://www.linkedin.com/in/swio-travel-tickets-964813212/"
                                                   target="_blank"><img src="assets/images/icon-linkedin.svg"
                                                                        alt="Linkedin"></a></li>
                                        </ul>
                                    </div>
                                    <a href="http://online.gov.vn/Home/WebDetails/82749" target="_blank"
                                       class="d-block mb-4"><img src="assets/images/logo-bct.png"
                                                                 class="img-fluid logo-policy" alt="Bộ Công Thương"></a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="footer-item support"><h4>Hỗ trợ khách hàng</h4>
                                            <ul>
                                                <li><a routerlinkactive="active" href="/blog/cau-hoi-thuong-gap">Câu hỏi
                                                        thường gặp</a></li>
                                                <li><a routerlinkactive="active"
                                                       href="/blog/huong-dan-dat-hang-va-thanh-toan">Hướng dẫn đặt hàng
                                                        và thanh toán</a></li>
                                                <li><a routerlinkactive="active" href="/blog/huong-dan-huy-ve">Hướng dẫn
                                                        huỷ vé</a></li><!---->
                                                <li><a routerlinkactive="active" href="/lien-he">Gửi yêu cầu hỗ trợ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="footer-item certificates"><h4>Đối tác - Đại lý</h4>
                                            <ul>
                                                <li><img src="assets/images/log-vxr.svg" alt="VeXeRe"
                                                         class="img-fluid"></li>
                                                <li class="mt-2"><img src="assets/images/logo-anvui.svg" alt="AnVui"
                                                                      class="img-fluid"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="footer-item certificates brand"><h4>Phương thức thanh toán</h4>
                                            <ul class="justify-content-center justify-content-sm-start">
                                                <li><img src="assets/images/logo-visa.png" alt="Visa Card"
                                                         class="img-fluid"></li>
                                                <li><img src="assets/images/logo-master-card.png" alt="Master Card"
                                                         class="img-fluid"></li>
                                                <li><img src="assets/images/logo-jcb.png" alt="JCB" class="img-fluid">
                                                </li>
                                                <li><img src="assets/images/logo-internetbanking.png"
                                                         alt="Internet Banking" class="img-fluid"></li>
                                                <li><img src="assets/images/logo-american-express.png"
                                                         alt="American Express" class="img-fluid"></li>
                                                <li><img src="assets/images/logo-vnpay.png" alt="VNPAY"
                                                         class="img-fluid"></li>
                                                <li><img src="assets/images/logo-payoo.png" alt="Payoo"
                                                         class="img-fluid"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="footer-item support"><h4>Về SWIO</h4>
                                    <ul>
                                        <li><a routerlinkactive="active" href="/blog/gioi-thieu">Giới thiệu SWIO</a>
                                        </li>
                                        <li><a routerlinkactive="active" href="/blog/dieu-khoan-su-dung">Điều khoản sử
                                                dụng</a></li>
                                        <li><a routerlinkactive="active" href="/blog/quy-che-hoi-vien">Quy chế hội
                                                viên</a></li>
                                        <li><a routerlinkactive="active" href="/blog/quy-trinh-giai-quyet-khieu-nai">Quy
                                                trình giải quyết khiếu nại</a></li>
                                        <li><a routerlinkactive="active"
                                               href="/blog/chinh-sach-bao-mat-thong-tin-ca-nhan">Chính sách bảo mật
                                                thông tin cá nhân</a></li>
                                        <li><a routerlinkactive="active" href="/blog/chinh-sach-bao-mat-thanh-toan">Chính
                                                sách bảo mật thanh toán</a></li>
                                        <li><a routerlinkactive="active" href="/blog/chinh-sach-huy-ve">Chính sách huỷ
                                                vé</a></li>
                                        <li><a routerlinkactive="active" href="/blog/chinh-sach-hoan-tien">Chính sách
                                                hoàn tiền</a></li><!----></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container"><p>© 2021 Mọi quyền được bảo lưu bởi <a href="javascript:;">SPUREN</a></p>
                        <p>Địa chỉ: Toà nhà K&amp;M, 33 Ung Văn Khiêm, phường 25, quận Bình Thạnh</p>
                        <p>Giấy chứng nhận Đăng ký Kinh doanh số 0316727056 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí
                            Minh cấp ngày 02/03/2021</p>
                        <p>Hỗ trợ: <a href="tel:1900 636 750">1900 636 750</a></p></div>
                </div>
            </footer>
            <button type="button" class="scroll-up-btn"><i aria-hidden="true" class="fa fa-level-up"></i></button>
        </layout-footer>
    </page-plan-index><!---->
    <div id="embedCodeBody"></div>
</app-swio>
<!-- END -->

@include('frontend.template.footer')

