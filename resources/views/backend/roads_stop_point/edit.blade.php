@extends('backend.layout.master')

@section('title', 'Sửa tuyến điểm đỗ | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="col-md-12">
                    <h3 class="text-center">Sửa tuyến điểm đỗ </h3>
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
                            <form class="form-horizontal form-label-left"
                                  action="{{route('roads_stop_point.update', $tuyenDiemDo->id)}}" enctype="multipart/form-data"
                                  autocomplete="off" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên tuyến<span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_tuyen" id="" class="form-control" {{old('ten_tuyen')}}>
                                            <option value="{{$tuyen->id}}">{{$tuyen->ten_tuyen}}</option>
                                            @foreach($listTuyen as $t)
                                                <option value="{{$t->id}}">{{$t->ten_tuyen}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên điểm đỗ<span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ten_dd" id="" class="form-control" {{old('ten_dd')}}>
                                            <option value="{{$diemDo->id}}">{{$diemDo->ten_dd}}</option>
                                            @foreach($listDiemDo as $diemdo)
                                                <option value="{{$diemdo->id}}">{{$diemdo->ten_dd}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chiều xe <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input type="text" id="timetrips" name="chieu_xe" value="{{$tuyenDiemDo->chieu_xe}}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Loại điểm đỗ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input type="text" id="timetrips" name="loai_dd" value="{{$tuyenDiemDo->loai_dd}}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Giờ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <input type="time" id="timetrips" name="thoi_gian" value="{{$tuyenDiemDo->thoi_gian}}">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Update</button>
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
    <script src="{{asset('libs/validator/validator.js')}}"></script>
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
