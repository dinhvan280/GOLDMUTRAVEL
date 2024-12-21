</div>
<footer class="footer">
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="footer-item"><a routerlink="/" routerlinkactive="active" href="/"
                                                class="active"><img src="{{asset('images/image/logo.png')}}" alt="SWIO"
                                                                    class="logo"></a>
                        <p>GOLDMU - Trang bán vé xe khách trực tuyến hàng đầu tại Việt Nam.</p>
                        <div class="social"><h5>Kết nối với chúng tôi</h5>
                            <ul>
                                <li><a href="#"
                                       target="_blank"><img src="/assets/images/icon-facebook.svg"
                                                            alt="Facebook"></a></li>
                                <li><a href="#" target="_blank"><img
                                            src="/assets/images/icon-instagram.svg" alt="Instagram"></a>
                                </li>
                                <li><a href="#"
                                       target="_blank"><img src="/assets/images/icon-linkedin.svg"
                                                            alt="Linkedin"></a></li>
                            </ul>
                        </div>
                        <a href="#" target="_blank"
                           class="d-block mb-4"><img src="/assets/images/logo-bct.png"
                                                     class="img-fluid logo-policy" alt="Bộ Công Thương"></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="footer-item support"><h4>Hỗ trợ khách hàng</h4>
                                <ul>
{{--                                    <li><a routerlinkactive="active" href="{{route('question')}}">Câu hỏi--}}
{{--                                            thường gặp</a></li>--}}
{{--                                    <li><a routerlinkactive="active"--}}
{{--                                           href="/blog/huong-dan-dat-hang-va-thanh-toan">Hướng dẫn đặt hàng--}}
{{--                                            và thanh toán</a></li>--}}
                                    <li><a routerlinkactive="active" href="{{route('complain')}}">Quy trình
                                            giải quyết khiếu nại</a></li>
                                    <li><a routerlinkactive="active" href="#">Hướng dẫn
                                            huỷ vé</a></li><!---->
                                    <li><a routerlinkactive="active" href="{{route('contact')}}">Gửi yêu cầu hỗ trợ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="footer-item certificates"><h4>Đối tác - Đại lý</h4>
                                <ul>
                                    <li><img src="/assets/images/log-vxr.svg" alt="VeXeRe"
                                             class="img-fluid"></li>
                                    <li class="mt-2"><img src="/assets/images/logo-anvui.svg" alt="AnVui"
                                                          class="img-fluid"></li>
                                </ul>
                            </div>
                        </div>
{{--                        <div class="col-12">--}}
{{--                            <div class="footer-item certificates brand"><h4>Phương thức thanh toán</h4>--}}
{{--                                <ul class="justify-content-center justify-content-sm-start">--}}
{{--                                    <li><img src="/assets/images/logo-visa.png" alt="Visa Card"--}}
{{--                                             class="img-fluid"></li>--}}
{{--                                    <li><img src="/assets/images/logo-master-card.png" alt="Master Card"--}}
{{--                                             class="img-fluid"></li>--}}
{{--                                    <li><img src="/assets/images/logo-jcb.png" alt="JCB" class="img-fluid">--}}
{{--                                    </li>--}}
{{--                                    <li><img src="/assets/images/logo-internetbanking.png"--}}
{{--                                             alt="Internet Banking" class="img-fluid"></li>--}}
{{--                                    <li><img src="/assets/images/logo-american-express.png"--}}
{{--                                             alt="American Express" class="img-fluid"></li>--}}
{{--                                    <li><img src="/assets/images/logo-vnpay.png" alt="VNPAY"--}}
{{--                                             class="img-fluid"></li>--}}
{{--                                    <li><img src="/assets/images/logo-payoo.png" alt="Payoo"--}}
{{--                                             class="img-fluid"></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="footer-item support"><h4>Về GOLDMU</h4>
                        <ul>
                            <li><a routerlinkactive="active" href="{{url('gioi-thieu')}}">Giới thiệu</a>
                            </li>
{{--                            <li><a routerlinkactive="active" href="{{route('question')}}">Câu hỏi thường gặp</a>--}}
                            </li>
                            <li><a routerlinkactive="active" href="{{route('term')}}">Điều
                                    khoản sử dụng</a></li>
                            <li><a routerlinkactive="active" href="{{route('membership')}}">Quy chế hội viên</a></li>
                            <li><a routerlinkactive="active" href="{{route('complain')}}">Quy trình
                                    giải quyết khiếu nại</a></li>
                            <li><a routerlinkactive="active" href="{{route('privacy')}}">Chính
                                    sách bảo mật thông tin cá nhân</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container"><p>© 2022 Phát triển và xây dựng bởi <a href="javascript:;">GOLDMU</a></p>
        </div>
</footer>
<button type="button" class="scroll-up-btn"><i aria-hidden="true" class="fa fa-level-up"></i></button>
</layout-footer>
</div><!---->
<div id="embedCodeBody"></div>
</div>


<!-- JavaScript -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/slider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/js/tab.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/dropdown.js')}}"></script>
{{--<script src="{{asset('assets/js/common.js?v=a90')}}"></script>--}}
{{--<script src="{{asset('assets/js/accordion.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/range.js')}}"></script>--}}

<script src="{{asset('libs/jquery-datetimepicker/jquery.datetimepicker.full.min.js')}}"></script>
{{--<script src="{{asset('assets/js/vendors/select2/select2.full.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/vendors/slick/slick-animation.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/vendors/timeago/timeago.min.js')}}"></script>--}}
<script type="text/javascript">
    $(function () {
        datetimepicker('/');
        function datetimepicker(format) {
            $('.datetime').datetimepicker({
                format: "d" + format + "m" + format + "Y",
                step: 30,
                timepicker: false,
                todayButton: true,
                onShow: function (ct) {
                    let currentDate = getCurrentDate('/');
                    this.setOptions({
                        minDateTime: currentDate ? currentDate : false,
                    })
                },

            });
            $.datetimepicker.setLocale('vn');
        }
        function getCurrentDate(format) {
            let today = new Date();
            let dd = today.getDate() + 1;
            let mm = today.getMonth(); //January is 0!
            let yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd
            }

            if (mm < 10) {
                mm = '0' + mm
            }

            if (!format) {
                format = '/';
            }

            today = dd + format + mm + format + yyyy;
            return today;
        }


    });

</script>
@include('frontend.template.script')
<!-- Messenger Plugin chat Code -->
{{--<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div><div class=" fb_iframe_widget fb_invisible_flow" fb-iframe-plugin-query="app_id=&amp;attribution=biz_inbox&amp;container_width=1519&amp;current_url=https%3A%2F%2Fswio.vn%2F&amp;is_loaded_by_facade=true&amp;local_state=%7B%22v%22%3A1%2C%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%7D&amp;locale=vi_VN&amp;log_id=32d4815c-d6d5-4083-811a-1d9d82cd3437&amp;page_id=108203591455951&amp;request_time=1653989000305&amp;sdk=joey"><span style="vertical-align: bottom; width: 1000px; height: 0px;"><iframe name="f39ea071c7f9c88" width="1000px" height="1000px" data-testid="dialog_iframe" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customerchat.php?app_id=&amp;attribution=biz_inbox&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df17364cd1f802bc%26domain%3Dswio.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fswio.vn%252Ff39e2cc02a41fe8%26relation%3Dparent.parent&amp;container_width=1519&amp;current_url=https%3A%2F%2Fswio.vn%2F&amp;is_loaded_by_facade=true&amp;local_state=%7B%22v%22%3A1%2C%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%7D&amp;locale=vi_VN&amp;log_id=32d4815c-d6d5-4083-811a-1d9d82cd3437&amp;page_id=108203591455951&amp;request_time=1653989000304&amp;sdk=joey" style="padding: 0px; position: fixed; z-index: 2147483646; border-radius: 16px; top: auto; background: none; width: 399px; bottom: 160px; max-height: 0px; right: 16px; visibility: visible;" class=""></iframe></span></div><div class="fb_dialog  fb_dialog_advanced" alignment="right" desktop_bottom_spacing="100"><div class="fb_dialog_content"><iframe name="blank_f39ea071c7f9c88" width="60px" tabindex="-1" data-testid="bubble_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="background: none; border-radius: 60px; bottom: 100px; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px; display: block; height: 60px; margin: 0px 12px; overflow: visible; padding: 0px; position: fixed; right: 12px; top: auto; width: 60px; z-index: 2147483644;"></iframe><iframe name="availabilityStatus_f39ea071c7f9c88" tabindex="-1" data-testid="availabilityStatus_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="border-radius: 50%; bottom: 97.5px; height: 15px; position: fixed; right: 24px; width: 15px; z-index: 2147483646;"></iframe><iframe name="unread_f39ea071c7f9c88" tabindex="-1" data-testid="unread_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="background: none; border-radius: 4pt; bottom: 144px; height: 24px; position: fixed; right: 22px; width: 20px; z-index: 2147483645;"></iframe><iframe name="greeting_f39ea071c7f9c88" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="border: none;"></iframe></div></div></div> <!-- Your Plugin chat code -->--}}


</body>
</html>
