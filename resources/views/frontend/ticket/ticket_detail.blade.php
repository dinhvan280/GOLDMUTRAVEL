@if(!empty($images))
    @foreach($images as $items => $item)
        <div
            class="item slick-slide {{$items == 0 ? 'slick-current slick-active' : ''}}"
            data-slick-index="{{$items}}" aria-hidden="true"
            tabindex="-1"
            style="width: 510px; position: relative; left: -510px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
            <img alt="{{$item}}"
                 src="////static.vexere.com/production/images/1590571326679.jpeg">
        </div>
    @endforeach
@endif

