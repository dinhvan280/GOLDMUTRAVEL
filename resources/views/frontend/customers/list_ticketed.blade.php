<div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12" style="width:100%">
        <table id="datatable-buttons"
               class="table table-striped jambo_table table-bordered table-responsive bulk_action dataTable no-footer"
               role="grid" aria-describedby="datatable-buttons_info">
            <thead>
            <tr role="row">
                <th class="text-center sorting_asc" tabindex="0"
                    aria-controls="datatable-buttons" rowspan="1" colspan="1"
                    aria-sort="ascending"
                    aria-label="STT: activate to sort column descending"
                >STT
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Tên khách hàng: activate to sort column ascending"
                >Ngày
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Số điện thoại: activate to sort column ascending"
                >Tên xe
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Số điện thoại: activate to sort column ascending"
                >Ghế xe
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Địa chỉ: activate to sort column ascending"
                >Người đi
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Số ghế: activate to sort column ascending">
                    Nơi đón
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Giá vé: activate to sort column ascending"
                >Giờ đón
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Trạng thái: activate to sort column ascending"
                >Giá vé
                </th>
                <th class="text-center sorting" tabindex="0"
                    aria-controls="datatable-buttons"
                    rowspan="1" colspan="1"
                    aria-label="Trạng thái: activate to sort column ascending"
                >Hành động
                </th>

            </thead>
            <tbody>
            @foreach ($veDat as $id => $value)
                <tr role="row" class="odd">
                    <td class="text-center sorting_1">{{$id+1}}</td>
                    <td class="text-center">
                        {{date('d-m-Y', strtotime($value->ngay))}}
                    </td>
                    <td class="text-center">
                        {{$value->ten_xe}}
                    </td>
                    <td class="text-center">
                        {{$value->ky_hieu}}
                    </td>
                    <td class="text-center">
                        {{$value->name}}
                    </td>
                    <td class="text-center">
                        {{$value->diem_don}}
                    </td>
                    <td class="text-center">
                        {{date('G:i', strtotime($value->gio_don))}}
                    </td>
                    <td class="text-center">
                        {{ number_format(floatval($value->gia_ve), 0, ',', '.') . "đ" }}
                    </td>
                    <td class="text-center">
                        <a href="#"
                           style="min-width:100px;"
                           class="btn btn-primary btn-xs btn-destroy-ticket" data-id="{{$value->id}}" data-user="{{ getSessionUser()->id}}"><i class="fa fa-edit"></i> Hủy vé</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
