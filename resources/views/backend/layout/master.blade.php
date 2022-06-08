<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/logo/logo_small.gif')}}"/>
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{asset('libs/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/nprogress/nprogress.css')}}" rel="stylesheet">
    <link href="{{asset('libs/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <link href="{{asset('libs/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <script type="text/javascript">
        window.onload = function () {//from ww  w . j  a  va2s. c  o  m
            var today = new Date().toISOString().split('T')[0];
            document.getElementsByName("setTodaysDate")[0].setAttribute('min', today);
        }

    </script>

    @stack('css')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('/dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Kim Long!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="{{url('/')}}/images/user.png" alt="{{Auth::user()->name}}"
                             class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                @if(\Illuminate\Support\Facades\Auth::user()->type == 'laixe')
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Thông tin chung</h3>
{{--                            <ul class="nav side-menu">--}}
{{--                                <li>--}}

                                    <ul class="nav side-menu">

                                        <li>
                                            <a><i class="fa fa-table"></i> Danh sách khách hàng <span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                @foreach($listChuyenNgay as $c)
                                                    <li>
                                                        <a href="{{route('customer.list', ['ma_cn' => $c->id])}}">
                                                            Chuyến {{$c->ten_chuyen}}({{date('d/m/Y', strtotime($c->ngay))}}
                                                            -{{date('G:i', strtotime($c->gio))}})
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </li>


                                    </ul>
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="{{route('logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="{{url('/')}}/images/user.png"
                                     alt="{{Auth::user()->name}}">{{Auth::user()->name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{url('/')}}" target="_blank">Customer View</a></li>
                                <li>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modalChangePassword">Change
                                        Password</a>
                                </li>
                                <li>
                                    <a href=""
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i> Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            <div id="modalChangePassword" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <form action="{{route('admin.changePassword')}}" class="form-horizontal"
                                          method='post'>
                                    {{csrf_field()}}
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                                <h4 class="modal-title">Change Password</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="col-md-4 text-right">
                                                        <label class="control-label">Password New <span
                                                                class="required">*</span></label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" class="form-control" name="password"
                                                               placeholder="********"/>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Update</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        @if(@$data)
            @yield('content')
        @else
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h3>Chọn chuyến để hiển thị danh sách khách hàng</h3>
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
    {{--                                <div class="x_content">--}}
    {{--                                    <table id="datatable-buttons"--}}
    {{--                                           class="table table-striped jambo_table table-bordered table-responsive bulk_action">--}}
    {{--                                        <thead>--}}
    {{--                                        <tr>--}}
    {{--                                            <th class="text-center">STT</th>--}}
    {{--                                            <th class="text-center">Tên khách hàng</th>--}}
    {{--                                            <th class="text-center">Số điện thoại</th>--}}
    {{--                                            <th class="text-center">Địa chỉ</th>--}}
    {{--                                            <th class="text-center">Số ghế</th>--}}
    {{--                                            <th class="text-center">Giá vé</th>--}}
    {{--                                            <th class="text-center">Trạng thái</th>--}}
    {{--                                            <th class="text-center">Hành động</th>--}}

    {{--                                        </tr>--}}
    {{--                                        </thead>--}}
    {{--                                        <tbody>--}}
    {{--                                        @if(isset($donHang))--}}
    {{--                                            @foreach ($donHang as $id => $value)--}}
    {{--                                                <tr>--}}
    {{--                                                    <td class="text-center">{{$id + 1}}</td>--}}
    {{--                                                    <td class="text-center">--}}
    {{--                                                        {{$value->name}}--}}
    {{--                                                    </td>--}}
    {{--                                                    <td class="text-center">--}}
    {{--                                                        {{$value->phone}}--}}
    {{--                                                    </td>--}}
    {{--                                                    <td class="text-center">--}}
    {{--                                                        {{$value->address}}--}}
    {{--                                                    </td>--}}
    {{--                                                    <td class="text-center">--}}
    {{--                                                        {{$value->thu_tu}}--}}
    {{--                                                    </td>--}}
    {{--                                                    <td class="text-center">--}}
    {{--                                                        {{ number_format(floatval($value->gia_ve), 0, ',', '.') . "đ" }}--}}
    {{--                                                    </td>--}}
    {{--                                                    <td class="text-center">--}}
    {{--                                                        @if($value->trang_thai == 1)--}}
    {{--                                                            <button type="button"--}}
    {{--                                                                    class="btn btn-round btn-success btn-xs btnChangeStatus">Đã duyệt--}}
    {{--                                                            </button>--}}
    {{--                                                        @elseif($value->trang_thai == 0)--}}
    {{--                                                            <button type="button"--}}
    {{--                                                                    class="btn btn-round btn-danger btn-xs btnChangeStatus">Chưa duyệt--}}
    {{--                                                            </button>--}}
    {{--                                                        @else--}}
    {{--                                                            <button type="button"--}}
    {{--                                                                    class="btn btn-round btn btn-warning btn-xs btnChangeStatus">Đơn hàng bị hủy--}}
    {{--                                                            </button>--}}
    {{--                                                        @endif--}}
    {{--                                                    </td>--}}
    {{--                                                    <td class="text-center">--}}
    {{--                                                        @if($value->trang_thai == 1)--}}
    {{--                                                            <a href="{{route('checkouts.edit', $value->id)}}" style="min-width:100px;"--}}
    {{--                                                               class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Cập nhật</a>--}}
    {{--                                                        @elseif($value->trang_thai == 0)--}}
    {{--                                                            <a href="{{route('checkouts.edit', $value->id)}}" style="min-width:100px;"--}}
    {{--                                                               class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Cập nhật</a>--}}
    {{--                                                        @else--}}
    {{--                                                            <p>Lí do hủy: {{$value->li_do}}</p>--}}
    {{--                                                        @endif--}}
    {{--                                                    </td>--}}
    {{--                                                </tr>--}}
    {{--                                            @endforeach--}}
    {{--                                        @endif--}}

    {{--                                        </tbody>--}}
    {{--                                    </table>--}}
    {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <footer>
            <div class="pull-right">
                Kim Long - Admin Dashboard
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>
                @else
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Thông tin chung</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Trang chủ</a>
                                </li>
                                <li>
                                    <a href="{{route('roads.index')}}"><i class="fa fa-road"></i>Quản lý tuyến</a>
                                </li>
                                <li>
                                    <a><i class="fa fa-table"></i> Quản lý các chuyến <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @foreach($listTuyen as $tuyen)
                                            <li>
                                                <a href="{{route('trips.list', ['id' => $tuyen->id])}}">Tuyến {{$tuyen->ten_tuyen}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('trips_day.index')}}"><i class="fa fa-clock-o"></i>Quản lý chuyến
                                        ngày</a>
                                </li>
                                <li>
                                    <a><i class="fa fa-ticket"></i> Quản lý vé chuyến <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @foreach($ListChuyenNgay as $c)
                                            <li>
                                                @if($c->chieu == 'di')
                                                    <a href="{{route('tickets.list', ['ma_cn' => $c->id])}}">
                                                        Chuyến {{$c->ten_chuyen}}({{date('d/m/Y', strtotime($c->ngay))}}
                                                        -{{date('G:i', strtotime($c->gio))}})
                                                    </a>
                                                @else
                                                    <a href="{{route('tickets.list', ['ma_cn' => $c->id])}}">
                                                        Chuyến {{$c->ten_chuyen}}({{date('G:i', strtotime($c->gio))}})
                                                    </a>
                                                @endif

                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('stop_point.index')}}"><i class="fa fa-map-marker"></i> Quản lý
                                        điểm đỗ</a>
                                </li>
                                <li>
                                    <a><i class="fa fa-table"></i> Quản lý tuyến - điểm đỗ <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @foreach($listTuyen as $tuyen)
                                            <li>
                                                <a><i class="fa fa-road"></i> {{$tuyen->ten_tuyen}} <span
                                                        class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li>
                                                        <a href="{{route('roads_stop_point.list',['id'=> $tuyen->id, 'chieu'=>'di'])}}">Chiều
                                                            đi</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('roads_stop_point.list', ['id' => $tuyen->id, 'chieu'=>'ve'])}}">Chiều
                                                            về</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('cars.index')}}"><i class="fa fa-bus"></i> Quản lý xe</a>
                                </li>
                                <li>
                                    <a href="{{route('types.index')}}"><i class="fa fa-user"></i> Quản lý loại xe</a>
                                </li>
                                <li>
                                    <a><i class="fa fa-shopping-cart"></i> Quản lý đơn hàng <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        @foreach($ListChuyenNgay as $c)
                                            <li>
                                                <a href="{{route('checkouts.list', ['ma_cn' => $c->id])}}">
                                                    Chuyến {{$c->ten_chuyen}}({{date('d/m/Y', strtotime($c->ngay))}}
                                                    -{{date('G:i', strtotime($c->gio))}})
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('customer.export')}}"><i class="fa fa-list-alt"></i> Xuất danh sách khách hàng</a>
                                </li>
                                <li>
                                    <a href="{{route('trip.search')}}"><i class="fa fa-list-alt"></i> Báo cáo các chuyến</a>
                                </li>
                                <li>
                                    <a href="{{route('ticket.search')}}"><i class="fa fa-list-alt"></i> Báo cáo doanh thu</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Thông tin người dùng</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a><i class="fa fa-user-secret"></i>Quản lý thông tin<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('users.listAdmin')}}"><i class="fa fa-users"></i> Quản lý
                                                nhân viên</a></li>
                                        <li><a href="{{route('users.listCustomer')}}"><i class="fa fa-users"></i> Quản
                                                lý khách hàng</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="{{route('logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="{{url('/')}}/images/user.png"
                                     alt="{{Auth::user()->name}}">{{Auth::user()->name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{url('/')}}" target="_blank">Customer View</a></li>
                                <li>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modalChangePassword">Change
                                        Password</a>
                                </li>
                                <li>
                                    <a href=""
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i> Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            <div id="modalChangePassword" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <form action="{{route('admin.changePassword')}}" class="form-horizontal"
                                          method='post'>
                                    {{csrf_field()}}
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                                <h4 class="modal-title">Change Password</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="col-md-4 text-right">
                                                        <label class="control-label">Password New <span
                                                                class="required">*</span></label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" class="form-control" name="password"
                                                               placeholder="********"/>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Update</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        @yield('content')

        <footer>
            <div class="pull-right">
                Kim Long - Admin Dashboard
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>
@endif


<!-- jQuery -->

<script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('libs/nprogress/nprogress.js')}}"></script>
<script src="{{asset('libs/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('libs/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('libs/Datebuild/date.js')}}"></script>
<script src="{{asset('build/js/custom.min.js')}}"></script>
<!-- JQVMap -->
<!-- bootstrap-daterangepicker -->
<script src="{{asset('js/moment/moment.min.js')}}"></script>
<script src="{{asset('js/datepicker/daterangepicker.js')}}"></script>

@stack('js')

</body>
</html>
