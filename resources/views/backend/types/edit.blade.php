@extends('backend.layout.master')
@section('title', 'Loại xe | Dashboard')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thông tin loại xe</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Loại xe</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('types.update', $loaiXe->id)}}"
                                  enctype="multipart/form-data" autocomplete="off" method="post">
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên loại xe
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ten_lx" value="{{$loaiXe->ten_lx}}"
                                               class="form-control col-md-7 col-xs-12" name="ten_lx" type="text">
                                        @if ($errors->has('ten_lx'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('ten_lx') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Số ghế
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="so_ghe" value="{{$loaiXe->so_ghe}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="so_ghe" type="number">
                                        @if ($errors->has('so_ghe'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('so_ghe') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Giá Vé
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="gia_ve" value="{{$loaiXe->gia_ve}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="gia_ve" type="number">
                                        @if ($errors->has('gia_ve'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('gia_ve') }}</strong>
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
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{url("/upload.php")}}",
        });
    </script>
@endpush
