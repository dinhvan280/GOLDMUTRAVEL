@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Quy chế hội viên</div>
            </div>
        </div>
    </div>
    <div class="support-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    @include('frontend.template.menu_left')
                </div>
                <div class="col-12 col-lg-9"><div class="support-page-content history wysiwyg"><h2 style="margin-bottom: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 1. ĐỊNH NGHĨA&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. <strong>“KIMLONGTRAVEL TICKETS”/ “NỀN TẢNG KIMLONGTRAVEL”/ “KIMLONGTRAVEL”/ “NỀN TẢNG”</strong> là nền tảng cung cấp dịch vụ đặt vé trực tuyến chính thức, được vận hành bởi <strong>CÔNG TY TNHH DỊCH VỤ THƯƠNG MẠI KIM LONG</strong> (Sau đây gọi tắt là <strong>“KIMLONG”</strong>), bao gồm (nhưng không giới hạn) ứng dụng di động App Store của Apple hoặc Cửa Hàng Google Play và các website thuộc sở hữu của <strong>KIMLONG</strong>.&nbsp;</p>
                        <p style="text-align: justify;">2. <strong>“DỊCH VỤ”</strong> được hiểu là bất kỳ dịch vụ được đăng tải trên <strong>KIMLONGTRAVEL </strong>để cung cấp cho Khách hàng/ Người Dùng.&nbsp;</p>
                        <p style="text-align: justify;">3. <strong>“NGƯỜI DÙNG”</strong> được hiểu là bất kỳ cá nhân đã đăng ký tài khoản hợp lệ trên <strong>KIMLONGTRAVEL</strong>.&nbsp;</p>
                        <p style="text-align: justify;">4.<strong> “KHÁCH HÀNG”</strong> có nghĩa là Người Dùng hoặc bất kỳ Cá nhân/ Tổ chức có truy cập vào nền tảng hoặc chưa truy cập nhưng có thể là khách hàng tiềm năng của <strong>KIMLONGTRAVEL</strong>.&nbsp;</p>
                        <p style="text-align: justify;">5. <strong>“CHƯƠNG TRÌNH KHÁCH HÀNG THÂN THIẾT KIMLONGTRAVEL-POINT”/ “CHƯƠNG TRÌNH KIMLONGTRAVEL-POINT”</strong> là chương trình khách hàng thân thiết dành cho <strong>Người dùng</strong> của <strong>KIMLONGTRAVEL</strong>, được vận hành bởi <strong>KIMLONG </strong>và/hoặc Bên cung ứng Thứ Ba (<strong>“ĐỐI TÁC CHƯƠNG TRÌNH KIMLONGTRAVEL-POINT”</strong>). Chương trình <strong>KIMLONGTRAVEL-POINT</strong> sẽ được thực hiện bằng các cách thức phù hợp theo quy định của pháp luật, như tích lũy điểm thưởng cho Người dùng tương ứng với mức độ chi tiêu của họ trên Nền tảng KIMLONGTRAVEL. &nbsp;</p>
                        <p style="text-align: justify;">6. <strong>“GIAO DỊCH THÀNH CÔNG”</strong> được hiểu là việc hoàn tất một giao dịch mua đối với dịch vụ được cung cấp trên <strong>KIMLONGTRAVEL </strong>theo Điều Khoản Dịch Vụ của <strong>KIMLONG</strong>:&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(a) Không phải là một người mua được tạo ra từ hệ thống hoặc phương tiện điện tử;&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(b) Không bị <strong>KIMLONG </strong>sau đó đánh giá là người dùng giao dịch với dụng ý không trung thực, không thỏa các điều kiện của Chương Trình.&nbsp;</p>
                        <p style="text-align: justify;">7. <strong>“ĐIỀU KHOẢN DỊCH VỤ”/ “ĐIỀU KHOẢN SỬ DỤNG”</strong> được hiểu là các điều khoản điều chỉnh việc sử dụng Nền Tảng, bao gồm nhưng không giới hạn ở các hướng dẫn hoặc quy chế được <strong>KIMLONG </strong>áp dụng hoặc cập nhật theo từng thời kỳ.&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 2. QUY ĐỊNH CHUNG&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. Bằng cách truy cập và/hoặc sử dụng Nền tảng <strong>KIMLONGTRAVEL</strong>, Khách hàng/ Người dùng thừa nhận rằng đã đọc, hiểu và đồng ý các Điều Khoản Sử Dụng và các điều khoản và điều kiện khác liên quan đến nền tảng, bao gồm nhưng không giới hạn ở trang Điều Khoản Sử Dụng chung, điều khoản bảo mật và các câu hỏi thường gặp, tất cả cấu thành Điều Khoản Sử Dụng của chương trình Điểm Thưởng (<strong>“ĐIỀU KHOẢN CHƯƠNG TRÌNH ĐIỂM THƯỞNG”</strong>) này. &nbsp;</p>
                        <p style="text-align: justify;">2. <strong>KIMLONG </strong>có thể thay đổi, sửa đổi, bổ sung và loại bỏ một phần hoặc toàn bộ các Điều Khoản Chương Trình Điểm Thưởng này, bao gồm luật lệ, quy định, quyền lợi, điều kiện tham gia, những phần này có thể có hoặc không ảnh hưởng đến giá trị của Điểm thưởng của <strong>KIMLONGTRAVEL-POINT</strong> (như được định nghĩa tại Điều 3 – Điểm thưởng của chương trình <strong>KIMLONGTRAVEL-POINT</strong>), vào bất cứ thời điểm nào mà không cần thông báo trước. Khách hàng/Người dùng cần phải đọc những Điều Khoản Chương Trình Điểm Thưởng này thường xuyên. &nbsp;</p>
                        <p style="text-align: justify;">3. Bằng việc tiếp tục sử dụng nền tảng <strong>KIMLONGTRAVEL </strong>và tham gia chương trình Tích Điểm sau khi đã có những thay đổi, Người dùng xác nhận đã đồng ý và chấp thuận với những thay đổi đó. Nếu Người dùng sử dụng bất kỳ dịch vụ nào khác của <strong>KIMLONG</strong>, việc sử dụng của Người dùng dựa trên sự chấp thuận và tuân thủ các điều khoản và điều kiện được áp dụng đối với các dịch vụ đó.&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 3. ĐIỂM THƯỞNG CỦA CHƯƠNG TRÌNH KIMLONGTRAVEL-POINT&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. Người dùng sử dụng dịch vụ trên nền tảng <strong>KIMLONGTRAVEL </strong>có thể tích lũy điểm thưởng (<strong>“KIMLONGTRAVEL-POINT”/ “ĐIỂM”</strong>) khi thực hiện giao dịch thành công.  &nbsp;</p>
                        <p style="text-align: justify;">2. Về nguyên tắc, <strong>KIMLONGTRAVEL-POINT</strong> sẽ được ghi nhận vào Tài Khoản của Người dùng vào lúc 00:00 của ngày tiếp theo sau ngày dịch vụ được diễn ra. Người dùng có thể kiểm tra điểm tại mục “Lịch sử tích điểm” trên nền tảng.&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;"><em>Ví dụ:</em> <em>Người dùng đặt vé Khởi hành từ Thành phố Hồ Chí Minh đi Đà Lạt vào lúc 09:00 ngày 02 tháng 03. <strong>KIMLONGTRAVEL-POINT</strong> sẽ được ghi nhận vào lúc 00:00 ngày 03 tháng 03.&nbsp;</em></p>
                        <p style="text-align: justify;">3. <strong>KIMLONGTRAVEL-POINT</strong> sẽ được tính theo một tỷ lệ nhất định tùy thuộc vào từng giao dịch của số tiền thanh toán Dịch vụ trên nền tảng. Phép tính này về cơ bản dựa trên số tiền thực tế Người dùng chi trả.&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;"><strong>1 VNĐ (Việt Nam đồng)</strong> được ghi nhận sẽ tương đương <strong>1 KIMLONGTRAVEL-POINT VNĐ&nbsp;</strong></p>
                        <p style="text-align: justify;">4. <strong>KIMLONGTRAVEL-POINT</strong> không có giá trị tiền tệ, không cấu thành tài sản của Người dùng và không thể được mua, bán, chuyển nhượng hoặc quy đổi thành tiền mặt.&nbsp;</p>
                        <p style="text-align: justify;">5. Nếu Người dùng tuân thủ với tất cả điều khoản và điều kiện này và đã tích lũy đủ Điểm theo yêu cầu, Người dùng có thể chọn và quy đổi <strong>KIMLONGTRAVEL-POINT</strong> thành Quà Tặng trên Nền tảng. &nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 4. QUY ĐỔI KIMLONGTRAVEL-POINT QUÀ TẶNG&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. Quà tặng sẽ được hiển thị trong mục “Ưu đãi của tôi” trên Nền tảng của người Dùng nếu Người Dùng thuộc đối tượng áp dụng của Chương trình Khuyến Mại. Việc đổi Quà Tặng tuân thủ theo các điều kiện, điều khoản cụ thể của chương trình <strong>KIMLONGTRAVEL-POINT</strong>. &nbsp;</p>
                        <p style="text-align: justify;">2. Quà Tặng được phép đổi trong thời hạn hiệu lực của Quà Tặng đó. &nbsp;</p>
                        <p style="text-align: justify;">3. Người dùng có thể đổi Quà Tặng bằng cách xuất trình Quà Tặng dưới dạng điện tử tại các Địa Điểm đổi Quà Tặng (được quy định tại Điều khoản Sử Dụng Quà Tặng của Đối Tác <strong>KIMLONGTRAVEL-POINT</strong>) để đổi lấy sản phẩm, sử dụng dịch vụ đó. Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> đồng ý không được áp dụng thêm bất cứ chi phí, điều kiện hoặc hạn chế bổ sung nào trái hoặc không phù hợp với các điều kiện được quy định tại điều khoản sử dụng Quà Tặng liên quan đến việc đổi Quà Tặng.&nbsp;</p>
                        <p style="text-align: justify;">4. Quà tặng không thể được bán lại, chuyển giao dưới bất cứ hình thức nào. Quà Tặng không tạo ra, hoặc được sử dụng như một công cụ thanh toán hoặc quy đổi ra giá trị tiền tệ. &nbsp;</p>
                        <p style="text-align: justify;">5. <strong>KIMLONG </strong>bảo lưu quyền vô hiệu, ngừng hoặc quyết định không đủ điều kiện đối với bất kỳ Người Dùng nào trong bất kỳ chương trình khuyến mãi hoặc đăng ký nào mà không cần thông báo trước cho Người Dùng đó trong trường hợp Người Dùng vi phạm bất kỳ nội dung nào trong các Điều Khoản Sử Dụng này.&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 5. ĐỔI, TRẢ, GIẢI QUYẾT KHIẾU NẠI&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. Việc đổi, hoàn trả sản phẩm, dịch vụ quy đổi từ Quà Tặng được thực hiện theo chính sách đổi, trả sản phẩm hiện hành của từng Đối Tác <strong>KIMLONGTRAVEL-POINT</strong>.&nbsp;</p>
                        <p style="text-align: justify;">2. Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> sẽ phải chịu hoàn toàn trách nhiệm đối với bất kỳ khiếu nại nào của Người Dùng cũng như các vấn đề chăm sóc khách hàng phát sinh từ sản phẩm, dịch vụ quy đổi từ Quà Tặng, bao gồm bất kỳ vấn đề nào liên quan đến việc sử dụng Quà Tặng hoặc quá trình quy đổi hoặc việc xúc tiến thực hiện quy đổi của Người Dùng.&nbsp;</p>
                        <p style="text-align: justify;">3. Người Dùng có khiếu nại hoặc nhu cầu đổi, trả Quà Tặng, vui lòng liên hệ trực tiếp với Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> cung cấp Quà Tặng để được hỗ trợ giải quyết. Sau khi nhận được yêu cầu Đổi, trả, khiếu nại về Quà Tặng, đối tác <strong>KIMLONGTRAVEL-POINT</strong> phải nỗ lực giải quyết, phản hồi cho Người Dùng có yêu cầu theo đúng quy định, chính sách của mình. Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> có trách nhiệm thông báo kết quả xử lý khiếu nại của Người Dùng về Quà Tặng cho <strong>KIMLONG</strong>, ghi rõ lý do đổi trả, khiếu nại, hướng xử lý,... để hai bên lưu trữ thông tin và giải quyết các tranh chấp phát sinh sau này (nếu có). <strong>KIMLONG </strong>có thể liên hệ với Người Dùng có khiếu nại để kiểm tra thực tế trong trường hợp cần thiết. &nbsp;</p>
                        <p style="text-align: justify;">4. Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> phải chịu toàn bộ trách nhiệm về tổn thất gây ra cho Người Dùng sử dụng Quà Tặng của Đối Tác <strong>KIMLONGTRAVEL-POINT</strong>, khi chứng minh được lỗi do Đối Tác KIMLONGTRAVEL-POINT gây ra. &nbsp;</p>
                        <p style="text-align: justify;">5. Mọi tranh chấp phát sinh liên quan đến việc sử dụng Quà Tặng trên Nền Tảng giữa Người Dùng và Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> trước hết sẽ được giải quyết thông qua thương lượng, hòa giải giữa các bên. Nếu các bên không giải quyết tranh chấp thông qua thương lượng, hòa giải thì có quyền đưa tranh chấp ra tòa án có thẩm quyền để giải quyết và áp dụng pháp luật của nước cộng hòa xã hội chủ nghĩa Việt Nam. <strong>KIMLONG </strong>cam kết sẽ hỗ trợ các cơ quan chức năng khi có yêu cầu từ các cơ quan này.&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 6. THỜI HẠN HIỆU LỰC CỦA ĐIỂM&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">Thời hạn hiệu lực của Điểm được quyết định bởi <strong>KIMLONG </strong>từng thời kỳ. &nbsp;</p>
                        <p style="text-align: justify;">Trong hiệu lực của chính sách này, điểm <strong>KIMLONGTRAVEL-POINT</strong> đã được tích lũy cho Người dùng sẽ không hết hạn (Cho đến khi <strong>KIMLONG </strong>thay đổi chính sách).&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 7. CHẤM DỨT THAM GIA HỘI VIÊN&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. <strong>“CHƯƠNG TRÌNH KIMLONGTRAVEL-POINT”</strong> là quyền lợi dành cho <strong>Người dùng</strong> của <strong>KIMLONGTRAVEL</strong>, nếu bạn không muốn là hội viên của Chương Trình Khách Hàng Thân Thiết, Người dùng cần truyền đạt mong muốn đó đến KIMLONGTRAVEL qua email <strong>cs@KIMLONG.vn</strong> hoặc điện thoại <strong>1900636750&nbsp;</strong></p>
                        <p style="text-align: justify;">Tuy nhiên, nếu Người dùng truyền đạt mong muốn chấm dứt làm hội viên trong lúc vẫn còn dịch vụ chưa thực hiện thì KIMLONGTRAVEL sẽ chỉ tiếp nhận xử lý chấm dứt làm hội viên sau khi toàn bộ các dịch vụ mà Người dùng đã hoàn tất.&nbsp;</p>
                        <p style="text-align: justify;">2. Tại thời điểm chấm dứt tư cách Người dùng <strong>Chương Trình KIMLONGTRAVEL-POINT</strong>, tất cả <strong>KIMLONGTRAVEL-POINT</strong> được tích lũy tính đến thời điểm đó sẽ tự động bị hủy. Điểm tích lũy phải được quy đổi trước thời điểm chấm dứt tư cách Người dùng, Điểm tích lũy còn tồn đọng sẽ không còn giá trị quy đổi. Không áp dụng việc cộng dồn hoặc tích trữ Điểm <strong>KIMLONGTRAVEL-POINT</strong> cho lần quay trở lại làm hội viên tiếp theo của Khách hàng/Người dùng trong tương lai.&nbsp;</p>
                        <p style="text-align: justify;">3. Việc quy đổi mang tính gian dối, lừa đảo hoặc lạm dụng sẽ có thể dẫn đến việc hủy số Điểm đã tích lũy cũng như chấm dứt tư cách hội viên của Chương Trình <strong>KIMLONGTRAVEL-POINT</strong>.&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 8. QUYỀN VÀ NGHĨA VỤ CỦA KIMLONG&nbsp;</span></strong></h2>
                        <h3 style="margin-bottom: 15px; text-align: justify;"><strong><span style="font-size: 12pt;">1. QUYỀN CỦA KIMLONG&nbsp;</span></strong></h3>
                        <p style="text-align: justify;">a. Ban hành các thủ tục và các điều kiện áp dụng cho Người Dùng, Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> liên quan đến Chương Trình Khuyến Mại trên Nền tảng;&nbsp;</p>
                        <p style="text-align: justify;">b. Từ chối hoặc tạm ngừng hoặc chấm dứt tất cả các quyền và lợi ích liên quan đến <strong>KIMLONGTRAVEL-POINT </strong>của Người Dùng và/hoặc Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> trong những trường hợp sau:&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(i) Người Dùng và/hoặc Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> cung cấp thông tin sai sự thật, gây nhầm lẫn, không đầy đủ hoặc vi phạm các quy định pháp luật Việt Nam;&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(ii) Người Dùng và/hoặc Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> vi phạm các Điều Khoản Sử Dụng này hoặc thực hiện bất cứ hành vi nào gây ảnh hưởng bất lợi đến hoạt động kinh doanh của KIMLONG.&nbsp;</p>
                        <p style="text-align: justify;">c. Thay đổi Điều Khoản Sử Dụng, bao gồm cả điều khoản và điều kiện sử dụng <strong>KIMLONGTRAVEL-POINT</strong>, phí dịch vụ và các thay đổi khác từng thời kỳ mà không cần thông báo trước cho Người Dùng và/hoặc Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> nếu phù hợp.&nbsp;</p>
                        <p style="text-align: justify;">d. Trong phạm vi được pháp luật cho phép, <strong>KIMLONG </strong>bảo lưu tại mọi thời điểm các quyền sau đây và sẽ thông báo cho Người dùng thông qua Nền tảng hoặc gửi tin nhắn đến số điện thoại hoặc địa chỉ email đăng ký của Người dùng trước thời điểm áp dụng:&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(i) thay thế, điều chỉnh hoặc sửa đổi bất kỳ điều khoản và điều kiện nào của Chương Trình Khách Hàng Thân Thiết <strong>KIMLONGTRAVEL-POINT</strong> (bao gồm việc bổ sung hoặc hủy bỏ bất kỳ điều khoản nào);&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(ii) chấm dứt hoặc điều chỉnh nội dung Chương Trình <strong>KIMLONGTRAVEL-POINT</strong>;&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(iii) thu hồi, điều chỉnh và/hoặc tính lại bất kỳ số Điểm nào đã được thưởng;&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(iv) thay đổi số Điểm yêu cầu để quy đổi thành các Quà Tặng cụ thể hoặc thay thế bất kỳ Quà Tặng nào bằng bất kỳ lợi ích nào có giá trị tương tự;&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(v) thay đổi số Điểm được tích lũy tính trên giá trị thanh toán thực tế của các dịch vụ&nbsp;hợp lệ;&nbsp;</p>
                        <p style="text-align: justify;">e. <strong>KIMLONG </strong>có thể tạm hoãn việc tính và cộng dồn số Điểm được tích lũy để xác nhận, điều chỉnh những lỗi sai trong việc tính toán hoặc điều chỉnh phép tính khi thấy cần thiết và sẽ thông báo cho Người dùng.&nbsp;</p>
                        <p style="text-align: justify;">f. <strong>KIMLONG </strong>có toàn quyền quyết định mà không cần phải thông báo trước cho Người dùng, từ chối việc đổi Quà Tặng, đổi KIMLONGTRAVEL-POINT cho bất cứ lý do gì, bao gồm nhưng không giới hạn:&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(i) Số điểm không đủ để đổi Quà Tặng cụ thể;&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(ii) Điểm sử dụng để đổi Quà Tặng được phát hành sai cho Người dùng;&nbsp;</p>
                        <p style="margin-left: 30px; text-align: justify;">(iii) <strong>KIMLONG </strong>có niềm tin hợp lý rằng việc đổi Điểm có dấu hiệu đáng ngờ, phạm pháp hoặc phạm tội hoặc Điểm có được do hành vi không trung thực hoặc gian dối hoặc lừa gạt.&nbsp;</p>
                        <p style="text-align: justify;">g. Thực hiện bất cứ hành động pháp lý nào chống lại Khách hàng/ Người dùng nếu <strong>KIMLONG </strong>phát hiện ra Khách hàng/ Người dùng đã sử dụng tài khoản tại Nền tảng và/hoặc điểm thưởng <strong>KIMLONGTRAVEL-POINT</strong> một cách gian lận hoặc gây hại hoặc sử dụng để giả mạo hoặc sử dụng thông tin sai sự thật.&nbsp;</p>
                        <h3 style="margin-bottom: 15px; text-align: justify;"><strong><span style="font-size: 12pt;">2. NGHĨA VỤ CỦA KIMLONG&nbsp;</span></strong></h3>
                        <p style="text-align: justify;">a. Thực hiện hợp pháp, trung thực, công khai, minh bạch và đảm bảo quyền, lợi ích hợp pháp của Khách hàng/ Người dùng, của các thương nhân, tổ chức hoặc cá nhân khác.&nbsp;</p>
                        <p style="text-align: justify;">b. <strong>KIMLONG </strong>sẽ tổ chức giới thiệu các sản phẩm, dịch vụ và thực hiện các chương trình khuyến mại gửi đến các Người Dùng trên cơ sở Thỏa Thuận Khuyến Mại.&nbsp;</p>
                        <p style="text-align: justify;">c. <strong>KIMLONG </strong>có trách nhiệm yêu cầu các Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> phải cung cấp đầy đủ và chịu trách nhiệm pháp lý về các thông tin có liên quan đến sản phẩm, dịch vụ và đảm bảo tính chính xác, trung thực của thông tin về hàng hóa, dịch vụ được khuyến mại và dùng để khuyến mại.&nbsp;</p>
                        <p style="text-align: justify;">d. Triển khai và hợp tác với các đối tác trong việc xây dựng hệ thống các dịch vụ, các công cụ tiện ích phục vụ cho việc thúc đẩy giao dịch của các Người Dùng, Đối Tác <strong>KIMLONGTRAVEL-POINT</strong> trên Nền tảng.&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 9. QUYỀN VÀ NGHĨA VỤ CỦA NGƯỜI DÙNG&nbsp;</span></strong></h2>
                        <h3 style="margin-bottom: 15px; text-align: justify;"><strong><span style="font-size: 12pt;">1. QUYỀN CỦA NGƯỜI DÙNG&nbsp;</span></strong></h3>
                        <p style="text-align: justify;">Người Dùng được nhận và tận hưởng lợi ích từ Quà Tặng, Chương Trình Khách Hàng Thân Thiết <strong>KIMLONGTRAVEL-POINT</strong> trên Nền tảng theo các điều kiện của chương trình khuyến mại và các điều khoản sử dụng <strong>KIMLONGTRAVEL-POINT &nbsp;</strong></p>
                        <h3 style="margin-bottom: 15px; margin-top: 15px; text-align: justify;"><strong><span style="font-size: 12pt;">2. NGHĨA VỤ CỦA NGƯỜI DÙNG&nbsp;</span></strong></h3>
                        <p style="text-align: justify;">a. Không được sử dụng Quà Tặng, Điểm <strong>KIMLONGTRAVEL-POINT</strong> trên Nền tảng vào những mục đích bất hợp pháp, không hợp lý, lừa đảo, đe doạ, gây hại đến quyền lợi của bất cứ cá nhân, tổ chức nào. Trong trường hợp vi phạm thì Người Dùng phải chịu trách nhiệm về các hành vi của mình trước pháp luật.&nbsp;</p>
                        <p style="text-align: justify;">b. Chịu các chi phí, thuế, lệ phí, khiếu nại hoặc nghĩa vụ nào phát sinh từ việc cấp Điểm <strong>KIMLONGTRAVEL-POINT</strong>, Quà Tặng cho Người Dùng, quy đổi Điểm và/hoặc việc sử dụng Quà Tặng đã quy đổi và tất cả chi phí và phí tổn phát sinh liên quan đến các vấn đề đó.&nbsp;</p>
                        <h2 style="margin-bottom: 15px; margin-top: 15px; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 10. QUY ĐỊNH KHÁC&nbsp;</span></strong></h2>
                        <p style="text-align: justify;">1. Nếu bất kỳ điều khoản nào của Điều Khoản Sử Dụng của chương trình Điểm Thưởng này được phát hiện là không hợp lệ hoặc không thể thi hành bởi tòa án có thẩm quyền, điều khoản đó sẽ bị tách rời khỏi những Điều khoản và Điều kiện còn lại. Nếu không, toàn bộ điều khoản sẽ vẫn có hiệu lực.&nbsp;</p>
                        <p style="text-align: justify;">2. Những điều khoản sử dụng của chương trình Điểm Thưởng này được điều chỉnh bởi luật pháp của Việt Nam và sẽ tuân theo các biện pháp xử lý tranh chấp đã nêu trong điều khoản chung của <strong>KIMLONG</strong>.&nbsp;</p>
                        <h2 style="font-size: 12pt; text-align: justify; color: #ff7d00;"><strong><span style="font-size: 12pt;">ĐIỀU 11. THÔNG TIN THƯƠNG NHÂN VÀ LIÊN HỆ&nbsp;</span></strong></h2>
                        <p style="text-align: justify;"><strong>CÔNG TY TNHH DỊCH VỤ THƯƠNG MẠI KIM LONG&nbsp;</strong></p>
                        <p style="text-align: justify;">Liên lạc qua điện thoại: <strong>1900 20 53 &nbsp;</strong></p>
                        <p style="text-align: justify;">Liên lạc qua email: <strong>kimlongtravel102@gmail.com &nbsp;</strong></p>
                        <p style="text-align: justify;">Văn phòng: Xóm 9 - Hải Vân - Hải Hậu - Nam Định</p></div><!----><!----><!----><!----><!----><!----></div>
            </div>
        </div>
    </div>
@stop
