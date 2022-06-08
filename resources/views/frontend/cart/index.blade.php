@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Giỏ hàng</div>
            </div>
        </div>
    </div>
    <section class="ticket">
        <div class="container" id="cart_infor">
            @include('frontend.cart.list_ticket')
        </div>
    </section>
@stop
