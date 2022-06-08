<form class="ng-untouched ng-pristine ng-invalid" method="POST" action="{{ route('change.password') }}">
    @csrf
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body"><h3>Cập nhật mật khẩu</h3>
        <div class="item position-relative">
            <label>Mật khẩu cũ</label>
            <input formcontrolname="password" type="text" name="password_old" class="txt-input ng-untouched ng-pristine ng-invalid"
                   placeholder="Nhập mật khẩu cũ" spellcheck="false">
        </div>
        <div class="item position-relative"><label>Mật khẩu mới</label>
            <input formcontrolname="password" class="txt-input ng-untouched ng-pristine ng-invalid" id="txtPassword"
                   placeholder="Nhập mật khẩu mới" type="password" name="password_new" spellcheck="false">
            <button type="button" class="btn btn-eye" title="Hiện mật khẩu"><i
                    aria-hidden="true" id="toggle_pwd" class="fa-eye-slash fa"></i></button>
        </div>
        <input type="text" name="email" hidden value="{{$user->email}}">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-confirm">Cập nhật</button>
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
