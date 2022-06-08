@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Chính sách bảo mật thông tin cá nhân</div>
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
                    <div class="support-page-content history wysiwyg"><h2
                            style="text-align: justify; color: #ff7d00; margin: 0 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 1. SỰ CHẤP THUẬN&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">Sau khi khách hàng đồng ý, thông tin của khách hàng sẽ được thu
                            thập bởi CÔNG TY TNHH DỊCH VỤ THƯƠNG MẠI KIM LONG (“Chúng tôi”, “KIMLONG”), và được sử dụng như quy định tại Chính
                            sách Bảo mật thông tin cá nhân của người tiêu dùng (“Chính sách này”). Tuy nhiên, khi khách
                            hàng không đồng ý, khách hàng có thể dừng sử dụng dịch vụ và dừng việc cung cấp thông tin
                            bất cứ lúc nào.&nbsp;</p>
                        <p style="text-align: justify;">Chúng tôi sẽ bảo lưu quyền sửa đổi, bổ sung nhằm hoàn thiện đối
                            với Chính sách này. Chúng tôi khuyến khích khách hàng thường xuyên xem lại Chính sách Bảo
                            mật thông tin cá nhân trên KIMLONGTRAVEL.COM. &nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 2. MỤC ĐÍCH THU THẬP THÔNG TIN&nbsp;</span></strong>
                        </h2>
                        <h3 style="text-align: justify; margin: 0 0 15px 0;"><span style="font-size: 12pt;">THÔNG TIN IP (INTERNET PROTOCOL – GIAO THỨC LIÊN MẠNG)&nbsp;</span>
                        </h3>
                        <p style="text-align: justify;">Chúng tôi có thể thu thập và xử lý "Thông tin IP" từ bạn.
                            &nbsp;</p>
                        <p style="text-align: justify;">Khi bạn đang truy cập vào KIMLONGTRAVEL.COM từ một thiết bị điện tử, chúng
                            tôi có thể thu thập dữ liệu nhất định liên quan đến việc truy cập mạng, chẳng hạn như địa
                            chỉ IP, loại trình duyệt và hệ điều hành, URL và các trang web bạn truy cập trong miền web
                            của chúng tôi.&nbsp;</p>
                        <p style="text-align: justify;">Thông tin IP không thu thập để xác định cá nhân cụ thể nào.
                            Chúng tôi sử dụng dữ liệu đó chỉ dành cho các mục đích của quản trị hệ thống máy chủ, phân
                            tích số liệu thống kê và các xu hướng, và để đảm bảo rằng nội dung của trang web này được
                            trình bày trong các định dạng hiệu quả nhất trên thiết bị điện tử của bạn, dù đó là một máy
                            tính hoặc điện thoại di động.&nbsp;</p>
                        <p style="text-align: justify;">Chúng tôi cũng có thể thu thập dữ liệu về vị trí địa lý từ nơi
                            bạn truy cập KIMLONGTRAVEL.COM, chẳng hạn như quốc gia và khu vực. Chúng tôi sử dụng dữ liệu này dành
                            cho mục đích thống kê và để đảm bảo rằng nội dung của trang web này được trình bày bằng ngôn
                            ngữ thích hợp.&nbsp;</p>
                        <h3 style="text-align: justify; margin: 15px 0 15px 0;"><span style="font-size: 12pt;">THÔNG TIN CÁ NHÂN&nbsp;</span>
                        </h3>
                        <p style="text-align: justify;">- KIMLONGTRAVEL.COM thu thập thông tin khi khách hàng trực tiếp cung cấp
                            cho chúng tôi &nbsp;</p>
                        <p style="text-align: justify;">+ Khi bạn đăng ký và cập nhật tài khoản, chúng tôi thu thập:
                            <strong>Họ và tên - Địa chỉ thư điện tử (email) - Số điện thoại</strong> với mục đích để tạo
                            và duy trì tài khoản của khách hàng;&nbsp;</p>
                        <p style="text-align: justify;">+ Khi bạn đặt vé và sử dụng dịch vụ, chúng tôi thu thập:
                            <strong>Họ và tên - Địa chỉ thư điện tử (email) - Số điện thoại - Phương thức thanh
                                toán</strong> với mục đích để xử lý các vấn đề liên quan đến đơn đặt hàng;&nbsp;</p>
                        <p style="text-align: justify;">+ Khi bạn liên hệ với chúng tôi thông qua mục "Liên hệ", chúng
                            tôi thu thập: <strong>Họ và tên - Địa chỉ thư điện tử (email) - Số điện thoại</strong>.
                            Chúng tôi sử dụng dữ liệu này chỉ để lưu trữ hồ sơ về sự tương tác giữa bạn và chúng tôi.
                            Truy vấn hoặc nhận xét của bạn sẽ được chuyển tiếp tới Chăm sóc khách hàng và chúng tôi sẽ
                            hồi đáp qua địa chỉ email của bạn.&nbsp;</p>
                        <p style="text-align: justify;">- Ngoài ra việc thu thập còn vì các mục đích ngăn ngừa các hoạt
                            động phá hủy tài khoản người dùng của khách hàng hoặc các hoạt động giả mạo khách hàng.&nbsp;</p>
                        <p style="text-align: justify;">- Chúng tôi cũng có thể lưu trữ thông tin của bạn trong hệ dữ
                            liệu của mình khi chúng tôi xét thấy điều này cần thiết cho hoạt động tiếp thị và cung cấp
                            cho bạn thông tin về sản phẩm, dịch vụ, ưu đãi và chương trình khuyến mãi mà bạn yêu cầu
                            hoặc chúng tôi cho rằng những thông tin này sẽ hữu ích cho bạn. <strong>Theo đó, bạn có
                                quyền yêu cầu chúng tôi không sử dụng dữ liệu của bạn cho mục đích tiếp thị và hủy đăng
                                ký từ danh sách gửi thư của chúng tôi bất cứ lúc nào.&nbsp;</strong></p>
                        <h3 style="text-align: justify; margin: 15px 0 15px 0;"><span style="font-size: 12pt;">COOKIES&nbsp;</span>
                        </h3>
                        <p style="text-align: justify;">Chúng tôi sử dụng cookie để cải thiện dịch vụ dựa vào thói quen
                            duyệt web của bạn và để điều chỉnh các nội dung của trang web này theo sở thích của bạn.&nbsp;</p>
                        <p style="text-align: justify;">Cookie là một phần của thông tin được gửi bởi máy chủ của chúng
                            tôi và lưu trữ bởi trình duyệt web của bạn. Mỗi lần bạn truy cập KIMLONGTRAVEL.COM, các thông tin sau
                            đó được gửi lại cho máy chủ của chúng tôi. Điều này cho phép máy chủ của chúng tôi xác định
                            truy cập và thiết lập sở thích của bạn, nhưng cookie không thể liên kết với bất kỳ thông tin
                            cá nhân nào về bạn. Cookies theo phiên sẽ tự động bị xóa khỏi thiết bị điện tử của bạn khi
                            bạn đóng các trình duyệt web. Cookie đã lưu trữ sẽ được giữ cho đến khi nó được xóa thủ
                            công, hoặc bị quá hạn.&nbsp;</p>
                        <p style="text-align: justify;">Chúng tôi cũng sử dụng Google Analytics để phân tích việc bạn sử
                            dụng trang web của chúng tôi. Google Analytics thống kê thông tin sử dụng trang web bằng các
                            phương tiện của các tập tin cookie đã được lưu trữ trên thiết bị điện tử của bạn. Các thông
                            tin được tạo ra là vô danh và được sử dụng để tạo ra các báo cáo về việc truy cập và sử dụng
                            của trang web. Google lưu trữ những thông tin này và sử dụng theo Chính sách bảo mật được
                            đăng tải tại http://www.google.com/privacypolicy.html. Việc tiếp tục sử dụng trang web này
                            đồng nghĩa với việc bạn chấp nhận chính sách cookie của chúng tôi. Nếu bạn không muốn chấp
                            nhận cookie của chúng tôi, bạn có thể cài đặt trình duyệt web của bạn để từ chối chúng. Tuy
                            nhiên, xin lưu ý rằng việc vô hiệu hóa các cookie có thể ngăn cản bạn truy cập vào một số
                            tính năng của trang web này. Do đó chúng tôi khuyên bạn nên cho phép việc sử dụng cookie.&nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 3. PHẠM VI SỬ DỤNG&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. Thông Tin Ip (Internet Protocol – Giao Thức Liên Mạng),
                            Cookies: sử dụng nội bộ với múc đích tối ưu và phát triển hệ thống.&nbsp;</p>
                        <p style="text-align: justify;">2. Thông tin cá nhân: &nbsp;</p>
                        <p style="text-align: justify;">Bất kỳ thông tin nhận dạng cá nhân nào bạn cung cấp trong khi
                            đặt vé đều được bảo mật. Thông tin chỉ được tiết lộ cho các nhà cung cấp, điều hành hãng xe
                            có liên quan. Chúng tôi sẽ không tiết lộ, bán, chia sẻ hoặc để lộ thông tin của bạn cho một
                            bên thứ ba khác.&nbsp;</p>
                        <p style="text-align: justify;">Chúng tôi sử dụng những thông tin này để tiến hành đặt chỗ. Bằng
                            cách chuyển dữ liệu đến đối tác – đại lý của chúng tôi như Vexere, … để đặt chỗ với các Hãng
                            vận tải hành khách. Sau khi nhận được thông tin xác nhận, chúng tôi sẽ gửi xác nhận Đặt chỗ
                            cho bạn qua thư điện tử. Chúng tôi có nghĩa vụ thu thập, quản lý và lưu trữ các dữ liệu phù
                            hợp với các điều khoản có liên quan đến Điều khoản sử dụng và Chính sách bảo mật của đối tác
                            – đại lý. &nbsp;</p>
                        <p style="text-align: justify;">Ngoài ra, Thông tin sẽ được gửi đến Cổng thanh toán như VNPay
                            nếu khách hàng thực hiện thanh toán qua Cổng thanh toán, Cổng thanh toán giúp khách hàng
                            thanh toán bằng những thông tin này. &nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 4. QUẢN LÍ THÔNG TIN CÁ NHÂN&nbsp;</span></strong>
                        </h2>
                        <p style="text-align: justify;">Khách hàng có quyền cung cấp thông tin cá nhân cho chúng tôi và
                            có thể thay đổi quyết định đó vào bất cứ lúc nào.&nbsp;</p>
                        <p style="text-align: justify;">Khách hàng có quyền tự kiểm tra, cập nhật, điều chỉnh các thông
                            tin cá nhân của mình bằng cách đăng nhập vào tài khoản (Mục Quản lí tài khoản của Tôi) để
                            chỉnh sửa thông tin cá nhân của mình hoặc yêu cầu chúng tôi thực hiện việc này hoặc yêu cầu
                            chúng tôi loại bỏ thông tin của bạn ra khỏi cơ sở dữ liệu của chúng tôi.&nbsp;</p>
                        <p style="text-align: justify;">Khách hàng có thể thực hiện các quyền của bạn bất cứ lúc nào
                            bằng cách liên hệ với chúng tôi, bạn có chỉ cần gửi yêu cầu bằng văn bản theo địa chỉ liên
                            hệ tại mục Thông tin liên hệ. KIMLONGTRAVEL.COM sẽ tiếp nhận thông tin, xác định danh tính và hỗ trợ
                            giải quyết yêu cầu của khách hàng.&nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 5. THỜI GIAN LƯU TRỮ THÔNG TIN&nbsp;</span></strong>
                        </h2>
                        <p style="text-align: justify;">Tất cả thông tin cá nhân của khách hàng sẽ được lưu trữ cho đến
                            khi khách hàng yêu cầu hủy bỏ. Bên cạnh đó, trong thời gian lưu trữ thông tin, tất cả thông
                            tin cá nhân mà khách hàng cung cấp sẽ được bảo mật có mã hóa trên máy chủ của
                            KIMLONGTRAVEL.COM.&nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 6. NHỮNG NGƯỜI HOẶC TỔ CHỨC CÓ THỂ ĐƯỢC TIẾP CẬN VỚI THÔNG TIN&nbsp;</span></strong>
                        </h2>
                        <h3 style="text-align: justify; margin: 0 0 15px 0;"><span style="font-size: 12pt;">6.1. Trường hợp có thể cung cấp thông tin&nbsp;</span>
                        </h3>
                        <p style="text-align: justify;">KIMLONGTRAVEL.COM sẽ không tiết lộ thông tin cho các bên thứ ba khi
                            chưa có sự đồng ý của khách hàng. Tuy nhiên, chúng tôi có thể tiết lộ thông tin
                            của khách hàng cho các pháp nhân trong trường hợp:&nbsp;</p>
                        <p style="text-align: justify;">+ Những thông tin (tên, số điện thoại và email) là công
                            khai để Đối tác – Đại lý của chúng tôi đặt chỗ, các hãng vận tải có thể liên hệ với bạn,
                            các Cổng thanh toán giúp khách hàng thanh toán. Những pháp nhân này bị hạn chế khả
                            năng sử dụng thông tin của khách hàng trong phạm vi dịch vụ cung cấp.&nbsp;</p>
                        <p style="text-align: justify;">+ Chúng tôi cũng có thể chia sẻ thông tin với đối tác
                            kinh doanh tin cậy, kể cả các nhà mạng di động. Những pháp nhân này có thể sử
                            dụng thông tin của khách hàng để cung cấp các dịch vụ mà khách hàng yêu cầu. Hoặc
                            nếu đối tác có nhu cầu thì chúng tôi có thể cung cấp cho đối tác tài liệu khuyến mại,
                            quảng cáo và các tài liệu khác.&nbsp;</p>
                        <h3 style="text-align: justify; margin: 0 0 15px 0;"><span style="font-size: 12pt;">6.2. Trường hợp phải cung cấp thông tin&nbsp;</span>
                        </h3>
                        <p style="text-align: justify;">Trong trường hợp có sự yêu cầu của cơ quan pháp luật hoặc khi
                            cần thiết để bảo vệ Dịch vụ của chúng tôi, chúng tôi sẽ cung cấp thông tin trong trường hợp
                            sau:&nbsp;</p>
                        <p style="text-align: justify;">+ Để tuân thủ pháp luật hoặc đáp ứng quy trình pháp lý
                            bắt buộc (chẳng hạn như lệnh khám xét hoặc lệnh khác của tòa).&nbsp;</p>
                        <p style="text-align: justify;">+ Xác minh hoặc thi hành việc tuân thủ các chính sách điều
                            chỉnh dịch vụ của chúng tôi.&nbsp;</p>
                        <p style="text-align: justify;">+ Bảo vệ quyền và nghĩa vụ, tài sản hoặc sự an toàn của
                            khách hàng và các công ty liên kết, đối tác kinh doanh hay khách hàng của chúng tôi.&nbsp;</p>
                        <p style="text-align: justify;">+ Chúng tôi có thể tiết lộ thông tin cho các bên khác có
                            liên quan với giao dịch của công ty của khách hàng cho bên thứ ba nếu cơ quan chức năng có
                            yêu cầu. Ngoài ra, chúng tôi có thể chia sẻ thông tin về khách hàng với các bên thứ
                            ba khi nhận được sự chấp thuận của khách hàng.&nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 7. AN TOÀN DỮ LIỆU&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">Chúng tôi luôn nỗ lực để giữ an toàn thông tin cá nhân của khách
                            hàng, chúng tôi đã và đang thực hiện nhiều biện pháp an toàn, bao gồm:&nbsp;</p>
                        <p style="text-align: justify;">1) &nbsp; &nbsp;Bảo đảm an toàn trong môi trường vận hành: chúng
                            tôi lưu trữ thông tin cá nhân khách hàng trong môi trường vận hành an toàn và chỉ có nhân
                            viên, đại diện và nhà cung cấp dịch vụ có thể truy cập trên cơ sở cần phải biết. Chúng tôi
                            tuân theo các tiêu chuẩn ngành, pháp luật trong việc bảo mật thông tin cá nhân khách hàng.&nbsp;</p>
                        <p style="text-align: justify;">2) &nbsp; &nbsp;Trong trường hợp máy chủ lưu trữ thông tin bị
                            hacker tấn công dẫn đến mất mát dữ liệu cá nhân khách hàng, chúng tôi sẽ có trách nhiệm
                            thông báo vụ việc cho cơ quan chức năng để điều tra xử lý kịp thời và thông báo cho khách
                            hàng được biết.&nbsp;</p>
                        <p style="text-align: justify;">3) &nbsp; &nbsp;Các thông tin thanh toán: được bảo mật theo tiêu
                            chuẩn ngành.&nbsp;</p>
                        <p style="text-align: justify;">Trong trường hợp bất khả kháng, trường hợp máy chủ lưu trữ bị
                            hacker tấn công dẫn đến mất mất dữ liệu cá nhân khách hàng. KIMLONGTRAVEL.COM sẽ thông báo cho cơ quan
                            chức năng để điều tra xử lý. Khi có kết quả sẽ thông báo cho khách hàng được biết.&nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 8. CƠ CHẾ TIẾP NHẬN VÀ GIẢI QUYẾT KHIẾU NẠI CỦA NGƯỜI DÙNG LIÊN QUAN ĐẾN VIỆC THÔNG TIN CÁ NHÂN BỊ SỬ DỤNG SAI MỤC ĐÍCH HOẶC SAI PHẠM VI&nbsp;</span></strong>
                        </h2>
                        <p style="text-align: justify;">Khi phát hiện thông tin cá nhân của mình bị sử dụng sai mục đích
                            hoặc phạm vi, khách hàng gửi khiếu nại đến Ban Quản trị KIMLONGTRAVEL.COM thông qua email <strong>cs@KIMLONG.vn</strong>
                            hoặc gọi điện thoại tới số <strong>1900636750</strong> (Phím số 2) để khiếu nại và cung cấp
                            chứng cứ liên quan tới vụ việc.&nbsp;</p>
                        <p style="text-align: justify;">Sau khi tiếp nhận thông tin khiếu nại, SWIO sẽ xác nhận lại
                            thông tin, có trách nhiệm giải quyết khiếu nại cho khách hàng. SWIO cam kết sẽ phản hồi ngay
                            lập tức hoặc muộn nhất là trong vòng 24 giờ làm việc kể từ thời điểm nhận được khiếu nại..&nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span
                                    style="font-size: 12pt;">ĐIỀU 9. THÔNG TIN LIÊN HỆ CỦA ĐƠN VỊ THU THẬP VÀ QUẢN LÝ THÔNG TIN CÁ NHÂN&nbsp;</span></strong>
                        </h2>
                        <p style="text-align: justify;">Thông tin liên hệ trực tiếp của chúng tôi:&nbsp;</p>
                        <p style="text-align: justify;">Công ty TNHH DỊCH VỤ THƯƠNG MẠI KIM LONG [KIMLONGTRAVEL.COM] – Xóm 9, Hải Vân, Hải Hậu, Nam Định</p>
                        <p style="text-align: justify;">Hotline: 1900 20 53                   – Email: kimlongtravel102@gmail.com&nbsp;</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><span
                                style="font-size: 12pt;"><strong>ĐIỀU 10. CAM KẾT BẢO MẬT THÔNG TIN CÁ NHÂN KHÁCH HÀNG&nbsp;</strong></span>
                        </h2>
                        <p style="text-align: justify;">KIMLONGTRAVEL.COM trân trọng quan hệ với khách hàng và người dùng. Chúng
                            tôi nỗ lực đảm bảo cung cấp thông tin có trách nhiệm và hệ thống hoạt động chính xác.
                            KIMLONGTRAVEL.COM muốn tạo sự riêng tư và thoải mái cho khách hàng khi truy cập sàn thương mại điện tử
                            của chúng tôi. KIMLONGTRAVEL.COM mong muốn mang lại cảm giác an toàn cho khách hàng khi sử dụng dịch
                            vụ mua vé xe online. Chúng tôi cam kết bảo vệ tất cả thông tin mà chúng tôi nhận được từ
                            khách hàng. Để ngăn chặn truy cập trái phép, đảm bảo sử dụng đúng thông tin, chúng tôi sẽ sử
                            dụng các phương pháp và công nghệ bảo mật Internet hợp lý.&nbsp;</p>
                        <p style="text-align: justify;">Bất kỳ thông tin nhận dạng cá nhân nào bạn cung cấp trong khi
                            đặt vé đều được bảo mật. Thông tin chỉ được tiết lộ cho các nhà cung cấp, điều hành hãng xe
                            có liên quan. Chúng tôi sẽ không tiết lộ, bán, chia sẻ hoặc để lộ thông tin của bạn cho một
                            bên thứ ba khác, sử dụng thông tin đúng phạm vi và mục đích.&nbsp;</p>
                        <p style="text-align: justify;">KIMLONGTRAVEL.COM mong muốn mang lại cảm giác an toàn cho bạn khi sử dụng
                            dịch vụ mua vé xe online. Chúng tôi cam kết bảo vệ tất cả thông tin mà chúng tôi nhận được
                            từ bạn. Để ngăn chặn truy cập trái phép, đảm bảo sử dụng đúng thông tin, chúng tôi sẽ sử
                            dụng các phương pháp và công nghệ bảo mật Internet hợp lý.&nbsp;</p>
                        <p style="text-align: justify;">Trong trường hợp có bất cứ sự cố nào phát sinh trong quá trình
                            sử dụng dịch vụ như nhà xe hủy chuyến, nhà xe không có thông tin khách,… KIMLONGTRAVEL.COM sẽ cố gắng
                            hỗ trợ khách hàng tìm dịch vụ thay thế tùy thuộc vào các lựa chọn sẵn có. Trong trường hợp
                            không có dịch vụ thay thế nào, KIMLONGTRAVEL.COM cam kết sẽ có chính sách bồi hoàn thỏa đáng, và sẽ
                            được điều chỉnh theo từng trường hợp cụ thể.&nbsp;</p>
                        <p style="text-align: justify;">Chính sách bảo mật thông tin có thể thay đổi theo thời gian hoặc
                            tình hình thực tế. Chúng tôi có quyền sửa đổi chính sách bảo mật thông tin cá nhân bất cứ
                            lúc nào và không cần thông báo trước. Quy định này không phải là một hợp đồng có hiệu lực
                            pháp lý. Nhưng, KIMLONGTRAVEL.COM cam kết tuân theo quy định này để bảo vệ tất cả dữ liệu thông tin
                            của khách hàng.</p></div>
                </div>
            </div>
        </div>
    </div>
@stop
