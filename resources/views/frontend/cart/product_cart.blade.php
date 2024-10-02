<div class="product_in_cart">
    @php $total = 0 @endphp
    @if(session('cart'))
        <div class="widget_shopping_cart_content">
            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['quantity'] * $details['price'] @endphp
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#"
                           class="remove remove_from_cart"
                           aria-label="Xóa sản phẩm này"
                           data-id="{{$details['product_id']}}"
                           data-cart_item_key="9c72e0c8882794b79d65f14776a0a974"
                           data-product_sku="">&times;</a>
                        <a href="https://lemes.vn/sản%20phẩm/ivy-shire-with-lip-skirt">
                            <img width="450" height="675"
                                 src="{{asset('images/uploads/products/' . $details['image'])}}"
                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                 alt=""
                                 srcset="{{asset('images/uploads/products/' . $details['image'])}}"
                                 sizes="(max-width: 450px) 100vw, 450px">{{ $details['name'] }}
                        </a>
                        <span class="quantity">{{$details['quantity']}} &times; <span
                                    class="woocommerce-Price-amount amount">{{ number_format(floatval($details['price']), 0, ',', '.')}}<span
                                        class="woocommerce-Price-currencySymbol">VND</span></span></span>
                    </li>
                @endforeach
            </ul>

            <p class="woocommerce-mini-cart__total total">
                <strong>Tạm tính:</strong>
                <span class="woocommerce-Price-amount amount">
                            {{ number_format(floatval($total), 0, ',', '.')}}
                            <span class="woocommerce-Price-currencySymbol">VND</span></span>
            </p>
            <p class="woocommerce-mini-cart__buttons buttons">
                <a href="{{route('cart.index')}}" class="button wc-forward">Xem giỏ
                    hàng</a>
            </p>
        </div>
    @else
        <span>Bạn chưa thêm sản phẩm nào vào giỏ hàng!</span>
    @endif
    <div class="cart-sidebar-content relative"></div>
</div>
