<form class="ng-untouched ng-pristine ng-invalid" method="POST" action="{{ route('postLogin.customer') }}">
    @csrf
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body"><h3>Đăng nhập</h3>
        <div class="item position-relative">
            <label>Tài khoản hoặc email</label>
            <input formcontrolname="username" type="text" name="email" class="txt-input ng-untouched ng-pristine ng-invalid"
                   placeholder="Nhập tài khoản hoặc email" spellcheck="false">
        </div>
        <div class="item position-relative"><label>Mật khẩu</label>
            <input formcontrolname="password" name="password" id="txtPassword"
                class="txt-input ng-untouched ng-pristine ng-invalid"
                placeholder="Nhập mật khẩu" type="password">
            <button type="button" class="btn btn-eye" title="Hiện mật khẩu"><i
                    aria-hidden="true" id="toggle_pwd" class="fa-eye-slash fa"></i></button>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-confirm">Đăng nhập</button>
        <div class="register">
            <a href="#"><span id="forgot-password"> Quên mật khẩu?</span></a>
            <div data-target="#memberModal2" class="login nav-info-account"
                 data-toggle="modal"><i
                    aria-hidden="true"></i><span
                    id="register" class="txt-register"> Đăng ký</span>
            </div>
        </div>
    </div>
</form>
