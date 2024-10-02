@extends('frontend.template.layout')

@section('content')

    <section class="header custom-header">
        <div class="search-feature">
            <div class="container">
                <div class="trip-search-filter">
                    <div class="search-form">
                        <form novalidate="" action="{{route('trips.find')}}" enctype="multipart/form-data" method="get"
                              class="row ng-untouched ng-pristine ng-valid">
{{--                            <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                            <div class="col-12 col-lg-8 mt-4">
                                <div class="row">
                                    <div class="col-12 col-lg-6 search-form-item"><label>Nơi đi</label>
                                        <div class="search-drop">
                                            <i aria-hidden="true" class="fa fa-map-marker"></i>
                                            <input type="text" id="pickupPoint" value="" autocomplete="off"
                                                   spellcheck="false" tabindex="1" class="txt-input diemDi"
                                                   placeholder="Chọn nơi đi" name="diem_di">
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
                                                   spellcheck="false" tabindex="2" class="txt-input diemDen"
                                                   placeholder="Chọn nơi đến" name="diem_den">
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
                                                    <input type="text" id="datepicker" name="day"
                                                           class="datetime txt-input w-100 ng-untouched ng-pristine ng-valid time_go"
                                                           placeholder="Chọn ngày đi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 search-form-item">
                                        <label style="height: 24px;"></label>
                                        <button type="submit" id="btn-search" class="btn-search btn-ani2">Tìm kiếm
                                        </button>
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
                                            <div class="slick-slide slick-cloned" data-slick-index="-1"
                                                 aria-hidden="true" tabindex="-1" style="width: 344px;"><a
                                                    href="#"
                                                    target="_blank" class="image" tabindex="-1"><img
                                                        src="https://blog.KIMLONGTRAVEL.vn/wp-content/uploads/2021/09/deo-khau-pha-mu-cang-chai-min-525x375.jpg"
                                                        class="img-fluid">
                                                    <p class="title">Các địa điểm nên đến ở Mù Cang Chải</p>
                                                </a></div>

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
                        </form>
                        <div class="search-seat-type">
                            <div data-dismiss="modal" class="close-m">×</div>
                            <h3>Loại ghế</h3>
                            <div class="checkbox"><input type="checkbox" name="check" value="check"
                                                         id="seatTypes0"><label
                                    for="seatTypes0">VIP Limousine</label></div>
                            <div class="checkbox"><input type="checkbox" name="check" value="check"
                                                         id="seatTypes1"><label
                                    for="seatTypes1">Ghế ngồi</label></div>
                        </div>
                    </div>
                    <div class="search-list-btn">
                        <button type="button" class="btn btnMobileResetFilter">Làm mới</button>
                        <button type="button" class="btn btn-review btnMobileResetFilter"> Xem 31 kết
                            quả
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="result">
        <section class="search-result">
            <div class="container">
                <div class="row search-sort">
                    <div class="search-sort-block"><p><span>{{count($trips)}} chuyến xe</span></p>
                        <p>@if(!empty($tuyen))<span>{{$tuyen->ten_chuyen}} @if(empty($time))
                                    [{{ now()->format('d-m-Y') }}] @else [{{$time}}] @endif</span>@endif</p></div>
                    <div class="search-sort-text">
                        <ul class="sort-text">
                            <li><a href="#" data-id="{{$tuyen->id}}" data-time="{{$time}}" data-type="asc"
                                   class="filter_trip_time active" value="asc">Khởi hành sớm nhất</a></li>
                            <li><a href="#" data-id="{{$tuyen->id}}" data-time="{{$time}}" data-type="desc"
                                   class="filter_trip_time" value="desc">Khởi hành muộn nhất</a></li>
                            <li><a href="#" data-id="{{$tuyen->id}}" data-time="{{$time}}" data-type="asc"
                                   class="filter_trip_price" value="asc">Giá thấp nhất</a></li>
                            <li><a href="#" data-id="{{$tuyen->id}}" data-time="{{$time}}" data-type="desc"
                                   class="filter_trip_price" value="desc">Giá cao nhất</a></li>
                        </ul>
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
                                <p class="show-result">{{count($trips)}} chuyến xe</p></div>
                        </div>
                        <div class="mobile-result-content-item mobile-search">
                            @if(!empty($tuyen))
                                <div><p>{{$tuyen->ten_chuyen}}</p> @if(empty($time)) [{{ now()->format('d-m-Y') }}]@endif</p>
                                </div>
                                <button class="btn-mobile-search"><i aria-hidden="true" class="fa fa-angle-down"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ticket">
            <div class="container">
    <div class="row ticket-suggest-title"><h3>Kết quả tìm kiếm</h3></div>
    @if(!empty($trips))
        @foreach($trips as $items => $item)
            <div class="row ticket-item">
                <div class="ticket-item-img">
                    <img src="{{asset($image->anh)}}"
                         alt="Thế Anh">
                </div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>{{$item->ten_xe}}<span style="text-transform: none"> - Chuyến {{$item->chieu === 'di' ? 'đi' : 'về'}}</span>
                        </h2>
                        <div class="ticket-header-seat"><p>{{$item->ten_lx}}</p>
                            <p class="seat-pos">
                                <span>{{@$item->ve_chuyen_cnt}}</span> ghế trống
                            </p>
                        </div>
                    </div>
                    @if($item->chieu == 'di')
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup"
                                           title="{{$item->diem_dau}}">{{$item->diem_dau}}</p>
                                    </div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">{{date('G:i', strtotime($item->gio))}}</p>
                                    </div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff"
                                           title="{{$item->diem_cuoi}}">{{$item->diem_cuoi}}</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">{{ \Carbon\Carbon::parse(date('G:i', strtotime($item->gio)))->addHours(2)->addMinutes(50)->format('G:i') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">250</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">2 giờ 50 phút </p></div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="ticket-content">
                            <div class="ticket-content-station">
                                <div class="ticket-content-from">
                                    <div><p class="ticket-content-title">Nơi đi</p>
                                        <p class="ticket-content-info pickup"
                                           title="{{$item->diem_cuoi}}">{{$item->diem_cuoi}}</p>
                                    </div>
                                    <div><p class="ticket-content-title">Thời gian đi</p>
                                        <p class="ticket-content-info pickup-time">{{date('G:i', strtotime($item->gio))}}</p>
                                    </div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff"
                                           title="{{$item->diem_dau}}">{{$item->diem_dau}}</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">{{ \Carbon\Carbon::parse(date('G:i', strtotime($item->gio)))->addHours(2)->addMinutes(50)->format('G:i') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-content-suggest">
                                <div class="ticket-content-way">
                                    <div><p class="ticket-content-title">Khoảng cách (km)</p>
                                        <p class="ticket-content-info">250</p></div>
                                    <div><p class="ticket-content-title">Tổng thời gian</p>
                                        <p class="ticket-content-info">2 giờ 50 phút </p></div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="ticket-footer">
                        <div class="ticket-footer-img"></div>
                        <div class="ticket-footer-info" data-id="{{$items}}"
                             data-product_id="{{@$item->ma_xe}}">Thông tin chi tiết
                            <i aria-hidden="true" class="fa fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <span style="font-weight: bold;">Giá vé:</span>
                    <div class="price">{{ number_format(floatval($item->gia_ve), 0, ',', '.') . "đ" }}</div>
                    <button type="button" class="btn-book" data-trip-day="{{@$item->ma_cn}}"
                            data-id="{{$items}}">Đặt vé
                    </button>
                </div>
            </div>
            <div id="detail_{{$items}}">
                <div class="row ticket-services-detail  animation" value="" id="ticket_{{$items}}">
                    <div data-dismiss="modal" class="close-m">×</div>
                    <div class="col-12 col-lg-6">
                        <div class="slideshow slick-initialized slick-slider">
                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                    style="">
                                Previous
                            </button>
                            <div class="slick-list draggable">
                                <div class="slick-track" id="product_images"
                                     style="opacity: 1; width: 4080px;">
                                    @include('frontend.ticket.ticket_detail')
                                </div>
                            </div>
                            <button class="slick-next slick-arrow" aria-label="Next" type="button"
                                    style="">
                                Next
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6"><h2 class="service-title">Tiện ích &amp; Chính sách nhà
                            xe</h2>
                        <div class="ticket-service-info scrollbar">
                            <div class="ticket-service-info-item"><h4>An toàn mùa Covid-19</h4>
                                <p>Là chương trình bảo vệ an toàn cho hành khách sử dụng dịch vụ của
                                    KIMLONGTRAVEL
                                    trong mùa dịch Covid. KIMLONGTRAVEL đồng hành cùng các nhà xe đối tác
                                    triển khai biện
                                    pháp bảo vệ an toàn cho hành khách, như sau:<br>(1) Kiểm tra thân nhiệt
                                    hành khách trước khi lên xe;<br>(2) Trang bị nước rửa tay;<br>(3) Có đảm
                                    bảo khuyến cáo tất cả hành khách đeo khẩu trang khi lên xe;<br>(4) Có
                                    thực hiện khử trùng xe;<br>(5) Tài xế và nhân viên đã được tiêm vắc xin
                                </p></div>
                            <div class="ticket-service-info-item"><h4>Xem vị trí xe trực tuyến</h4>
                                <p>Cho phép hành khách nhìn thấy được lộ trình và thời gian di chuyển của
                                    chiếc xe khách mình đã đặt vé.</p></div>
                            <div class="ticket-service-info-item"><h4>Ghế massage</h4>
                                <p>Ghế massage giúp cho hành khách ngồi trên xe thoải mái trong thời gian
                                    dài </p></div>
                            <div class="ticket-service-info-item"><h4>Khử trùng xe</h4>
                                <p>Nhà xe có thực hiện phun khử trùng Nano Bạc lên xe nhằm bảo vệ an toàn
                                    cho hành khách mùa Covid</p></div>
                            <div class="ticket-service-info-item"><h4>Nước rửa tay</h4>
                                <p>Nhà xe có trang bị nước rửa tay diệt khuẩn trước khi lên xe và trong
                                    xe</p></div>
                            <div class="ticket-service-info-item"><h4>Đo thân nhiệt</h4>
                                <p>Hành khách sẽ được đo thân nhiệt trước khi lên xe để xác định không nghi
                                    nhiễm/ lan truyền vi rút Covid cho hành khách khác.</p></div>
                            <div class="ticket-service-info-item"><h4>Khuyến cáo đeo khẩu trang</h4>
                                <p>Có đảm bảo khuyến cáo tất cả hành khách đeo khẩu trang khi lên xe</p>
                            </div>
                            <div class="ticket-service-info-item"><h4>Wifi</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Nước uống</h4>
                                <p>Nhà xe có phục vụ nước cho hành khách </p></div>
                            <div class="ticket-service-info-item"><h4>Điều hòa</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Khăn lạnh</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Yêu cầu khi lên xe</h4>
                                <ul class="company-policies">
                                    <li>Có mặt tại điểm đón trước 10 phút để làm thử tục lên xe
                                    </li>
                                    <li>Xuất trình SMS/Email đặt vé trước khi lên xe</li>
                                    <li>Không mang đồ ăn, thức ăn có mùi lên xe</li>
                                    <li>Không hút thuốc, uống rượu, sử dụng chất kích thích trên xe</li>
                                    <li>Không mang các vật dễ cháy nổ lên xe</li>
                                    <li>Không vứt rác trên xe</li>
                                    <li>Không làm ồn, gây mất trật tự trên xe</li>
                                    <li>Không mang giày, dép trên xe</li>
                                </ul>
                            </div>
                            <div class="ticket-service-info-item">
                                <h4>Hành lý xách tay</h4>
                                <ul class="company-policies">
                                    <li>Tổng trọng lượng hành lý không vượt quá 10 kg</li>
                                    <li>Không vận chuyển hàng hóa cồng kềnh</li>
                                    <li>Không hoàn tiền trong trường hợp hủy vé do vi phạm các quy định về
                                        hành lý
                                    </li>
                                </ul>
                            </div>
                            <div class="ticket-service-info-item">
                                <h4>Trẻ em và phụ nữ có thai</h4>
                                <ul class="company-policies">
                                    <li>Trẻ em dưới 4 tuổi hoặc dưới 100 cm được miễn phí vé nếu ngồi cùng
                                        ghế/giường với bố mẹ
                                    </li>
                                    <li>Trẻ em từ 4 tuổi hoặc cao từ 100 cm trở lên mua vé như người lớn
                                    </li>
                                    <li>Phụ nữ có thai cần đảm bảo sức khỏe trong suốt quá trình di chuyển
                                    </li>
                                    <li>Nhà xe có quyền từ chối phục vụ nếu hành khách không tuân thủ quy
                                        định về trẻ em và phụ nữ có thai
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ticket-service-policy">
                            <h2>Chính sách - Phí hủy</h2>
                            <div class="ticket-service-info-item">
                                <ul class="company-policies">
                                    <li>Vé sẽ được coi là hủy hợp lệ trước 21:00h tối ngày hôm trước và
                                        trước 1 tiếng trước giờ xe chạy
                                    </li>
                                    <li>Với những vé đã đặt cọc trước vào dịp lễ, quý khách sẽ không được
                                        hoàn lại tiền dã đặt cọc
                                    </li>
                                </ul>
                            </div>
                            <p class="service-note"><span>Ghi chú:</span> Phí huỷ sẽ được tính trên giá gốc,
                                không giảm trừ khuyến mãi hoặc giảm giá; đồng thời không vượt quá số tiền
                                quý khách đã thanh toán.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="booking_{{$items}}">
                    <div class="ticket-book animation" id="ticket_book_{{$items}}">
                        <div class="row ticket-book-title">
                            <ul>
                                <li class="active">Chọn chỗ</li>
                                <li class="">Điểm đón trả</li>
                            </ul>
                        </div>
                        <div class="row ticket-book-content">
                            <div class="col-12 col-lg-2">
                                <div class="ticket-book-content-note"><h3>Thông tin</h3>
                                    <div><p class="info-bus">{{$item->ten_lx}}</p>
                                        <p class="info-seat"><span>{{@$item->ve_chuyen_cnt}}</span> chỗ
                                            trống
                                        </p>
                                        <ul>
                                            <li>
                                                <svg width="29px" height="45px" viewBox="0 0 29 45"
                                                     version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="high-frame" stroke="none" stroke-width="1"
                                                       fill="#ffffff" fill-rule="evenodd">
                                                        <g id="Group-76" stroke="#000000">
                                                            <path class="ticket_choosed"
                                                                  d="M24,0.5 C25.2426407,0.5 26.3676407,1.00367966 27.1819805,1.81801948 C27.9963203,2.63235931 28.5,3.75735931 28.5,5 L28.5,5 L28.5,38 C28.5,39.7949254 27.7724627,41.4199254 26.5961941,42.5961941 C25.4199254,43.7724627 23.7949254,44.5 22,44.5 L22,44.5 L7,44.5 C5.20507456,44.5 3.58007456,43.7724627 2.40380592,42.5961941 C1.22753728,41.4199254 0.5,39.7949254 0.5,38 L0.5,38 L0.5,5 C0.5,3.75735931 1.00367966,2.63235931 1.81801948,1.81801948 C2.63235931,1.00367966 3.75735931,0.5 5,0.5 L5,0.5 Z"
                                                                  id="Rectangle" fill="#FFFFFF"></path>
                                                            <rect id="Rectangle" x="4.5" y="34.5" width="19"
                                                                  height="7" rx="3.5"></rect>
                                                            <path
                                                                d="M23,0.5 L23.5,26 C23.5,27.7949254 22.7724627,29.4199254 21.5961941,30.5961941 C20.4199254,31.7724627 18.7949254,32.5 17,32.5 L17,32.5 L11,32.5 C9.20507456,32.5 7.58007456,31.7724627 6.40380592,30.5961941 C5.22753728,29.4199254 4.5,27.7949254 4.5,26 L4.5,26 L4.5,1 L23,0.5 Z"
                                                                id="Rectangle"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span> Ghế trống</span></li>
                                            <li>
                                                <svg width="29px" height="45px" viewBox="0 0 29 45"
                                                     version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="high-frame" stroke="none" stroke-width="1"
                                                       fill="#dddddd" fill-rule="evenodd">
                                                        <g id="Group-76" stroke="#000000">
                                                            <path
                                                                d="M24,0.5 C25.2426407,0.5 26.3676407,1.00367966 27.1819805,1.81801948 C27.9963203,2.63235931 28.5,3.75735931 28.5,5 L28.5,5 L28.5,38 C28.5,39.7949254 27.7724627,41.4199254 26.5961941,42.5961941 C25.4199254,43.7724627 23.7949254,44.5 22,44.5 L22,44.5 L7,44.5 C5.20507456,44.5 3.58007456,43.7724627 2.40380592,42.5961941 C1.22753728,41.4199254 0.5,39.7949254 0.5,38 L0.5,38 L0.5,5 C0.5,3.75735931 1.00367966,2.63235931 1.81801948,1.81801948 C2.63235931,1.00367966 3.75735931,0.5 5,0.5 L5,0.5 Z"
                                                                id="Rectangle" fill="#dddddd"></path>
                                                            <rect id="Rectangle" x="4.5" y="34.5" width="19"
                                                                  height="7" rx="3.5"></rect>
                                                            <path
                                                                d="M23,0.5 L23.5,26 C23.5,27.7949254 22.7724627,29.4199254 21.5961941,30.5961941 C20.4199254,31.7724627 18.7949254,32.5 17,32.5 L17,32.5 L11,32.5 C9.20507456,32.5 7.58007456,31.7724627 6.40380592,30.5961941 C5.22753728,29.4199254 4.5,27.7949254 4.5,26 L4.5,26 L4.5,1 L23,0.5 Z"
                                                                id="Rectangle"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span> Đã đặt</span></li>
                                            <li>
                                                <svg width="29px" height="45px" viewBox="0 0 29 45"
                                                     version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="high-frame" stroke="none" stroke-width="1"
                                                       fill="#FFCD00" fill-rule="evenodd">
                                                        <g id="Group-76" stroke="#000000">
                                                            <path
                                                                d="M24,0.5 C25.2426407,0.5 26.3676407,1.00367966 27.1819805,1.81801948 C27.9963203,2.63235931 28.5,3.75735931 28.5,5 L28.5,5 L28.5,38 C28.5,39.7949254 27.7724627,41.4199254 26.5961941,42.5961941 C25.4199254,43.7724627 23.7949254,44.5 22,44.5 L22,44.5 L7,44.5 C5.20507456,44.5 3.58007456,43.7724627 2.40380592,42.5961941 C1.22753728,41.4199254 0.5,39.7949254 0.5,38 L0.5,38 L0.5,5 C0.5,3.75735931 1.00367966,2.63235931 1.81801948,1.81801948 C2.63235931,1.00367966 3.75735931,0.5 5,0.5 L5,0.5 Z"
                                                                id="Rectangle" fill="#FFCD00"></path>
                                                            <rect id="Rectangle" x="4.5" y="34.5" width="19"
                                                                  height="7" rx="3.5"></rect>
                                                            <path
                                                                d="M23,0.5 L23.5,26 C23.5,27.7949254 22.7724627,29.4199254 21.5961941,30.5961941 C20.4199254,31.7724627 18.7949254,32.5 17,32.5 L17,32.5 L11,32.5 C9.20507456,32.5 7.58007456,31.7724627 6.40380592,30.5961941 C5.22753728,29.4199254 4.5,27.7949254 4.5,26 L4.5,26 L4.5,1 L23,0.5 Z"
                                                                id="Rectangle"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span> Đang chọn</span></li>
                                            <li>
                                                <svg width="29px" height="45px" viewBox="0 0 29 45"
                                                     version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="high-frame" stroke="none" stroke-width="1"
                                                       fill="#ffffff" fill-rule="evenodd">
                                                        <g id="Group-76" stroke="#000000">
                                                            <path
                                                                d="M24,0.5 C25.2426407,0.5 26.3676407,1.00367966 27.1819805,1.81801948 C27.9963203,2.63235931 28.5,3.75735931 28.5,5 L28.5,5 L28.5,38 C28.5,39.7949254 27.7724627,41.4199254 26.5961941,42.5961941 C25.4199254,43.7724627 23.7949254,44.5 22,44.5 L22,44.5 L7,44.5 C5.20507456,44.5 3.58007456,43.7724627 2.40380592,42.5961941 C1.22753728,41.4199254 0.5,39.7949254 0.5,38 L0.5,38 L0.5,5 C0.5,3.75735931 1.00367966,2.63235931 1.81801948,1.81801948 C2.63235931,1.00367966 3.75735931,0.5 5,0.5 L5,0.5 Z"
                                                                id="Rectangle" fill="#FFFFFF"></path>
                                                            <rect id="Rectangle" x="4.5" y="34.5" width="19"
                                                                  height="7" rx="3.5"></rect>
                                                            <path
                                                                d="M23,0.5 L23.5,26 C23.5,27.7949254 22.7724627,29.4199254 21.5961941,30.5961941 C20.4199254,31.7724627 18.7949254,32.5 17,32.5 L17,32.5 L11,32.5 C9.20507456,32.5 7.58007456,31.7724627 6.40380592,30.5961941 C5.22753728,29.4199254 4.5,27.7949254 4.5,26 L4.5,26 L4.5,1 L23,0.5 Z"
                                                                id="Rectangle"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span> Ghế thường</span></li>
                                        </ul>
                                        <div class="mobile-seat-choose">
                                            <div id="ticket_choosed_list">Ghế chọn: <span class="mobile-seat" id="list_ghe">
                                                    @php
                                                        $key = getTicketName($item->ma_cn);@$ticket_choosed = \Illuminate\Support\Facades\Cache::get($key);
                                                    @endphp
                                                    @if(!empty($ticket_choosed))
                                                        @foreach($ticket_choosed as $items => $value)
                                                            {{(($loop->index == 0) ? '' : ',') . $value }}
                                                        @endforeach
                                                    @else
                                                        Chưa chọn ghế
                                                    @endif
                                                </span>
                                            </div>
                                            <div id="total_ticket">@if(!empty($ticket_choosed)) {{ number_format(floatval(count($ticket_choosed) * $item->gia_ve), 0, ',', '.') . "đ" }} @else
                                                        0 @endif</div>
                                        </div>
                                        <div class="detail-book-ticket">
                                            <button type="button" class="btn-view-ticket">Thông tin chi tiết
                                            </button>
                                        </div>
                                        <p class="call-center">Hotline hỗ trợ</p>
                                        <p class="support-center"><i aria-hidden="true"
                                                                     class="fa fa-phone"></i>
                                            19002053</p></div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7" id="choose_location">
                                <div id="trip-seat" class="mobile-seat-reverse reservePages">
                                    @include('frontend.ticket.ticket_choose')
                                </div>
                                <div class="seat-action">
                                    <button class="btn-cancel" data-id="{{$items}}" id="btn_close">Đóng
                                    </button>
                                    <button class="btn-next" id="choose_point" data-type="{{$item->chieu}}"
                                            data-id="{{$item->ma_tuyen}}">Tiếp tục
                                    </button>
                                </div>

                            </div>
                            <div class="col-12 col-lg-3 ticket-book-content-info-mobile">
                                <div class="ticket-book-content-info"><h3>Thông tin vé</h3>
                                    <button class="btn-close-mobile">
                                        <i aria-hidden="true" class="fa fa-times"></i></button>
                                    <div class="content-info">
                                        <div class="content-info-header">
                                            <h4 class="name_car"
                                                data-id="{{$item->ma_cn}}"
                                                data-type="{{$item->ten_lx}}"
                                                data-price="{{$item->gia_ve}}"
                                                data-car="{{$item->ten_xe}}">{{$item->ten_xe}}
                                                -
                                                Chiều {{$item->chieu === 'di' ? 'đi' : 'về'}}</h4>
                                            <div class="item"><p>Ngày đi</p>
                                                <p id="date_start">{{date('d-m-Y', strtotime($item->ngay))}}</p>
                                            </div>
                                        </div>
                                        <div class="content-info-content">
                                            <div class="content-info-line">
                                                <div class="item"><p>Nơi đi</p>
                                                    <p id="start_point"
                                                       class="start_point_{{$item->ma_cn}}">{{$item->diem_dau}}</p>
                                                </div>
                                                <div class="item"><p>Thời gian đi</p>
                                                    <p id="time_start"
                                                       class="time_start_{{$item->ma_cn}}">{{date('G:i', strtotime($item->gio))}}</p>
                                                </div>
                                                <div class="item"><p>Nơi đến</p>
                                                    <p id="end_point"
                                                       class="end_point_{{$item->ma_cn}}">{{$item->diem_cuoi}}</p>
                                                </div>
                                                <div class="item"><p>Thời gian đến</p>
                                                    <p id="time_end"
                                                       class="time_end_{{$item->ma_cn}}">{{ \Carbon\Carbon::parse($item->gio)->addHours(2)->addMinutes(50)->format('G:i') }}</p>
                                                </div>
                                            </div>
                                            <div class="content-info-line" id="ticket_choosed_list">
                                                <div class="item"><p>Ghế chọn</p>
                                                    <p id="list_ghe">
                                                        @php
                                                            $key = getTicketName($item->ma_cn);
                                                            @$ticket_choosed = \Illuminate\Support\Facades\Cache::get($key);
                                                        @endphp
                                                        @if(!empty($ticket_choosed))
                                                            @foreach($ticket_choosed as $items => $value)
                                                                {{(($loop->index == 0) ? '' : ',') . $value }}
                                                            @endforeach
                                                        @else
                                                            Chưa chọn ghế
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="item"><p>Số ghế</p>
                                                    <p id="count_ticket">@if(!empty($ticket_choosed)) {{count($ticket_choosed)}} @else
                                                            0 @endif</p></div>
                                            </div>
                                        </div>
                                        <div class="content-info-footer item"><p>Thanh toán</p>
                                            <p id="total_ticket">@if(!empty($ticket_choosed)) {{ number_format(floatval(count($ticket_choosed) * $item->gia_ve), 0, ',', '.') . "đ" }} @else
                                                    0 @endif</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <dialog-message>
                        <div tabindex="-1" role="dialog" aria-hidden="true" class="modal fade modal-custom"
                             id="dialog-emptyPoints">
                            <div role="document" class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                class="close"><span
                                                aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body txt-center"></div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-cancel">
                                            Đóng
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div tabindex="-1" role="dialog" class="modal fade modal-custom show"
                             id="dialog-maxSeatLimit-max" style="padding-right: 17px; display: none;">
                            <div role="document" class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" id="btn_close"
                                                aria-label="Close"
                                                class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body txt-center"><p class="py-2">Quý khách chỉ được
                                            chọn tối đa 6 ghế cho mỗi lần đặt.<br>Mọi thắc mắc vui lòng liên
                                            hệ Hotline: 1900 636 750</p></div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-cancel"
                                                id="btn_cancel">
                                            Đóng
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dialog-message>
                </div>
            </div>

        @endforeach
    @else
        <div class="no-result search">
            <img src="{{asset('assets/images/no-bug-covid.svg')}}"
                 style="width: 200px; height: 200px;"
                 alt="Không tìm thấy">
            <p>Không tìm thấy kết quả phù hợp hoặc tuyến đường này đang bị hạn chế vì chỉ thị
                chống dịch
                COVID-19.</p>
        </div>
    @endif
</div>

        </section>
        <dialog-message>
            <div tabindex="-1" role="dialog" aria-hidden="true" class="modal fade modal-custom" id="dialog-searchTrips">
                <div role="document" class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body txt-center"></div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-cancel">Đồng ý</button>
                        </div>
                    </div>
                </div>
            </div>
        </dialog-message>
    </section>


@stop
