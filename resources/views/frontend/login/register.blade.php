<form method="POST" action="{{route('postRegister.customer')}}" class="ng-untouched ng-pristine ng-invalid">
    @csrf
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                aria-hidden="true">×</span></button>
    </div>
    <div class="modal-body">
        <h3>Đăng ký</h3>
        <div class="item position-relative">
            <label>Tên tài khoản</label>
            <input formcontrolname="name" minlength="3" type="text" name="name"
                   class="txt-input ng-untouched ng-pristine ng-invalid" placeholder="Nhập tên tài khoản">
        </div>
        <div class="item position-relative">
            <label>Email</label>
            <input formcontrolname="email" type="email" name="email" class="txt-input ng-untouched ng-pristine ng-invalid"
                   placeholder="Nhập email">
        </div>
        <div class="item position-relative">
            <label>Địa chỉ</label>
            <input formcontrolname="address" type="text" name="address" class="txt-input ng-untouched ng-pristine ng-invalid"
                   placeholder="Nhập địa chỉ">
        </div>
        <div class="item position-relative">
            <label>Mật khẩu</label>
            <input formcontrolname="password" minlength="3" name="password"
                   class="txt-input ng-untouched ng-pristine ng-invalid" placeholder="Nhập mật khẩu" id="txtPassword"
                   type="text">
            <button type="button" class="btn btn-eye" title="Hiện mật khẩu"><i
                    aria-hidden="true" id="toggle_pwd" class="fa-eye-slash fa"></i></button>
        </div>
        <div class="item position-relative">
            <label>Số điện thoại</label>
            <input type="tel" name="phone" inputmode="numeric" pattern="[0-9]{10,11}" digitonly="" formcontrolname="bookingPhoneNumber" required="" class="txt-input ng-untouched ng-pristine ng-invalid"placeholder="Nhập số điện thoại"
                   placeholder="Nhập số điện thoại">
        </div>
        <div class="checkbox checkbox-regis">
            <input id="cbConfirmPolicy" type="checkbox" name="check" value="1"
                   class="ng-untouched ng-pristine ng-valid">
            <label for="cbConfirmPolicy">Tôi đã đọc và đồng ý với
                <a target="_blank" href="#">Chính sách bảo mật thông
                    tin cá nhân</a> và
                <a target="_blank" href="#">Điều khoản sử dụng</a> trên nền tảng
                KIMLONGTRAVEL</label>
        </div></div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-confirm">Đăng ký</button>

        <div class="register">
            <p>Bạn đã có tài khoản?</p>
            <div data-target="#memberModal2" class="login nav-info-account"
                 data-toggle="modal">
                <i aria-hidden="true"></i><span
                    id="login" class="txt-register"> Đăng nhập</span>
            </div>
        </div>
    </div>
</form>

