@if(!empty($images))
    @php  $left = 0   @endphp
    @foreach($images as $item => $value)
{{--        <div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0"--}}
{{--             style="width: 510px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img--}}
{{--                alt="Xe Gia Phúc - Cam Ranh Bên hông xe Gường nằm Limousine 22 chỗ"--}}
{{--                src="////static.vexere.com/c/i/543/xe-gia-phuc---cam-ranh-VeXeRe-Zn4BtTp-1000x600.jpeg"></div>--}}
        <div class="item slick-slide {{$item == 0 ? 'slick-current slick-active' : ''}}" data-slick-index="{{$item}}" aria-hidden="{{$item == 0 ? 'false' : 'true'}}"
             tabindex="{{$item == 0 ? 0 : -1}}"
             style="width: 510px; position: relative; left: {{$left}}px; top: 0px; z-index: 998; opacity: {{$item == 0 ? 1 : 0}}; transition: opacity 500ms linear 0s;">
            <img src="{{asset($value->anh)}}">
        </div>
        {{--                                                    <div class="item slick-slide" data-slick-index="1" aria-hidden="true"--}}
        {{--                                                         tabindex="-1"--}}
        {{--                                                         style="width: 510px; position: relative; left: -510px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">--}}
        {{--                                                        <img--}}
        {{--                                                            alt="Xe Gia Phúc - Cam Ranh Giường nằm Tiện ích Gường nằm Limousine 22 chỗ"--}}
        {{--                                                            src="////static.vexere.com/c/i/543/xe-gia-phuc---cam-ranh-VeXeRe-aRqb5gs-1000x600.jpeg">--}}
        {{--                                                    </div>--}}
        {{--                                                    <div class="item slick-slide" data-slick-index="2" aria-hidden="true"--}}
        {{--                                                         tabindex="-1"--}}
        {{--                                                         style="width: 510px; position: relative; left: -1020px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">--}}
        {{--                                                        <img--}}
        {{--                                                            alt="Xe Gia Phúc - Cam Ranh Giường nằm Tiện ích Gường nằm Limousine 22 chỗ"--}}
        {{--                                                            src="//////static.vexere.com/c/i/543/xe-gia-phuc---cam-ranh-VeXeRe-OvGSv5r-1000x600.jpeg">--}}
        {{--                                                    </div>--}}
        @php $left = $left - 510 @endphp
    @endforeach
@endif

