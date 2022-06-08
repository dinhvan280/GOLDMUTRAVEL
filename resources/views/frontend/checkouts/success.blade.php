@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Đặt vé thành công</div>
            </div>
        </div>
    </div>
    <section class="ticket">
        <div class="container" id="checkout_list_ticket">
            @include('frontend.checkouts.list_ticket')

        </div>
    </section>
@stop
