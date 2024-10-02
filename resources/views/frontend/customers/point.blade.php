@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Lịch sử tích điểm</div>
            </div>
        </div>
    </div>
    <div class="support-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <mypage-sidebar>
                        @include('frontend.template.left_sidebar')
                        <dialog-message>
                            <div tabindex="-1" role="dialog" aria-hidden="true" class="modal fade modal-custom"
                                 id="dialog-cart">
                                <div role="document" class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                                                <span aria-hidden="true">×</span></button><!----></div>
                                        <div class="modal-body txt-center"><!----><!----></div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-cancel">Đóng
                                            </button><!---->
                                            <button type="button" data-dismiss="modal" class="btn btn-confirm">Đồng ý
                                            </button><!----></div>
                                    </div>
                                </div>
                            </div>
                        </dialog-message>
                    </mypage-sidebar>
                </div>
                <div class="col-12 col-lg-9">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Lịch sử tích điểm</li>
                        </ol>
                    </nav>
                    <div class="coin">
                        <div class="coin-total coin-header">
                            <div><img src="{{asset('images/image/icon-coin.svg')}}" class="img-fluid">
                                <div><h3>Điểm tích luỹ đang có</h3><h5 class="mt-2">Điểm tích luỹ sau mỗi lần khởi
                                        hành</h5></div>
                            </div>
                            <p class="points">0₫</p></div>
                        <div class="coin-tab">
                            <div class="tabs tabs--responsive">
                                <ul role="tablist" class="tabs__header">
                                    <li role="presentation" rel="r-tab1" class="active"><a aria-controls="Overview"
                                                                                           role="tab" href="#r-tab1">Tất
                                            cả lịch sử</a></li>
                                    <li role="presentation" rel="r-tab2"><a aria-controls="Details" role="tab"
                                                                            href="#r-tab2">Đã nhận</a></li>
                                    <li role="presentation" rel="r-tab3"><a aria-controls="Position" role="tab"
                                                                            href="#r-tab3">Đã sử dụng</a></li>
                                </ul>
                                <div class="tabs__container"><h3 rel="r-tab1" class="tabs__accordion-heading active">Tất
                                        cả lịch sử</h3>
                                    <div id="r-tab1" role="tabpanel" class="tabs__content active"><p class="not-found">
                                            Chưa có lịch sử</p><!----><!----><!----></div>
                                    <h3 rel="r-tab2" class="tabs__accordion-heading">Đã nhận</h3>
                                    <div id="r-tab2" role="tabpanel" class="tabs__content"><p class="not-found">Chưa có
                                            lịch sử</p><!----><!----><!----></div>
                                    <h3 rel="r-tab3" class="tabs__accordion-heading">Đã sử dụng</h3>
                                    <div id="r-tab3" role="tabpanel" class="tabs__content"><p class="not-found">Chưa có
                                            lịch sử</p><!----><!----><!----></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
