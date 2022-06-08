@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Thay đổi mật khẩu</div>
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
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body txt-center"></div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-cancel">Đóng
                                            </button>
                                            <button type="button" data-dismiss="modal" class="btn btn-confirm">Đồng ý
                                            </button>
                                        </div>
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
                            <li aria-current="page" class="breadcrumb-item active">Thay đổi mật khẩu</li>
                        </ol>
                    </nav>
                    <form method="POST" action="{{route('update.password')}}" class="ng-untouched ng-pristine ng-invalid">
                        @csrf
                        <div class="support-page-content account">
                            <div class="item"><label>Mật khẩu cũ <span>*</span></label>
                                <input formcontrolname="password" name="password" id="txtPassword3"
                                       class="txt-input ng-untouched ng-pristine ng-invalid"
                                       placeholder="Nhập mật khẩu" type="password">
                                <button type="button" class="btn btn-eye" title="Hiện mật khẩu"><i
                                        aria-hidden="true" id="toggle_pwd3" class="fa-eye-slash fa"></i></button>
                            </div>
                            <div class="item"><label>Mật khẩu mới <span>*</span></label>
                                <input formcontrolname="password" name="password1" id="txtPassword1"
                                       class="txt-input ng-untouched ng-pristine ng-invalid"
                                       placeholder="Nhập mật khẩu" type="password">
                                <button type="button" class="btn btn-eye" title="Hiện mật khẩu"><i
                                        aria-hidden="true" id="toggle_pwd1" class="fa-eye-slash fa"></i></button>
                            </div>
                            <div class="item"><label>Xác nhận mật khẩu mới <span>*</span></label>
                                <input formcontrolname="password" name="password2" id="txtPassword2"
                                       class="txt-input ng-untouched ng-pristine ng-invalid"
                                       placeholder="Nhập mật khẩu" type="password">
                                <button type="button" class="btn btn-eye" title="Hiện mật khẩu"><i
                                        aria-hidden="true" id="toggle_pwd2" class="fa-eye-slash fa"></i></button>
                            </div>
                            @php $user = SESSION('user') @endphp
                            <input type="text" name="id" value="{{@$user->id}}" hidden>
                            <div>
                                <button type="submit">Cập nhật mật khẩu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
