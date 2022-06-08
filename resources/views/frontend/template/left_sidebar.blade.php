<div class="support-page-sidebar">
    <ul>
        <li><a routerlinkactive="active" href="{{route('customers.history', ['id' => getSessionUser()->id])}}">Danh sách đặt chỗ</a></li>
        <li><a routerlinkactive="active" href="{{route('customers.point')}}">Lịch sử tích điểm</a></li>
        <li><a routerlinkactive="active" href="{{route('customers.profile')}}">Tài khoản của tôi</a></li>
        <li><a routerlinkactive="active" href="{{route('customers.change_password')}}">Thay đổi mật khẩu</a></li>
        <li><a href="{{route('logout.customer')}}">Đăng xuất</a></li>
    </ul>
</div>
