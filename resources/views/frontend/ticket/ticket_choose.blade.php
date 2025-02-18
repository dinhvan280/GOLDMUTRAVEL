<div class="seat-contain">
    <div class="ticket-book-content-seat">
        <div class="seat-map steering-wheel">
            <div class="seat-row">
                <div class="container ticket_choose">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="seat-col disabled">
                            </div>
                        </div>
                        @php
                            $key = getTicketName(@$chuyen['ma_cn']);
                            $ticket_choosed = \Illuminate\Support\Facades\Cache::get($key);
                        @endphp
                        @if(!empty($tickets))
                            @foreach($tickets as $items => $item)
                                <div class="col-xs-4 col-sm-4 col-md-4 tickets_choose">
                                    <div class="seat-col">
                                        @if(@$item->trang_thai != 1 && @$item->trang_thai != 2 )
                                            <div class="ticket_choosed"
                                                 data-id="{{@$item->ma_cn}}" data-price="{{@$item->gia_ve}}"
                                                 data-status="{{@$item->trang_thai == null ? 0 : 1}}"
                                                 data-val="{{@$item->ky_hieu}}"
                                                 data-tooltip="{{@$item->ky_hieu}} - {{ number_format(floatval(@$item->gia_ve), 0, ',', '.')}} ₫">
                                                <svg width="29px" height="45px"
                                                     viewBox="0 0 29 45" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="high-frame" stroke="none"
                                                       stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <g stroke="#000000">
                                                            <path
                                                                class="ticket_status_{{@$item->ma_cn}} {{@$ticket_choosed[@$item->ky_hieu] ? 'active' : ''}}"
                                                                id="check_status"
                                                                d="M24,0.5 C25.2426407,0.5 26.3676407,1.00367966 27.1819805,1.81801948 C27.9963203,2.63235931 28.5,3.75735931 28.5,5 L28.5,5 L28.5,38 C28.5,39.7949254 27.7724627,41.4199254 26.5961941,42.5961941 C25.4199254,43.7724627 23.7949254,44.5 22,44.5 L22,44.5 L7,44.5 C5.20507456,44.5 3.58007456,43.7724627 2.40380592,42.5961941 C1.22753728,41.4199254 0.5,39.7949254 0.5,38 L0.5,38 L0.5,5 C0.5,3.75735931 1.00367966,2.63235931 1.81801948,1.81801948 C2.63235931,1.00367966 3.75735931,0.5 5,0.5 L5,0.5 Z"
                                                                fill="#FFFFFF"></path>
                                                            <rect x="4.5" y="34.5"
                                                                  width="19"
                                                                  height="7"
                                                                  rx="3.5"></rect>
                                                            <path
                                                                d="M23,0.5 L23.5,26 C23.5,27.7949254 22.7724627,29.4199254 21.5961941,30.5961941 C20.4199254,31.7724627 18.7949254,32.5 17,32.5 L17,32.5 L11,32.5 C9.20507456,32.5 7.58007456,31.7724627 6.40380592,30.5961941 C5.22753728,29.4199254 4.5,27.7949254 4.5,26 L4.5,26 L4.5,1 L23,0.5 Z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        @else
                                            <div data-tooltip="Không thể chọn" class="disabled">
                                                <svg width="29px" height="45px" viewBox="0 0 29 45" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="high-frame" stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <g stroke="#000000">
                                                            <path
                                                                d="M24,0.5 C25.2426407,0.5 26.3676407,1.00367966 27.1819805,1.81801948 C27.9963203,2.63235931 28.5,3.75735931 28.5,5 L28.5,5 L28.5,38 C28.5,39.7949254 27.7724627,41.4199254 26.5961941,42.5961941 C25.4199254,43.7724627 23.7949254,44.5 22,44.5 L22,44.5 L7,44.5 C5.20507456,44.5 3.58007456,43.7724627 2.40380592,42.5961941 C1.22753728,41.4199254 0.5,39.7949254 0.5,38 L0.5,38 L0.5,5 C0.5,3.75735931 1.00367966,2.63235931 1.81801948,1.81801948 C2.63235931,1.00367966 3.75735931,0.5 5,0.5 L5,0.5 Z"
                                                                fill="#DDDDDD"></path>
                                                            <rect x="4.5" y="34.5" width="19" height="7"
                                                                  rx="3.5"></rect>
                                                            <path
                                                                d="M23,0.5 L23.5,26 C23.5,27.7949254 22.7724627,29.4199254 21.5961941,30.5961941 C20.4199254,31.7724627 18.7949254,32.5 17,32.5 L17,32.5 L11,32.5 C9.20507456,32.5 7.58007456,31.7724627 6.40380592,30.5961941 C5.22753728,29.4199254 4.5,27.7949254 4.5,26 L4.5,26 L4.5,1 L23,0.5 Z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="action-book">
    <p>Nhấn vào
        <svg width="20px" height="25px" viewBox="0 0 29 45"
             version="1.1"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="high-frame" stroke="none" stroke-width="1"
               fill="none"
               fill-rule="evenodd">
                <g stroke="#000000">
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
        để chọn ghế
    </p>
</div>
<dialog-message>
    <div tabindex="-1" role="dialog" aria-hidden="true"
         class="modal fade modal-custom" id="dialog-maxSeatLimit">
        <div role="document" class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal"
                            aria-label="Close" class="close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body txt-center"></div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal"
                            class="btn btn-cancel">Đóng
                    </button>
                </div>
            </div>
        </div>
    </div>
</dialog-message>

