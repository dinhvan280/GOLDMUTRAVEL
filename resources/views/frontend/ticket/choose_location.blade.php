<trip-station id="trip-station" class="reservePages open">
    <div class="seat-contain">
        <div class="ticket-book-content-seat"><h3 class="pl-2">Điểm đón</h3>
            <div class="seat-map seat-map-pickdoff scrollbar">
                @foreach($diemdon as $items => $value)
                    <div class="seat-row">
                        <div class="seat-col">
                            <div class="checkbox point_pickup" data-point="{{$value->ten_dd}}" data-id="{{$items}}" data-time="{{date('G:i', strtotime($value->thoi_gian))}}">
                                <input type="radio" name="pickupPoint" id="pickupPoint-{{$items}}" data-point="{{$value->ten_dd}}" value="{{$items}}">
                                <label for="pickupPoint-{{$items}}">
                                    <div class="point"><p>
                                            <span id="time_start">{{date('G:i', strtotime($value->thoi_gian))}}</span> {{$value->ten_dd}}
                                        </p>
                                    </div>
                                    <div class="address"><i aria-hidden="true"
                                                            class="fa fa-map-o"></i><span> {{$value->ten_dd}}</span>
                                    </div>
                                </label>
                            </div>
                            <div class="ticket-book-note">
                                <p>- Tối thiểu 1 hành khách</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="ticket-book-content-seat"><h3 class="pl-2">Điểm trả</h3>
            <div class="seat-map seat-map-pickdoff scrollbar">
                @foreach($diemtra as $k => $v)
                    <div class="seat-row">
                        <div class="seat-col">
                            <div class="checkbox dropOffPoint" data-id="{{$k}}" data-time="{{date('G:i', strtotime($v->thoi_gian))}}"><input type="radio" name="dropOffPoint" id="dropOffPoint-{{$k}}" data-time="{{date('G:i', strtotime($v->thoi_gian))}}" data-point="{{$v->ten_dd}}"
                                                         value="{{$k}}">
                                <label for="dropOffPoint-{{$k}}">
                                    <div class="point"><p>
                                            <span>{{date('G:i', strtotime($v->thoi_gian))}}</span> {{$v->ten_dd}}</p>
                                    </div>
                                    <div class="address"><i aria-hidden="true"
                                                            class="fa fa-map-o"></i><span> {{$v->ten_dd}}</span>
                                    </div>
                                </label>
                            </div>
                            <div class="ticket-book-note">
                                <p>- Tối thiểu 1 hành khách</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="action-book"><p>Nhấn vào <i aria-hidden="true" class="fa fa-square-o"></i> để chọn điểm đón trả</p>
    </div>
</trip-station>
<div class="seat-action">
    <button class="btn-cancel" onclick="history.back()">Quay lại</button>
    <button class="btn-next" id="btn_choose_location">Tiếp tục</button>
</div>
