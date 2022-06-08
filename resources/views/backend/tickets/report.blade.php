<table>
    <thead>
    <tr>
        <th colspan="5" style="text-align: center; font-weight: bold">
            <h2>BÁO CÁO DOANH THU TỪ NGÀY {{date('d-m-Y', strtotime($start))}} ĐẾN NGÀY {{date('d-m-Y', strtotime($end))}}</h2>
        </th>
    </tr>
    </thead>
    <thead>
    <tr>
        <th style="font-weight: bold">STT</th>
        <th style="font-weight: bold">Tên tuyến</th>
        <th style="font-weight: bold">Tên chuyến</th>
        <th style="font-weight: bold">Tên khách hàng</th>
        <th style="font-weight: bold">Giá vé</th>
    </tr>
    </thead>
    <tbody>
    @php $tong = 0 @endphp
    @foreach($tickets as $item => $ticket)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $ticket->ten_tuyen }}</td>
            <td>{{ $ticket->ten_chuyen }}</td>
            <td>{{ $ticket->name }}</td>
            <td>{{ number_format(floatval($ticket->gia_ve), 0, ',', '.') . "đ" }}</td>
        </tr>
        @php $tong += $ticket->gia_ve @endphp
    @endforeach
    <tr>
        <td colspan="3" style="font-weight: bold">Tổng: {{count($tickets)}} vé</td>
        <td colspan="1" style="font-weight: bold">Doanh thu: </td>
        <td colspan="1" style="font-weight: bold"> {{ number_format(floatval($tong), 0, ',', '.') . "đ" }} </td>
    </tr>
    </tbody>
</table>
