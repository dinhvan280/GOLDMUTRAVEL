@extends('backend.layout.master')
@section('title', 'Chuyến ngày | Dashboard')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thông tin chuyến ngày</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Chuyến ngày</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('trips_day.update', $chuyenNgay->id)}}"
                                  enctype="multipart/form-data" autocomplete="off" method="post">
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên chuyến<span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                            <select class="form-control" multiple="multiple" name="ten_chuyen" id="list_chuyen">
                                                @foreach($listChuyen as $chuyen)
                                                    <option value="{{$chuyen->id}}">{{$chuyen->ten_chuyen}} - {{$chuyen->gio}} - {{$chuyen->chieu}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên xe <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_xe" id="" class="form-control" value="{{$chuyenNgay->ten_xe}}">
                                            <option value="{{$chuyenNgay->ma_xe}}">{{$chuyenNgay->ten_xe}}</option>
                                            @foreach($listXe as $c)
                                                <option value="{{$c->id}}">{{$c->ten_xe}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tài xế <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_tx" id="{{@$driver->id}}" class="form-control" value="{{@$driver->name}}">
                                            <option value="{{@$driver->id}}">{{@$driver->name}}</option>
                                            @foreach($drivers as $c)
                                                <option value="{{@$c->id}}">{{@$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Ngày đi
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input id="ngay" value="{{($chuyenNgay->ngay)}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="setTodaysDate" type="date">
                                        @if ($errors->has('ngay'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('ngay') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success" style="width: 100px;">Update</button>
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
    <script src="{{asset('libs/ckeditor/ckeditor.js')}}"></script>

    <script>
        $('.multi.required').on('keyup blur', 'input', function () {
            validator.checkField.apply($(this).siblings().last()[0]);
        });
        $(document).ready(function() {
            $('#list_chuyen').select2();
            $("#list_chuyen").val(@json($trips)).change()
        });
        {{--CKEDITOR.replace('editor1', {--}}
        {{--    filebrowserUploadUrl: "{{url("/upload.php")}}",--}}
        {{--});--}}
    </script>
@endpush
