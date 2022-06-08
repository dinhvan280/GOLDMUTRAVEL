<form action="" method="POST" spellcheck="false" class="ng-untouched ng-pristine ng-invalid">
    @csrf
    <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body"><!----><!---->
        <h3>Quên mật khẩu</h3>
        <div class="item position-relative">
            <label>Email</label>
            <input formcontrolname="username" type="text" name="email" id="email_verified" class="txt-input ng-untouched ng-pristine ng-invalid" placeholder="Nhập tài khoản hoặc email">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" id="btn_forgot" class="btn btn-confirm">Quên mật khẩu</button>
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
