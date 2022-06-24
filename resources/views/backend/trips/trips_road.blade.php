@extends('backend.layout.master')
@section('title', 'Danh dách chuyến | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Các chuyến trên tuyến {{$tuyen->ten_tuyen}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2" style="padding: 0px;">
                            <a href="{{route('trips.create')}}" class="btn btn-success form-control btnAddNew">
                                <i class="fa fa-plus"></i> Thêm chuyến xe
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{$tuyen->ten_tuyen}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable-buttons"
                                   class="table table-striped jambo_table table-bordered table-responsive bulk_action">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width:5%">STT</th>
{{--                                    <th class="text-center" style="width:20%">Hình ảnh</th>--}}
                                    <th class="text-center" style="width:10%">Tên chuyến</th>
                                    <th class="text-center" style="width:15%">Tên Tuyến</th>
                                    <th class="text-center" style="width:15%">Thời gian</th>
                                    <th class="text-center" style="width:10%">Thứ tự</th>
                                    <th class="text-center" style="width:10%">Chiều</th>
                                    <th class="text-center" style="width:10%">Hành động</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($listChuyen as $id => $value)
                                    <tr>
                                        <td class="text-center">{{$id + 1}}</td>
{{--                                        <td class="text-center">--}}
{{--                                            <a href="{{route('trips.edit', $value->id)}}">--}}
{{--                                                <img src="{{url('/')}}/{{$value->anh}}"--}}
{{--                                                     width="150"></a>--}}
{{--                                        </td>--}}
                                        <input type="hidden" value="{{$value->ten_chuyen}}">
                                        <td class="text-center">
                                            <a href="{{route('trips.edit', $value->id)}}">{{$value->ten_chuyen}}</a>
                                        </td>
                                        <td class="text-center">
                                            {{$value->ten_tuyen}}
                                        </td>
                                        <td class="text-center">
                                            ({{date('G:i', strtotime($value->gio))}})
                                        </td>
                                        <td class="text-center">
                                            {{$value->thu_tu}}
                                        </td>
                                        @if($value->chieu == 'di')
                                            <td class="text-center">
                                                Chiều đi
                                            </td>
                                        @else
                                            <td class="text-center">
                                                Chiều về
                                            </td>
                                        @endif
                                        <td class="text-center">
                                            <a href="{{route('trips.edit', $value->id)}}" style="min-width:100px;"
                                               class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Cập nhật</a>
                                            <form action="{{route('trips.destroy', $value->id)}}" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                {{csrf_field()}}
                                                <button type="submit" onclick="return ConfirmDelete()"
                                                        class="btn btn-danger btn-xs" name="actiondelete" value="1"
                                                        style="min-width:100px;"><i
                                                        class="fa fa-trash"></i> Xóa
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@push('js')
<!-- jQuery <-->
<script src="{{asset('libs/fastclick/lib/fastclick.js')}}"></script>

<!-- NProgress -->
<script src="{{asset('libs/nprogress/nprogress.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('libs/iCheck/icheck.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('libs/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
<script src="{{asset('libs/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('libs/pdfmake/build/vfs_fonts.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('backend/js/products.js')}}"></script>
<script type="text/javascript">
    //----------------Datatables-----------
    var $datatable = $('#datatable-buttons');

    $datatable.dataTable({
        'columnDefs': [
            {orderable: true, targets: [0]}
        ]
    });

    $(":input").inputmask();
    function ConfirmDelete() {
        var x = confirm("Bạn có thực sự muốn xóa sản phẩm này?");
        if (x)
            return true;
        else
            return false;
    }
</script>

@endpush
