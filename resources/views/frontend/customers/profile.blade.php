@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Tài khoản của tôi</div>
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
                            <li aria-current="page" class="breadcrumb-item active">Tài khoản của tôi</li>
                        </ol>
                    </nav>
                    @php $user = SESSION('user') @endphp
                    <form action="{{route('update.profile')}}" method="POST" class="ng-untouched ng-pristine ng-invalid">
                        @csrf
                        <div spellcheck="false" class="support-page-content account">
                            <div class="item"><label>Tên đăng nhập</label>
                                <input type="text" name="name"
                                       formcontrolname="username" value="{{$user->name}}"
                                       class="txt-input ng-untouched ng-pristine ng-invalid"
                                       placeholder="Vui lòng nhập tên đăng nhập mới">
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-5 pr-0">--}}
{{--                                    <div class="item"><label>Họ</label>--}}
{{--                                        <input type="text" formcontrolname="firstName" value="{{$user->name}}"--}}
{{--                                               class="txt-input text-capitalize ng-untouched ng-pristine ng-invalid"--}}
{{--                                               placeholder="Vui lòng nhập họ">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <div class="item"><label>Tên</label>--}}
{{--                                        <input type="text" formcontrolname="lastName"--}}
{{--                                               class="txt-input text-capitalize ng-untouched ng-pristine ng-valid"--}}
{{--                                               placeholder="Vui lòng nhập tên">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="item"><label>Số điện thoại</label>
                                <input type="text" inputmode="numeric" name="phone"
                                       pattern="[0-9]{10,11}" digitonly="" value="{{$user->phone}}"
                                       formcontrolname="phone"
                                       class="txt-input ng-untouched ng-pristine ng-invalid"
                                       placeholder="Vui lòng nhập số điện thoại mới">
                            </div>
                            <div class="item"><label>Email</label>
                                <input type="text" formcontrolname="email" name="email" value="{{$user->email}}"
                                       class="txt-input ng-untouched ng-pristine ng-valid"
                                       placeholder="Vui lòng nhập email mới">
                            </div>
                            <input type="text" hidden value="{{$user->id}}" name="user_id">
                            <div>
                                <button type="submit">Cập nhật thông tin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
