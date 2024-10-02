<table>
    <thead>
    <tr>
        <th colspan="6" style="text-align: center; font-weight: bold">
            <h2>DANH SÁCH KHÁCH HÀNG</h2>
        </th>
    </tr>
    </thead>
    <thead>
    <tr>
        <th style="font-weight: bold">STT</th>
        <th style="font-weight: bold">Tên khách hàng</th>
        <th style="font-weight: bold">Email</th>
        <th style="font-weight: bold">Địa chỉ</th>
        <th style="font-weight: bold">Số điện thoại</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $item => $customer)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->phone  }}</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="6" style="font-weight: bold">Tổng: {{count($customers)}} khách hàng</td>
    </tr>
    </tbody>
</table>
