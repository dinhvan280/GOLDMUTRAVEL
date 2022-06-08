@extends('backend.layout.master')

@section('title', 'Thêm tuyến đường' . ' | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="col-md-12">
                    <h3 class="text-center">Thêm tuyến đường</h3>
                </div>
                <div class="col-md-12" style="padding: 0px;">
                    <a href="{{URL::previous()}}" class="btn btn-default"><i class="fa fa-reply"></i> Quay lại</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tuyến đường</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('roads.store')}}"
                                  enctype="multipart/form-data" autocomplete="off" method="post">
                                {{csrf_field()}}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                        Tên tuyến
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ten_tuyen" value="{{old('ten_tuyen')}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="ten_tuyen" type="text" required placeholder="Tên tuyến">
                                        @if ($errors->has('ten_tuyen'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('ten_tuyen') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Điểm đầu
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="diem_dau" value="{{old('diem_dau')}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="diem_dau" type="text" required placeholder="Điểm đầu">
                                        @if ($errors->has('diem_dau'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('diem_dau') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Điểm cuối
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="diem_cuoi" value="{{old('diem_cuoi')}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="diem_cuoi" type="text" required placeholder="Điểm cuối">
                                        @if ($errors->has('diem_cuoi'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('diem_cuoi') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Điểm dừng nghỉ
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="diem_dn" value="{{old('diem_dn')}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="diem_dn" type="text" required placeholder="Điểm dừng nghỉ">
                                        @if ($errors->has('diem_dn'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('diem_dn') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">+ Thêm tuyến</button>
                                    </div>
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
<script>
    //Show image to box when select
    function show_img_selected(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image_logo #img_show').attr('src', e.target.result);
                $('.image_logo').attr('style', "min-height: auto");
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
