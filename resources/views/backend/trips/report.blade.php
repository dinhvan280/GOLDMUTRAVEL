<table>
    <thead>
        <tr>
            <th colspan="7" style="text-align: center; font-weight: bold">
                <h2>BÁO CÁO CÁC CHUYẾN TỪ NGÀY {{date('d-m-Y', strtotime($start))}} ĐẾN NGÀY {{date('d-m-Y', strtotime($end))}}</h2>
            </th>
        </tr>
    </thead>
    <thead>
    <tr>
        <th style="font-weight: bold">STT</th>
        <th style="font-weight: bold">Tên chuyến</th>
        <th style="font-weight: bold">Tên xe</th>
        <th style="font-weight: bold">Tên lái xe</th>
        <th style="font-weight: bold">Giờ chạy</th>
        <th style="font-weight: bold">Chiều xe</th>
        <th style="font-weight: bold">Ngày chạy</th>
    </tr>
    </thead>
    <tbody>
    @foreach($trips as $item => $trip)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $trip->ten_chuyen }}</td>
            <td>{{ $trip->ten_xe }}</td>
            <td>{{ $trip->name }}</td>
            <td>{{ date('G:i', strtotime($trip->gio)) }}</td>
            <td>{{ $trip->chieu == 'di' ? 'Chiều đi' : 'Chiều về' }}</td>
            <td>{{ date('d-m-Y', strtotime($trip->ngay)) }}</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="7" style="font-weight: bold">Tổng: {{count($trips)}} chuyến</td>
    </tr>
    </tbody>
</table>
