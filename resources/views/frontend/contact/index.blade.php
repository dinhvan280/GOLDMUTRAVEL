@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Liên hệ</div>
            </div>
        </div>
    </div>
    <div class="support-page">
        <div class="container">
            <div class="row offset-md-0 offset-lg-1 title-contact">
                <div class="col-12"><h4>Gửi thông tin liên hệ</h4>
                    <p>KIMLONG sẵn sàng lắng nghe câu hỏi và ý kiến đóng góp của Quý khách</p></div>
            </div>
            <form novalidate="" spellcheck="false" class="ng-untouched ng-pristine ng-invalid">
                <div class="row flex-column-reverse flex-lg-row offset-md-0 offset-lg-1">
                    <div class="col-12 col-lg-6">
                        <div class="account">
                            <div class="item"><label>Họ tên <span>*</span></label><!----><!----><input
                                    formcontrolname="fullname" type="text" minlength="3"
                                    class="txt-input ng-untouched ng-pristine ng-invalid"
                                    placeholder="Vui lòng nhập họ tên"></div>
                            <div class="item"><label>Địa chỉ email <span>*</span></label><!----><!----><input
                                    formcontrolname="email" type="email"
                                    class="txt-input ng-untouched ng-pristine ng-invalid"
                                    placeholder="Vui lòng nhập địa chỉ email"></div>
                            <div class="item"><label>Số điện thoại <span>*</span></label><!----><!----><!----><input
                                    formcontrolname="phone" type="phone"
                                    class="txt-input ng-untouched ng-pristine ng-invalid"
                                    placeholder="Vui lòng nhập số điện thoại"></div>
                            <div class="item">
                                <div class="item"><label for="">Nội dung</label><textarea formcontrolname="content"
                                                                                          rows="5"
                                                                                          class="txt-input ng-untouched ng-pristine ng-valid"
                                                                                          placeholder="Vui lòng nhập nội dung Quý khách cần được hỗ trợ"></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn-submit">Gửi</button>
                            </div>
                        </div><!----><!----><!----></div>
                    <div class="col-12 col-lg-6">
                        <div class="location">
                            <div class="item"><i aria-hidden="true" class="fa fa-map-o"></i>
                                <div><h5>Địa chỉ văn phòng</h5>
                                    <p>Xóm 9 - Hải Vân - Hải Hậu - Nam Định</p></div>
                            </div>
                            <div class="item"><i aria-hidden="true" class="fa fa-phone"></i>
                                <div><h5>Hotline chăm sóc khách hàng</h5>
                                    <p><a href="tel:1900 20 53">1900 20 53</a></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form><!----></div>
    </div>
@stop
