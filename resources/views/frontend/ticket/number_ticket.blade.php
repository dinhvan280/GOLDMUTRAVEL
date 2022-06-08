<div class="item"><p>Ghế chọn</p>
    @if($number > 0)
        <p id="list_ticket">
        @foreach($tickets as $items => $value)
            {{(($loop->index == 0) ? '' : ',') . $value }}
        @endforeach
        </p>
    @else
        <p>Chưa chọn ghế</p>
    @endif


</div><!---->
<div class="item"><p>Số ghế</p>
    <p id="number_ticket">{{$number == 0 ? 'Chưa chọn ghế' : count($tickets)}}</p>
</div>
