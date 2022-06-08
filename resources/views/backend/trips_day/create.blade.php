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
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('trips_day.store')}}"
                                  enctype="multipart/form-data" autocomplete="off" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên chuyến
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_chuyen" id="" class="form-control" {{old('ten_chuyen')}}>
                                            @foreach($listChuyen as $chuyen)
                                                <option value="{{$chuyen->id}}">{{$chuyen->ten_chuyen}} - {{$chuyen->gio}} - {{$chuyen->chieu}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên xe
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_xe" id="" class="form-control" {{old('ten_xe')}}>
                                            @foreach($listXe as $xe)
                                                <option value="{{$xe->id}}">{{$xe->ten_xe}} - {{$xe->ten_lx}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tài xế
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_tx" id="" class="form-control" {{old('name')}}>
                                            @foreach($drivers as $driver)
                                                <option value="{{$driver->id}}">{{$driver->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Ngày
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input id="ngay" value="{{old('ngay')}}"
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
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Thêm
                                            mới
                                        </button>
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
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{url("/upload.php")}}",
    });
</script>
@endpush
