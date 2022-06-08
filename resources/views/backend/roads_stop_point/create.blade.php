@extends('backend.layout.master')

@section('title', 'Thêm tuyến điểm đỗ | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thông tin tuyến điểm đỗ</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tuyến điểm đỗ</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('roads_stop_point.store')}}" enctype="multipart/form-data" autocomplete="off" method="post">
                                {{csrf_field()}}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên tuyến<span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_tuyen" id="" class="form-control" {{old('ten_tuyen')}}>
                                            @foreach($listTuyen as $tuyen)
                                                <option value="{{$tuyen->id}}">{{$tuyen->ten_tuyen}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên điểm đỗ<span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_dd" id="" class="form-control" {{old('ten_dd')}}>
                                            @foreach($diemDo as $diemdo)
                                                <option value="{{$diemdo->id}}">{{$diemdo->ten_dd}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chiều xe
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="chieu_xe" value="{{old('chieu_xe')}}" class="form-control col-md-7 col-xs-12"  name="chieu_xe" type="text">
                                        @if ($errors->has('chieu_xe'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('chieu_xe') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Loại điểm đỗ
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="loai_dd" value="{{old('loai_dd')}}" class="form-control col-md-7 col-xs-12"  name="loai_dd" type="text">
                                        @if ($errors->has('loai_dd'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('loai_dd') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Thời gian
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="thoi_gian" value="{{old('thoi_gian')}}" class="form-control col-md-7 col-xs-12"  name="thoi_gian" type="time">
                                        @if ($errors->has('thoi_gian'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('thoi_gian') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Add</button>
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
        CKEDITOR.replace('editor2', {
            filebrowserBrowseUrl : '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl : '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl : '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl : '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl : '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl : '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
        CKEDITOR.replace('editor22', {
            filebrowserBrowseUrl : '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl : '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl : '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl : '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl : '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl : '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
  @endpush
