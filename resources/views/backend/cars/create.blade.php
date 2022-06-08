@extends('backend.layout.master')
@section('title', 'Quản lí xe | Dashboard')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thông tin xe</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Xe</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('cars.store')}}" enctype="multipart/form-data" autocomplete="off" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên xe <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ten_xe" value="{{old('ten_xe')}}" class="form-control col-md-7 col-xs-12"  name="ten_xe" type="text" required>
                                        @if ($errors->has('ten_xe'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('ten_xe') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Biển số <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="bien_so" value="{{old('bien_so')}}" class="form-control col-md-7 col-xs-12"  name="bien_so" type="text" required>
                                        @if ($errors->has('bien_so'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('bien_so') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Hình ảnh <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="box_show_img">
                                            <img src="" alt="" id="img_show">
                                            <i class="">+</i>
                                        </div>
                                        <div class="box_upload">
                                            Chọn hình ảnh
                                            <input type="file" class="hide_file" name="image" onchange="show_img_selected(this)" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Giới thiệu <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="gioi_thieu" id="editor1" value="{{old('gioi_thieu')}}" class="form-control" cols="30" rows="5" placeholder="Tóm tắt" required>

                                        </textarea>
                                        @if ($errors->has('gioi_thieu'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('gioi_thieu') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Loại xe <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="ma_lx" id="" class="form-control" {{old('ma_lx')}}>
                                            @foreach($listLoaiXe as $loaixe)
                                                <option value="{{$loaixe->id}}">{{$loaixe->ten_lx}}</option>
                                            @endforeach
                                        </select>
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
    <script src="{{asset('libs/validator/validator.js')}}"></script>
    <script src="{{asset('build/js/custom.js')}}"></script>
    <script>
        // initialize the validator function
        validator.message.date = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required').on('keyup blur', 'input', function () {
            validator.checkField.apply($(this).siblings().last()[0]);
        });

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });
        //Show image to box when select
        function show_img_selected(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_show').attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
    <script>
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{url("/upload.php")}}",
        });
        CKEDITOR.replace('editor2', {
            filebrowserUploadUrl: "{{url("/upload.php")}}",
        });
    </script>
  @endpush
