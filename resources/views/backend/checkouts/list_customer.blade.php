@extends('backend.layout.master')
@section('title', 'Cập nhật đơn hàng')

@section('content')
    {{--{{dd($banners)}}--}}
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Danh sách khách hàng theo chuyến</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Danh sách khách hàng</h2>
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
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Tên khách hàng</th>
                                    <th class="text-center">Số điện thoại</th>
                                    <th class="text-center">Số ghế</th>
                                    <th class="text-center">Điểm đón</th>
                                    <th class="text-center">Giờ đón</th>
                                    <th class="text-center">Điểm trả</th>
                                    <th class="text-center">Giờ đón</th>
                                    <th class="text-center">Giá vé</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Cập nhật</th>
{{--                                    <th class="text-center">Trạng thái</th>--}}
{{--                                    <th class="text-center">Hành động</th>--}}

                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data))
                                    @foreach ($data as $id => $value)
                                        <tr>
                                            <td class="text-center">{{$id + 1}}</td>
                                            <td class="text-center">
                                                {{$value->name}}
                                            </td>
                                            <td class="text-center">
                                                <a href="tel:{{$value->phone}}" class="call_customer">{{$value->phone}}</a>
                                            </td>
                                            <td class="text-center">
                                                {{$value->thu_tu}}
                                            </td>
                                            <td class="text-center">
                                                {{$value->diem_don}}
                                            </td>
                                            <td class="text-center">
                                                {{(date('G:i', strtotime($value->gio_don)))}}
                                            </td>
                                            <td class="text-center">
                                                {{$value->diem_tra}}
                                            </td>
                                            <td class="text-center">
                                                {{(date('G:i', strtotime($value->gio_tra)))}}
                                            </td>
                                            <td class="text-center">
                                                {{ number_format(floatval($value->gia_ve), 0, ',', '.') . "đ" }}
                                            </td>
                                            <td class="text-center">
                                                @if($value->trang_thai == 1)
                                                    <button type="button"
                                                            class="btn btn-round btn-success btn-xs btnChangeStatus">Đã thanh toán
                                                    </button>
                                                @elseif($value->trang_thai == 0)
                                                    <button type="button"
                                                            class="btn btn-round btn-danger btn-xs btnChangeStatus">Chưa thanh toán
                                                    </button>
                                                @else
                                                    <button type="button"
                                                            class="btn btn-round btn btn-warning btn-xs btnChangeStatus">Vé hủy
                                                    </button>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if($value->trang_thai == 1)
                                                    <a href="{{route('edit.checkout', $value->id)}}" style="min-width:100px;"
                                                       class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Cập nhật</a>
                                                @elseif($value->trang_thai == 0)
                                                    <a href="{{route('edit.checkout', $value->id)}}" style="min-width:100px;"
                                                       class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Cập nhật</a>
                                                @else
                                                    <p>Vé hủy</p>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@stop

@push('js')
    <script src="{{asset('libs/fastclick/lib/fastclick.js')}}"></script>

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
    <script src="{{asset('libs/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('libs/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->

    <script type="text/javascript">
        //----------------Datatables-----------
        var $datatable = $('#datatable-buttons');

        $datatable.dataTable({
//            'order': [[3, 'asc']],
            'columnDefs': [
                {orderable: true, targets: [0]}
            ]
        });
    </script>
@endpush
