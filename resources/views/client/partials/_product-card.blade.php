<div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
    <div class="payne-product">
        <div class="product__inner">
            <div class="product__image">
                <figure class="product__image--holder">
                    <img src="{{ $product->featuredImage ? asset('uploads/' . $product->featuredImage->image_path) : asset('/client/img/products/product-placeholder.jpg') }}"
                         alt="{{ $product->title }}">
                    @if($product->original_price > $product->sale_price)
                        <span class="product-badge sale">Sale</span>
                    @endif
                </figure>
                <a href="{{ route('product.details', $product->slug) }}" class="product-overlay"></a>
                <div class="product__action">
                    <a href="{{ route('product.details', $product->slug) }}" class="action-btn">
                        <i class="fa fa-eye"></i>
                        <span class="sr-only">View Details</span>
                    </a>
                    <a href="{{ route('wishlist.add', $product->id) }}" class="action-btn">
                        <i class="fa fa-heart-o"></i>
                        <span class="sr-only">Add to wishlist</span>
                    </a>
                    <a href="{{ route('cart.add', $product->id) }}" class="action-btn">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="sr-only">Add To Cart</span>
                    </a>
                </div>
            </div>
            <div class="product__info">
                <div class="product__info--left">
                    <h3 class="product__title">
                        <a href="{{ route('product.details', $product->slug) }}">{{ $product->title }}</a>
                    </h3>
                    <div class="product__price">
                        <span class="money">${{ number_format($product->sale_price, 2) }}</span>
                        @if($product->original_price > $product->sale_price)
                            <span class="money-separator">-</span>
                            <span class="money old">${{ number_format($product->original_price, 2) }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>