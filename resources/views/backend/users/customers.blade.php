@extends('backend.layout.master')
@section('title', 'Quản lí người dùng | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left" style="width:100%;">
                    <h3 class="text-center">Cập nhật người dùng</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        @if(\Illuminate\Support\Facades\Auth::user()->type == 'quantri')
                            <div class="x_title">
                                <div class="col-lg-2 col-md-2 col-sm-2" style="padding: 0px;">
                                    <a class="btn btn-success form-control btnAddNew" href="{{route('users.create')}}">
                                        <i class="fa fa-user-plus"></i> Thêm người dùng
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @endif
                        <div class="x_content">
                            <table id="datatable-buttons"
                                   class="table jambo_table table-striped table-bordered table-responsive bulk_action">
                                <thead>
                                <tr>
                                    <th class="text-center" width="2%">STT</th>
                                    <th class="text-center" width="15%">Tên đăng nhập</th>
                                    <th class="text-center" width="10%">Email</th>
                                    <th class="text-center" width="10%">Số điện thoại</th>
{{--                                    @if(\Illuminate\Support\Facades\Auth::user()->type == 'quantri')--}}
{{--                                        <th class="text-center" width="15%">Hành động</th>--}}
{{--                                    @endif--}}

                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($listUser as $id => $value)
                                    <tr>
                                        <td class="text-center">{{$id + 1}}</td>
                                        <td class="text-center"><a href="javascript:void(0)" style="font-weight: bold;" >{{$value->name}}</a>
                                        </td>
                                        <td class="text-center">{{$value->email}}</td>
                                        <td class="text-center">{{$value->phone}}</td>
{{--                                        @if(\Illuminate\Support\Facades\Auth::user()->type == 'quantri')--}}
{{--                                            <td class="text-center">{{$value->type}}</td>--}}
{{--                                            <td class="text-center">--}}
{{--                                                <a href="{{route('users.edit', $value->id)}}" style="min-width:100px;"--}}
{{--                                                   class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Cập nhật</a>--}}
{{--                                                <form action="{{route('users.destroy', $value->id)}}" method="post">--}}
{{--                                                    <input type="hidden" name="_method" value="DELETE">--}}
{{--                                                    {{csrf_field()}}--}}
{{--                                                    <button type="submit" onclick="return ConfirmDelete()"--}}
{{--                                                            class="btn btn-danger btn-xs" name="actiondelete" value="1"--}}
{{--                                                            style="min-width:100px;"><i--}}
{{--                                                            class="fa fa-trash"></i> Xóa--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                        @endif--}}
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
            var x = confirm("Bạn có thực sự muốn xóa người dùng này?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endpush
