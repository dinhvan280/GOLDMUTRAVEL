@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Chính sách và quy trình giải quyết tranh chấp</div>
            </div>
        </div>
    </div>
    <div class="support-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    @include('frontend.template.menu_left')
                </div>
                <div class="col-12 col-lg-9"><div class="support-page-content history wysiwyg"><p style="text-align: justify;">Khi có bất kỳ khiếu nại, tranh chấp nào xảy ra liên quan đến dịch vụ vận tải được kết nối qua Trang bán vé trực tuyến GOLDMUTRAVEL.vn, Quý khách hàng vui lòng thông báo cho chúng tôi trong thời gian sớm nhất. GOLDMUTRAVEL và các nhà cung cấp dịch vụ cam kết sẽ có trách nhiệm tiếp cận và hỗ trợ khách hàng để giải quyết mọi khiếu nại, tranh chấp đó trên cơ sở khách quan dựa trên thỏa thuận và quy định pháp luật. Chúng tôi luôn đề cao cách thức giải quyết hòa giải, thương lượng giữa các bên nhằm duy trì mối quan hệ tốt đẹp và sự tin tưởng của khách hàng vào các dịch vụ trên Trang GOLDMUtravel.com.</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span style="font-size: 12pt;">ĐIỀU 1. CÁC KÊNH TIẾP NHẬN KHIẾU NẠI</span></strong></h2>
                        <p style="text-align: justify;"><strong><em>Cách 1</em>: </strong>Khách hàng gọi điện thoại đến tổng đài hỗ trợ: 1900 20 53.</p>
                        <p style="text-align: justify;"><strong><em>Cách 2</em>: </strong>Khách hàng gửi email đến địa chỉ goldmutravel102@gmail.com.</p>
                        <p style="text-align: justify;"><strong><em>Cách 3</em>:</strong> Khách hàng khiếu nại trực tiếp với nhà xe cung cấp dịch vụ. Trong trường hợp này, nhà cung cấp dịch vụ/khách hàng có quyền yêu cầu GOLDMUTRAVEL hỗ trợ giải quyết các vấn đề phát sinh. GOLDMUTRAVEL và nhà cung cấp dịch vụ có trách nhiệm giải quyết khiếu nại và phản hồi đến khách hàng trong thời gian sớm nhất.</p>
                        <h2 style="text-align: justify; color: #ff7d00; margin: 15px 0 15px 0;"><strong><span style="font-size: 12pt;">ĐIỀU 2. QUY TRÌNH TIẾP NHẬN VÀ XỬ LÝ KHIẾU NẠI, TRANH CHẤP</span></strong></h2>
                        <p style="text-align: justify;"><strong><em>Bước 1</em>:</strong> Khách hàng liên hệ với GOLDMUTRAVEL qua tổng đài 1900 20 53 hoặc gửi email đến địa chỉ goldmutravel102@gmail.com.</p>
                        <p style="text-align: justify;"><strong><em>Bước 2</em>:</strong> Bộ phận Chăm sóc khách hàng của GOLDMUTRAVEL sẽ tiếp nhận khiếu nại của khách hàng. Tùy theo tính chất và mức độ của khiếu nại, GOLDMUTRAVEL sẽ có những quy trình cụ thể hỗ trợ khách hàng để giải quyết tranh chấp đó không quá bảy (7) ngày làm việc từ khi tiếp nhận khiếu nại.</p>
                        <p style="text-align: justify;"><strong><em>Bước 3</em>:</strong> GOLDMUTRAVEL có quyền yêu cầu khách hàng cung cấp các thông tin, bằng chứng liên quan đến giao dịch để xác thực và làm rõ sự việc, từ đó có hướng giải quyết phù hợp.</p>
                        <p style="text-align: justify;"><strong><em>Bước 4</em>:</strong> Mọi tranh chấp phát sinh sẽ được ưu tiên giải quyết thông qua đàm phán, thương lượng.</p>
                        <p style="text-align: justify;">Các bên bao gồm Khách hàng, GOLDMUTRAVEL, Nhà cung cấp dịch vụ phải có trách nhiệm cung cấp văn bản giấy tờ chứng thực thông tin liên quan đến sự việc đang gây mâu thuẫn.</p>
                        <p style="text-align: justify;">Trong vòng hai (2) ngày làm việc kể từ khi nhận được khiếu nại, GOLDMUTRAVEL sẽ kiểm tra, xác nhận thông tin về khiếu nại và thông báo cho các bên có liên quan. GOLDMUTRAVEL cũng đồng thời tiến hành xác minh nội dung khiếu nại, xem xét và phân tích nguyên nhân dẫn đến khiếu nại, phạm vi khiếu nại và trách nhiệm xử lý để phối hợp với nhà cung cấp đưa ra giải pháp xử lý phù hợp;</p>
                        <p style="text-align: justify;">Nhà cung cấp dịch vụ là bên chủ động xử lý và giải quyết khiếu nại. GOLDMUTRAVEL sẽ đóng vai trò phối hợp, hỗ trợ việc xử lý và giải quyết khiếu nại giữa nhà cung cấp và người mua. Theo đó, trong vòng năm (5) ngày làm việc kể từ khi nhận được thông báo của GOLDMUTRAVEL về khiếu nại thì Nhà cung cấp dịch vụ sẽ phối hợp với GOLDMUTRAVEL để giải quyết, xử lý khiếu nại và chủ động thông báo cho người khiếu nại biện pháp giải quyết, xử lý;</p>
                        <p style="text-align: justify;">Trong trường hợp giao dịch phát sinh mâu thuẫn mà lỗi do Nhà cung cấp dịch vụ thì GOLDMUTRAVEL sẽ áp dụng các hình thức xử lý thích đáng tùy thuộc vào mức độ sai phạm. Đồng thời, Nhà cung cấp dịch vụ phải có trách nhiệm bồi thường, bồi hoàn cho khách hàng thỏa đáng trên cơ sở thương lượng.</p>
                        <p style="text-align: justify;">Trường hợp người khiếu nại không đồng ý với cách giải quyết, xử lý của Nhà cung cấp dịch vụ, GOLDMUTRAVEL sẽ có trách nhiệm chủ trì việc thương lượng, hòa giải giữa các bên để đưa ra giải pháp cuối cùng;</p>
                        <p style="text-align: justify;">Trong thời hạn 30 ngày nếu thương lượng không thành, các bên có thể đưa tranh chấp ra giải quyết tại Tòa án nhân dân có thẩm quyền. GOLDMUTRAVEL sẽ cung cấp những thông tin liên quan đến Khách hàng và Nhà cung cấp nếu Pháp luật yêu cầu.</p></div></div>
            </div>
        </div>
    </div>
@stop
