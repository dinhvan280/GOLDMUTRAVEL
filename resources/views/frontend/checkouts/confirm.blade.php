@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Xác nhận đặt vé</div>
            </div>
        </div>
    </div>
    <section class="ticket">
        <div class="container">
            <div class="seat-contain seat-user">
                <div class="ticket-book-content-seat">
                    <form action="{{route('store.checkout')}}" method="POST" class="ng-untouched ng-pristine ng-valid"><h3>Thông tin khách
                            hàng</h3>
                        @csrf
                        @php $user = SESSION('user') @endphp
                        <div class="seat-map">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="item"><label for="">Họ và tên <span>*</span></label><input
                                            formcontrolname="name" name="name" id="full_name" type="text" value="{{@$user->name}}"
                                            class="txt-input ng-untouched ng-pristine ng-valid"
                                            placeholder="Nhập họ và tên" required></div>
                                    <div class="item"><label for="">Số điện thoại <span>*</span></label><input
                                            formcontrolname="phone" name="phone" id="phone_number" type="phone" value="{{@$user->phone}}"
                                            class="txt-input ng-untouched ng-pristine ng-valid"
                                            placeholder="Nhập số điện thoại" required></div>
                                    <div class="item"><label for="">Email <span>*</span></label><input
                                            formcontrolname="email" name="email" id="email_address" type="email" value="{{@$user->email}}"
                                            class="txt-input ng-untouched ng-pristine ng-valid"
                                            placeholder="Nhập email" required></div>
                                    <div class="item"><label for="">Ghi chú
                                            <small><span>(tối đa 150 ký tự)</span></small></label><textarea
                                            formcontrolname="note" name="notes" id="notes" class="txt-input ng-untouched ng-pristine ng-valid"
                                            placeholder="Nhập nội dung"></textarea></div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="item h-100">
                                        <div role="alert" class="alert alert-warning h-100 m-0 alert-link">
                                            <div class="alert-heading alert-link align-items-center d-flex h4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                     fill="#ff7d00" viewBox="0 0 16 16" role="img" aria-label="Warning:"
                                                     class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2">
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
                                                </svg>
                                                <p class="ml-2">Lưu ý</p></div>
                                            <p class="font-weight-bold">Việc đặt vé <span class="h5 font-weight-bold">KHÔNG</span>
                                                được xem là hoàn tất nếu Nhân Viên chưa xác nhận đặt vé thành công.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item"><p class="txt-policy">Bằng cách nhấp vào nút ĐẶT VÉ, bạn xác nhận rằng bạn
                                    đã đọc và đồng ý với các <a href="javascript:;" data-toggle="modal"
                                                                data-target="#policyModal">Chính sách bảo mật thông tin
                                        cá nhân</a> và <a href="javascript:;" data-toggle="modal"
                                                          data-target="#policyModal">Điều khoản sử dụng</a> của
                                    GOLDMUTRAVEL.
                                </p></div>
                        </div>
                        <button type="submit" class="btn-payment" id="btn_confirm">Đặt vé</button>
                        <button type="button" class="btn-payment btn-buy-more" onclick="history.back()">Quay lại</button>
                    </form>
                </div>
            </div>
            <div id="policyModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade modal-custom">
                <div role="document" class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <section-loading>
                                <div class="loading">
                                    <div>
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                    </div>
                                    <span>đang tải</span></div>
                            </section-loading>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-confirm">Tôi đã hiểu</button>
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
                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body txt-center"></div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-cancel">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </dialog-message>
        </div>
    </section>
@stop
