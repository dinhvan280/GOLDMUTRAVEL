<div class="row card-booking">
    @php $tongTien = 0; $user = SESSION('user')@endphp
    @if(count($veDat)>0)
        @foreach($veDat as $id => $cart)
            <div class="ticket-item">
                <div class="ticket-item-info">
                    <div class="ticket-header">
                        <div class="ticket-header-card-title">
                            <div><h2>{{@$cart['ten_xe']}}</h2><span>[ {{@$cart['ten_chuyen']}} ]</span>
                            </div>
                            <div class="edit-ticket">
                                {{--                                    <button class="btn-edit"><i aria-hidden="true" class="fa fa-pencil-square-o"></i>--}}
                                {{--                                    </button>--}}
                                <button class="btn-remove-ticket" data-id="{{@$cart['ma_cn']}}"><i
                                        aria-hidden="true"
                                        class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                        <div class="ticket-header-seat"><p>{{@$cart['ten_lx']}}</p></div>
                    </div>
                    <div class="ticket-content">
                        <div class="ticket-content-station">
                            <div class="ticket-content-booking-date">
                                <div><p class="ticket-content-title">Khởi hành</p>
                                    <p class="ticket-content-info">{{date('d-m-Y', strtotime(@$cart['ngay']))}}</p>
                                </div>
                                <div><p class="ticket-content-title">Ghế chọn</p>
                                    <p class="ticket-content-info">
                                        {{@$cart['ky_hieu']}}
                                    </p>
                                </div>
                            </div>
                            <div class="ticket-content-from">
                                <div><p class="ticket-content-title">Nơi đi</p>
                                    <p class="ticket-content-info pickup"
                                       title="{{@$cart['diem_don']}}">{{@$cart['diem_don']}}</p></div>
                                <div><p class="ticket-content-title">Thời gian đi</p>
                                    <p class="ticket-content-info">{{@$cart['gio_don']}}</p></div>
                            </div>
                            <div class="ticket-content-to">
                                <div><p class="ticket-content-title">Nơi đến</p>
                                    <p class="ticket-content-info dropoff"
                                       title="{{@$cart['diem_tra']}}">{{@$cart['diem_tra']}}</p></div>
                                <div><p class="ticket-content-title">Thời gian đến</p>
                                    <p class="ticket-content-info">{{@$cart['gio_tra']}}</p></div>
                            </div>
                        </div>
                        <div class="ticket-content-suggest">
                            <div class="ticket-content-way">
                                <div><p class="ticket-content-title">Người đi</p>
                                    <p class="ticket-content-info">{{@$user->name}}</p>
                                </div>
                                <div><p class="ticket-content-title">Số điện thoại</p>
                                    <p class="ticket-content-info">{{@$user->phone}}</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ticket-item-price">
                    <div class="price">
                        <p>{{ number_format(floatval(@$cart['gia_ve']), 0, ',', '.') . "₫" }}</p>
                    </div>
                    <div class="vote"><i aria-hidden="true" class="fa fa-star active"></i><i
                            aria-hidden="true"
                            class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i><i aria-hidden="true"
                                                                                class="fa fa-star active"></i><i
                            aria-hidden="true" class="fa fa-star active"></i>
                        <p>(<span> 4.6 </span>)
                        </p></div>
                </div>
            </div>
            <dialog-message>
                <div tabindex="-1" role="dialog" class="modal fade modal-custom hide dialog-cart"
                     id="dialog-cart-{{@$cart['ma_cn']}}"
                     style="padding-right: 17px; display: none;">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content remove-cart">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body txt-center"><p class="py-2">Quý khách muốn huỷ vé
                                    này?</p></div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-cancel">Đóng
                                </button>
                                <button type="button" data-dismiss="modal" class="btn btn-destroy-ticket"
                                        data-id="{{@$cart['id']}}">Đồng ý
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </dialog-message>
            @php $tongTien += @$cart['gia_ve']; $ma_cn = @$cart['ma_cn']@endphp
        @endforeach
        <div class="info-total">
            <div class="payment"><p>Thanh toán</p>
                <p>{{ number_format(floatval($tongTien), 0, ',', '.') . "₫" }}</p>
            </div>
        </div>
        <button type="button" class="btn-payment">
            <a href="{{route('home')}}" class="confirm">Đặt vé khác</a>
        </button>
    @else
        <h4 class="message_ticket" style="text-align: center; ">Vé của bạn đang trong trạng thái chờ duyệt, bạn sẽ nhận được email khi nhân viên xác nhận đặt vé thành công!</h4>
    @endif

</div>
