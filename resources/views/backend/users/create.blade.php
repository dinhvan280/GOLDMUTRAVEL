@extends('backend.layout.master')
@section('title', 'Thêm người dùng | Dashboard')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thêm người dùng</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form action="{{route('users.store')}}" class="form-horizontal form-label-left"
                                  id="frmAddUser" validate autocomplete="off"
                                  method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Tên đăng
                                                nhập
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12"
                                                       value="{{old('name')}}"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="name" required="required" type="text">
                                                @if ($errors->has('name'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="email">Email
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email"
                                                       value="{{old('email')}}"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if ($errors->has('email'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Vai trò
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <select name="type" id="" class="form-control" {{old('type')}}>
                                                    <option value="quantri">Quản trị</option>
                                                    <option value="nhanvien">Nhân viên</option>
                                                    <option value="khachhang">Khách hàng</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="password">Mật
                                                khẩu
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input id="password" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="password" type="password">
                                                @if ($errors->has('password'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">Địa chỉ
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input type="text" id="address" name="address"
                                                       value="{{old('address')}}"
                                                       data-validate-minmax="10,100"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if ($errors->has('address'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">Số
                                                điện thoại
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input type="text" id="phone" name="phone"
                                                       value="{{old('phone')}}"
                                                       data-validate-minmax="10,100"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if ($errors->has('phone'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Thêm người
                                        dùng
                                    </button>
                                    <a href="{{URL::previous()}}" class="btn btn-default btn-secondary"><i
                                                class="fa fa-reply"></i> Quay lại</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@push('js')
<script src="{{asset('libs/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
<script>
    $(":input").inputmask();
</script>

@endpush
