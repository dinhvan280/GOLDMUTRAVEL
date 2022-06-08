<div class="container"><!---->
    <div class="row ticket-suggest-title"><h3>Kết quả tìm kiếm</h3></div>
    @if(count($trips) != 0)
        @foreach($trips as $items => $item)
            <div class="row ticket-item">
                <div class="ticket-item-img">
                    <img src="{{asset('images/cars/2.jpg')}}"
                         alt="Thế Anh">
                </div>
                <div class="ticket-item-info">
                    <div class="ticket-header"><h2>{{$item->ten_xe}}</h2>
                        <div class="ticket-header-seat"><p>{{$item->ten_lx}}</p>
                            <p class="seat-pos">

                                <span>15</span> ghế trống

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
                                        <p class="ticket-content-info dropoff-time">{{ \Carbon\Carbon::parse($item->gio)->addHours(2)->addMinutes(50)->format('G:i') }}</p>
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
                                        <p class="ticket-content-info pickup-time">{{ \Carbon\Carbon::parse($item->gio)->format('h:i')}}</p>
                                    </div>
                                </div>
                                <div class="ticket-content-to">
                                    <div><p class="ticket-content-title">Nơi đến</p>
                                        <p class="ticket-content-info dropoff"
                                           title="{{$item->diem_dau}}">{{$item->diem_dau}}</p></div>
                                    <div><p class="ticket-content-title">Thời gian đến</p>
                                        <p class="ticket-content-info dropoff-time">{{ \Carbon\Carbon::parse($item->gio)->addHours(2)->addMinutes(50)->format('h:i') }}</p>
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
                        <div class="ticket-footer-img"><!----></div>
                        <div class="ticket-footer-info" data-id="{{$items}}">Thông tin chi tiết
                            <i aria-hidden="true" class="fa fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <span style="font-weight: bold;">Giá vé:</span>
                    <div class="price">{{ number_format(floatval($item->gia_ve), 0, ',', '.') . "đ" }}</div>
                    <button type="button" class="btn-book" data-id="{{$items}}">Đặt vé</button>
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
                                <div class="slick-track" style="opacity: 1; width: 4080px;">
                                    <div class="item slick-slide" data-slick-index="0" aria-hidden="true"
                                         tabindex="-1"
                                         style="width: 510px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
                                        <img alt="Xe King Express Bus Mặt trước xe Giường nằm 40 chỗ - WC"
                                             src="//////static.vexere.com/production/images/1590571040223.jpeg">
                                    </div>
                                    <div class="item slick-slide" data-slick-index="1" aria-hidden="true"
                                         tabindex="-1"
                                         style="width: 510px; position: relative; left: -510px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
                                        <img alt="Xe King Express Bus Bên hông xe Giường nằm 40 chỗ - WC"
                                             src="////static.vexere.com/production/images/1590571326679.jpeg">
                                    </div>
                                </div>
                            </div><!---->
                            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">
                                Next
                            </button>
                        </div><!----><!----></div>
                    <div class="col-12 col-lg-6"><h2 class="service-title">Tiện ích &amp; Chính sách nhà
                            xe</h2>
                        <div class="ticket-service-info scrollbar">
                            <div class="ticket-service-info-item"><h4>Nhân viên sử dụng tiếng anh</h4>
                                <p>Nhân viên phòng vé, tài xế , phụ xe có thể giao tiếp bằng tiếng anh với
                                    hành
                                    khách.</p></div>
                            <div class="ticket-service-info-item"><h4>Ghế massage</h4>
                                <p>Ghế massage giúp cho hành khách ngồi trên xe thoải mái trong thời gian
                                    dài </p>
                            </div>
                            <div class="ticket-service-info-item"><h4>Tivi LED</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Toilet</h4>
                                <p>Nhà vệ sinh trên xe</p></div>
                            <div class="ticket-service-info-item"><h4>Sạc điện thoại</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Đèn đọc sách</h4>
                                <p>Hỗ trợ hành khách đọc sách dễ dàng và an toàn khi ngồi trên xe</p></div>
                            <div class="ticket-service-info-item"><h4>Dây đai an toàn</h4>
                                <p>Trên xe có trang bị dây đai an toàn cho hành khách khi ngồi trên xe</p>
                            </div>
                            <div class="ticket-service-info-item"><h4>Xe trung chuyển</h4>
                                <p>Nhà xe có xe trung chuyển đón khách tận nơi tại nhà/khách sạn</p></div>
                            <div class="ticket-service-info-item"><h4>Chăn đắp</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Khử trùng xe</h4>
                                <p>Nhà xe có thực hiện phun khử trùng Nano Bạc lên xe nhằm bảo vệ an toàn
                                    cho
                                    hành
                                    khách mùa Covid</p></div>
                            <div class="ticket-service-info-item"><h4>Nước rửa tay</h4>
                                <p>Nhà xe có trang bị nước rửa tay diệt khuẩn trước khi lên xe và trong
                                    xe</p>
                            </div>
                            <div class="ticket-service-info-item"><h4>Khuyến cáo đeo khẩu trang</h4>
                                <p>Có đảm bảo khuyến cáo tất cả hành khách đeo khẩu trang khi lên xe</p>
                            </div>
                            <div class="ticket-service-info-item"><h4>Wifi</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Tai nghe</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Nước uống</h4>
                                <p>Nhà xe có phục vụ nước cho hành khách </p></div>
                            <div class="ticket-service-info-item"><h4>Điều hòa</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Khăn lạnh</h4>
                                <p></p></div>
                            <div class="ticket-service-info-item"><h4>Gối nằm</h4>
                                <p>Trên xe có trang bị gối nằm</p></div>
                            <div class="ticket-service-info-item"><h4>Búa phá kính</h4>
                                <p>Dùng để phá kính ô tô thoát hiểm trong trường hợp khẩn cấp.</p></div>
                            <!---->
                            <div class="ticket-service-info-item"><h4>An toàn Covid-19</h4>
                                <ul class="company-policies">
                                    <li>Xuất trình Khai báo Y tế trước khi lên xe và tuân thủ quy tắc 5K của
                                        Bộ
                                        Y tế
                                        khi di chuyển
                                    </li>
                                    <li>Cung cấp đầy đủ họ tên, số điện thoại, địa chỉ cư trú khi đặt vé
                                    </li>
                                    <li>Yêu cầu đeo khẩu trang khi lên xe</li><!----></ul><!----></div>
                            <div class="ticket-service-info-item"><h4>Yêu cầu khi lên xe</h4>
                                <ul class="company-policies">
                                    <li>Có mặt tại văn phòng/quầy vé/bến xe trước 30 phút để làm thủ tục lên
                                        xe
                                    </li>
                                    <li>Xuất trình SMS/Email đặt vé trước khi lên xe</li>
                                    <li>Không mang đồ ăn, thức ăn có mùi lên xe</li>
                                    <li>Không hút thuốc, uống rượu, sử dụng chất kích thích trên xe</li>
                                    <li>Không mang các vật dễ cháy nổ lên xe</li>
                                    <li>Không vứt rác trên xe</li>
                                    <li>Không làm ồn, gây mất trật tự trên xe</li>
                                    <li>Không mang giày, dép trên xe</li><!----></ul><!----></div>
                            <div class="ticket-service-info-item"><h4>Hành lý xách tay</h4>
                                <ul class="company-policies">
                                    <li>Tổng trọng lượng hành lý không vượt quá 12 kg</li>
                                    <li>Không vận chuyển hàng hóa cồng kềnh</li>
                                    <li>Không hoàn tiền trong trường hợp hủy vé do vi phạm các quy định về
                                        hành
                                        lý
                                    </li><!----></ul><!----></div>
                            <div class="ticket-service-info-item"><h4>Trẻ em và phụ nữ có thai</h4>
                                <ul class="company-policies">
                                    <li>Trẻ em dưới 5 tuổi hoặc dưới 80 cm được miễn phí vé nếu ngồi cùng
                                        ghế/giường
                                        với bố mẹ
                                    </li>
                                    <li>Phụ nữ có thai cần đảm bảo sức khỏe trong suốt quá trình di chuyển
                                    </li>
                                    <li>Nhà xe có quyền từ chối phục vụ nếu hành khách không tuân thủ quy
                                        định
                                        về
                                        trẻ em và phụ nữ có thai
                                    </li><!----></ul><!----></div><!----><!----></div>
                        <div class="ticket-service-policy"><h2>Chính sách - Phí hủy</h2>
                            <div class="ticket-service-time">
                                <ul>
                                    <li class=""><!---->
                                        <div class="block-time"><p>22:01</p>
                                            <p>04/03</p></div><!----><!---->
                                        <div class="fee-title">Không mất phí</div><!----><!----></li><!---->
                                    <li class="active"><span class="present-time"> Hiện tại </span><!---->
                                        <!---->
                                        <div class="fee"><span>100%</span></div><!----><!---->
                                        <div class="fee-depart">Khởi hành</div><!----></li><!----><!---->
                                </ul>
                            </div>
                            <p class="service-note"><span>Ghi chú:</span> Phí huỷ sẽ được tính trên giá gốc,
                                không
                                giảm trừ khuyến mãi hoặc giảm giá; đồng thời không vượt quá số tiền quý
                                khách đã
                                thanh toán.
                            </p><!----></div>
                    </div><!----><!----><!----></div>
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
                                    <p class="info-seat"><span>{{$item->ve_chuyen_cnt}}</span> chỗ trống
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
                                        <div>Ghế chọn: <span class="mobile-seat">Chưa chọn ghế</span>
                                        </div>
                                        <div>0 ₫</div>
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
                                    <div class="content-info-header"><h4 id="name_car" data-id="{{$item->ma_cn}}" data-type="{{$item->ten_lx}}" data-price="{{$item->gia_ve}}" data-car="{{$item->ten_xe}}">{{$item->ten_xe}} -
                                            Chiều {{$item->chieu === 'di' ? 'đi' : 'về'}}</h4>
                                        <div class="item"><p>Ngày đi</p>
                                            <p id="date_start">{{date('d-m-Y', strtotime($item->ngay))}}</p></div>
                                    </div>
                                    <div class="content-info-content">
                                        <div class="content-info-line">
                                            <div class="item"><p>Nơi đi</p>
                                                <p id="start_point" class="start_point_{{$items}}">{{$item->diem_dau}}</p></div>
                                            <div class="item"><p>Thời gian đi</p>
                                                <p id="time_start" class="time_start_{{$items}}">{{date('G:i', strtotime($item->gio))}}</p></div>
                                            <div class="item"><p>Nơi đến</p>
                                                <p id="end_point" class="end_point_{{$items}}">{{$item->diem_cuoi}}</p></div>
                                            <div class="item"><p>Thời gian đến</p>
                                                <p id="time_end" class="time_end_{{$items}}">{{ \Carbon\Carbon::parse($item->gio)->addHours(2)->addMinutes(50)->format('G:i') }}</p>
                                            </div>
                                        </div>
                                        <div class="content-info-line" id="ticket_choosed_list">
                                            <div class="item"><p>Ghế chọn</p>
                                                {{--                                                                @php  @endphp--}}
                                                <p id="list_ghe"></p></div>
                                            <div class="item"><p>Số ghế</p>
                                                <p id="count_ticket">0</p></div>
                                        </div>
                                    </div>
                                    <div class="content-info-footer item"><p>Thanh toán</p>
                                        <p id="total_ticket">0 ₫</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @else
        <div class="no-result search">
            <img src="{{asset('assets/images/no-bug-covid.svg')}}" style="width: 200px; height: 200px;"
                 alt="Không tìm thấy">
            <p>Không tìm thấy kết quả phù hợp hoặc tuyến đường này đang bị hạn chế vì chỉ thị chống dịch
                COVID-19.</p></div>
    @endif

</div>
