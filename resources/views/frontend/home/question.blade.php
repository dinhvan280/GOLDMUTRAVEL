@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Câu hỏi thường gặp</div>
            </div>
        </div>
    </div>
    <div class="support-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    @include('frontend.template.menu_left')
                </div>
                <div class="col-12 col-lg-9">
                    <div class="support-page-content history">
                        <ul id="accordion" class="accordion">
                            <li>
                                <div class="link">Trẻ em có chịu tiền vé không?<i class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Trẻ em dưới 4 tuổi và cao dưới 1m được miễn phí vé
                                        với điều kiện trẻ ngồi chung chỗ với người thân. Các trường hợp khác, Quý khách
                                        vui lòng mua vé riêng cho trẻ.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Tôi có thể thay đổi nơi lên xuống xe được không?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Quý khách chỉ có thể thay đổi thông tin nơi lên
                                        xuống xe trong quá trình đặt vé. Sau khi đã thanh toán thành công quý khách
                                        không thể thay đổi thông tin này.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Tôi phải xuất trình gì với nhà xe để lên xe?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">- Vé:</p>
                                    <p style="text-align: justify;">Đa số các nhà xe đều chấp nhận khi bạn có thể xuất
                                        trình email có thông tin về vé khi chuẩn bị lên xe. Trong trường hợp nhà xe
                                        không chấp nhận các định dạng vé điện tử (thông tin chi tiết các hãng xe này có
                                        trong phần đặt vé của KIMLONGTRAVEL), bạn vui lòng đổi vé của các hãng xe này để lên
                                        xe.</p>
                                    <p style="text-align: justify;">- Giấy tờ tuỳ thân:</p>
                                    <p style="text-align: justify;">Bạn cũng cần mang theo giấy tờ tuỳ thân có hình ảnh
                                        (CMND, giấy phép lái xe, hộ chiếu,…) trong một số trường hợp cần thiết.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Nếu do thiên tai mà chuyến xe không chạy thì tôi có được hoàn tiền hay
                                    không?<i class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Mỗi nhà xe có chính sách khác nhau, nhưng thông
                                        thường nhà xe sẽ hoàn tiền hoặc bảo lưu vé cho hành khách. Theo điều khoản sử
                                        dụng, "Trường hợp xảy ra các sự kiện bất khả kháng, bao gồm nhưng không giới hạn
                                        bởi thiên tai, hỏa hoạn, biến động xã hội, các quyết định của cơ quan chức năng
                                        thì KIMLONGTRAVEL không phải chịu trách nhiệm liên đới." Tuy nhiên, KIMLONGTRAVEL sẽ phối hợp với
                                        nhà xe để giải quyết cho khách ổn thỏa nhất có thể. Quý khách vui lòng liên hệ
                                        Tổng đài KIMLONGTRAVEL 1900636750 để được hỗ trợ.&nbsp;</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Tôi không lên được xe, tôi có được hoàn tiền hay không?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">KIMLONGTRAVEL cam kết hoàn tiền cho quý khách nếu có lỗi xảy
                                        ra từ phía nhà xe cung cấp dịch vụ hoặc do sai sót từ phía KIMLONGTRAVEL. Trong trường
                                        hợp nếu quý khách lỡ chuyến xe vì bất cứ lý do nào khác, KIMLONGTRAVEL sẽ không cam kết
                                        hoàn tiền cho quý khách.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">KIMLONGTRAVEL hoàn tiền trong bao lâu sau khi tôi đã huỷ vé?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Trong hầu hết trường hợp (trừ các trường hợp chẳng
                                        hạn như tiền hoàn vé được sử dụng để mua vé khác tại KIMLONGTRAVEL.vn), KIMLONGTRAVEL sẽ tiến hành
                                        thực hiện thủ tục hoàn tiền ngay khi phát sinh xử lý hoàn tiền cho Người mua,
                                        tuy nhiên tùy vào ngân hàng hoặc phương thức thanh toán người mua đã sử dụng mà
                                        thời gian tiền vào tài khoản của quý khách sẽ khác nhau. Vì vậy, trong trường
                                        hợp số tiền hoàn trả không được ghi có vào tài khoản của Quý khách trong vòng 14
                                        ngày làm việc, hãy gửi email đến cs@spuren.vn hoặc Tổng đài 1900636750 và cung
                                        cấp thông tin mã vé hủy. Chúng tôi sẽ cung cấp cho Quý khách sự hỗ trợ cần thiết
                                        để giúp Quý khách sớm nhận số tiền được hoàn trả.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Nếu quá thời hạn thanh toán thì tôi nên làm gì?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Nếu quá thời hạn thanh toán vé, Quý khách vui lòng
                                        tìm lại chuyến muốn đi và đặt vé lại từ đầu.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Nếu tôi đã thanh toán thành công tôi phải làm gì tiếp theo?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Sau khi khách hàng thanh toán thành công, KIMLONGTRAVEL sẽ
                                        cung cấp thông tin vé đã đặt qua Email đã đăng kí cho quý khách. Email xác nhận
                                        thanh toán thành công, về bản chất, không phải là vé. Để chắc chắn, Quý khách
                                        cần đến quầy vé để check in lấy vé và được hướng dẫn ra xe. Trường hợp đón dọc
                                        đường có thể dùng email xác nhận để check in lên xe.&nbsp;<br>Nếu nhà xe không
                                        chấp nhận email xác nhận thanh toán khi khách hàng xuất trình tại quầy vé hoặc
                                        lúc lên xe, Quý khách vui lòng liên hệ đến KIMLONGTRAVEL qua số Tổng Đài: 1900 636 750 để
                                        được hỗ trợ kịp thời. Nhà xe sẽ kiểm tra thông tin khách hàng bằng 2 thông tin:
                                        Mã lên xe và Số điện thoại.<br>• &nbsp; &nbsp;Trong trường hợp Quý khách chọn
                                        điểm đi tại văn phòng nhà xe, vui lòng có mặt trước 30 phút so với giờ khởi hành
                                        tại văn phòng/quầy vé/ Bến xe xuất trình Email vé để làm thủ tục lên xe.<br>•
                                        &nbsp; &nbsp;Trường hợp Quý khách đăng ký trung chuyển, vui lòng chuẩn bị trước
                                        30 phút so với giờ dự kiến đón và giữ điện thoại bên mình. Tài xế sẽ liên hệ với
                                        Quý khách để trung chuyển về điểm xuất phát.<br>• &nbsp; &nbsp;Nếu Quý khách yêu
                                        cầu đón tại những điểm dọc đường, nhà xe liên hệ hẹn giờ đón trước giờ khởi hành
                                        hoặc khi xe gần đến. Quý khách vui lòng chú ý điện thoại và chuẩn bị có mặt ở
                                        điểm đón trước giờ dự kiến khoảng 30 phút.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Làm thế nào để tôi xuất hoá đơn tại KIMLONGTRAVEL?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Trong ngành xe khách vé giấy được xem tương đương
                                        với hoá đơn và Quý khách có thể lấy vé giấy về thanh toán lại với công ty. Sau
                                        khi đặt vé thành công, Quý khách gọi đến Tổng đài của KIMLONGTRAVEL để báo trước việc
                                        xuất hóa đơn. Khi khách check in ở quầy vé/ lên xe đối với khách đón dọc đường
                                        nhân viên sẽ đưa vé giấy cho khách. Trong trường hợp nhà xe không hỗ trợ xuất vé
                                        giấy, quý khách cũng vui lòng liên hệ đến Tổng đài của KIMLONGTRAVEL để được hỗ trợ.
                                        Hotline tổng đài KIMLONGTRAVEL là 1900 636 750.&nbsp;</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Tôi có thể thanh toán khi nhận hàng không?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Hiện tại KIMLONGTRAVEL chưa hỗ trợ khách hàng việc thanh toán
                                        khi nhận hàng. Mong Quý khách thông cảm.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Làm thế nào để tôi thanh toán lại?<i class="fa fa-angle-down"></i>
                                </div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Sau khi nhấn nút “Thanh toán” trên màn hình thanh
                                        toán, KIMLONGTRAVEL sẽ gửi đến hộp thư mà Quý khách đã đăng ký lúc đặt vé một email chứa
                                        đường link thanh toán kèm theo thời gian thanh toán hiệu lực. Nếu thanh toán lần
                                        đầu gặp thất bại, Quý khách có thể sử dụng link này để thanh toán lại miễn sao
                                        chưa hết thời gian thanh toán hiệu lực.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Cách thanh toán vé trên KIMLONGTRAVEL?<i class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Hiện tại KIMLONGTRAVEL cho phép khách hàng thanh toán trực
                                        tuyến bằng thẻ nội địa và thẻ quốc tế. Để thanh toán, quý khách nhấp chọn vào
                                        loại thẻ muốn sử dụng để thanh toán vé, hệ thống sẽ chuyển quý khách đến trang
                                        thanh toán của ví điện tử tương ứng để tiến hành thanh toán vé.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Nếu tôi làm mất thông tin vé đã đặt, tôi nên làm gì?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Trong trường hợp quý khách làm mất email có mã đặt
                                        chỗ, vui lòng gọi đến tổng đài 1900636750 để được hướng dẫn cụ thể.&nbsp;</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Tôi không nhận được thông tin vé sau khi đã thanh toán thành công, tôi
                                    phải làm thế nào? <i class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Trong trường hợp không nhận được email xác nhận đặt
                                        vé thành công từ KIMLONGTRAVEL, quý khách vui lòng gọi đến tổng đài 1900636750 để kiểm
                                        tra thông tin email đăng ký và yêu cầu gửi lại email xác nhận.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Tôi có thể liên hệ đặt chỗ qua điện thoại được không?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Chúng tôi vẫn có thể tiếp nhận đặt chỗ qua điện
                                        thoại, tuy nhiên Quý khách cần phải cung cấp thông tin thẻ ngân hàng cho tổng
                                        đài viên. Chúng tôi biết rằng điều này sẽ mang lại nhiều rủi ro nên Quý khách
                                        cần cân nhắc kĩ lưỡng trước khi lựa chọn hình thức đặt vé qua điện thoại. Chúng
                                        tôi hoàn toàn không chịu trách nhiệm đối với mọi thiệt hại phát sinh do việc
                                        cung cấp thông tin thẻ này.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Tôi nhập sai thông tin (email, số điện thoại) trên vé, tôi phải làm
                                    thế nào?<i class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Trong trường hợp nhập sai email hoặc số điện thoại
                                        trong quá trình đặt vé online, quý khách có thể liên hệ tổng đài 1900636750 để
                                        được hỗ trợ cập nhật lại thông tin trên vé.</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Vì sao tôi không thể chọn chỗ ngồi trên 1 số chuyến xe?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Một số chuyến chưa hỗ trợ chọn vị trí ghế ngồi trên
                                        xe. Trong trường hợp này, KIMLONGTRAVEL sẽ hỗ trợ khách hàng thông báo số lượng vé với
                                        nhà xe. Vị trí ghế ngồi cụ thể sẽ phụ thuộc vào sự sắp xếp của phía nhà xe. Mong
                                        Quý khách thông cảm cho sự bất tiện này. Nếu cần hỗ trợ, Quý khách có thể gọi
                                        trực tiếp tổng đài 1900636750 để được cung cấp thông tin chi tiết. &nbsp;</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">Làm cách nào để tôi đăng ký tài khoản trên website KIMLONGTRAVEL?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Khách hàng có thể dễ dàng đăng ký tài khoản trên
                                        website KIMLONGTRAVEL thông qua 3 bước như sau:&nbsp;</p>
                                    <p style="text-align: justify;"><strong>Bước 1:</strong> Click vào icon như bên dưới
                                        để mở form đăng ký đăng nhập:&nbsp;</p>
                                    <p style="text-align: justify;"><span
                                            data-ccp-props="{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}"><img
                                                src="https://lh3.googleusercontent.com/ajIoxqJ4C-gb-z9XXKzXjO_a7SDsAcFLBH-gtdkLblU87r-8JP8VD4Q4q-whjt_q-Q_9y5LbCZLV9cWA-AgJXRXzgIx79BxESnny47AzzBQiEJiyrV3KPpgsZJpYOSDiHpl2uUQmcQ=w2400"
                                                alt="" width="500" height="68"></span></p>
                                    <p style="text-align: justify;"><strong>Bước 2:</strong> Click vào link đăng ký ở mở
                                        form đăng ký tài khoản&nbsp;</p>
                                    <p style="text-align: justify;"><span
                                            data-ccp-props="{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}"><span
                                                class="EOP SCXW70073277 BCX0"
                                                data-ccp-props="{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}"><img
                                                    src="https://lh3.googleusercontent.com/7A-QnuK_HsNWAiYslu2RaNtO8jzDeuUoDYaYIMK6VvO7ZV3SJ5upa0HNNB7s4DEVnmNzi3zMyv3RRz9jNMagaLvJ1CAX6eOC0mJltOTzJE5qgycaQCRhwueLXXwmT2JkR9xzSefCsA=w2400"
                                                    alt="" width="500" height="477"><br></span></span></p>
                                    <p style="text-align: justify;"><strong>Bước 3:</strong> Điền thông tin cần thiết
                                        vào form đăng ký để tạo tài khoản trên hệ thống của KIMLONGTRAVEL</p>
                                    <p style="text-align: justify;"><img
                                            src="https://lh3.googleusercontent.com/azennJJgRmhnCbdlU9hwkPG1Ct-0aXxGahjthpi0rAN_OsKf2r0a1vgl4FLcnJdamQmL5UCjEOXc1TzHzS6KATkj3jEXloW8LT7ppqAlUKB-q1NLSiYm0ve81Ou0JpB0MYbb7gGndA=w2400"
                                            alt="" width="500" height="528"></p>
                                    <p style="text-align: justify;">Sau khi đăng ký tài khoản thành công, Quý khách sẽ
                                        nhận được 1 email thông báo tài khoản đã được tạo thành công.&nbsp;</p>

                                </div>
                            </li>
                            <li>
                                <div class="link">KIMLONGTRAVEL có xác nhận đơn hàng với tôi không?<i
                                        class="fa fa-angle-down"></i></div>
                                <div class="submenu wysiwyg">


                                    <p style="text-align: justify;">Sau khi thanh toán, KIMLONGTRAVEL sẽ cung cấp email xác nhận
                                        thanh toán thành công cho Quý khách. Email xác nhận thanh toán thành công, về
                                        bản chất, không phải là vé. Để chắc chắn, Quý khách cần đến quầy vé để check-in
                                        lấy vé và được hướng dẫn ra xe. Trường hợp đón dọc đường có thể dùng email xác
                                        nhận để check-in lên xe. &nbsp;</p>
                                    <p style="text-align: justify;">Nếu nhà xe không chấp nhận email xác nhận thanh toán
                                        khi khách hàng xuất trình tại quầy vé hoặc lúc lên xe, Quý khách vui lòng liên
                                        hệ đến KIMLONGTRAVEL qua số Tổng Đài: 1900 636 750 để được hỗ trợ kịp thời. Nhà xe sẽ
                                        kiểm tra thông tin khách hàng bằng 2 thông tin: Mã lên xe và Số điện thoại.
                                        &nbsp;</p>
                                    <p style="text-align: justify;">- Trong trường hợp Quý khách chọn điểm đi tại văn
                                        phòng nhà xe, vui lòng có mặt trước 30 phút so với giờ khởi hành tại văn
                                        phòng/quầy vé/ Bến xe xuất trình Email vé để làm thủ tục lên xe.&nbsp;</p>
                                    <p style="text-align: justify;">- Trường hợp Quý khách đăng ký trung chuyển, vui
                                        lòng chuẩn bị trước 30 phút so với giờ dự kiến đón và giữ điện thoại bên mình.
                                        Tài xế sẽ liên hệ với Quý khách để trung chuyển về điểm xuất phát.&nbsp;</p>
                                    <p style="text-align: justify;">- Nếu Quý khách yêu cầu đón tại những điểm dọc
                                        đường, nhà xe liên hệ hẹn giờ đón trước giờ khởi hành hoặc khi xe gần đến. Quý
                                        khách vui lòng chú ý điện thoại và chuẩn bị có mặt ở điểm đón trước giờ dự kiến
                                        khoảng 30 phút.&nbsp;</p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
