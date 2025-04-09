@extends('client.layout.app2')
@section('pageTitle', $product->title)
@section('content')

<!-- Breadcrumb area Start -->
<section class="page-title-area bg-color" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">{{ $product->title }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/shop') }}">Shop</a></li>
                    <li class="current"><span>{{ $product->title }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--80 pt-md--60">
        <div class="container">
            <div class="row g-0 mb--80 mb-md--57">
                <div class="col-lg-7 product-main-image">
                    <div class="product-image">
                        <div class="product-gallery vertical-slide-nav">
                            <div class="product-gallery__large-image mb-sm--30">
                                <div class="product-gallery__wrapper">
                                    <div class="element-carousel main-slider image-popup" data-slick-options='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "infinite": true,
                                        "arrows": false, 
                                        "asNavFor": ".nav-slider"
                                    }'>
                                        @foreach($product->images as $image)
                                        <div class="item">
                                            <figure class="product-gallery__image zoom">
                                                <img src="{{ asset('uploads/' .$image->image_path) }}" alt="{{ $product->title }}">
                                                @if($product->sale_price < $product->original_price)
                                                    <span class="product-badge sale">Sale</span>
                                                @endif
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                </div>
                                            </figure>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="product-gallery__nav-image">
                                <div class="element-carousel nav-slider product-slide-nav slick-center-bottom"
                                    data-slick-options='{
                                    "spaceBetween": 10,
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1,
                                    "vertical": true,
                                    "swipe": true,
                                    "verticalSwiping": true,
                                    "infinite": true,
                                    "focusOnSelect": true,
                                    "asNavFor": ".main-slider",
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                }'>
                                    @foreach($product->images as $image)
                                    <div class="item">
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="{{ asset('uploads/' .$image->image_path) }}" alt="{{ $product->title }}">
                                        </figure>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                    <div class="product-summary pl-lg--30 pl-md--0">
                        <div class="product-navigation text-end mb--20">
                            <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                            <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                        <div class="product-rating d-flex mb--20">
                            <div class="star-rating star-four">
                                <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                            </div>
                        </div>
                        <h3 class="product-title mb--20">{{ $product->title }}</h3>
                        <p class="product-short-description mb--20">{!! Str::limit($product->description, 200) !!}</p>
                        <div class="product-price-wrapper mb--25">
                            <span class="money">${{ number_format($product->sale_price, 2) }}</span>
                            @if($product->sale_price < $product->original_price)
                                <span class="price-separator">-</span>
                                <span class="money">${{ number_format($product->original_price, 2) }}</span>
                            @endif
                        </div>
                        
                        <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                            <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                <label class="quantity-label" for="pro-qty">Quantity:</label>
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="quantity" id="pro-qty" value="1" min="1" max="{{ $product->quantity_in_stock }}">
                                </div>
                            </div>
                            <button type="button" class="btn btn-shape-square btn-size-sm" 
                                onclick="addToCart({{ $product->id }})">
                                Add To Cart
                            </button>
                        </div>
                        <div class="product-footer-meta">
                            <p><span>Category:</span>
                                <a href="{{ url('/shop?category=' . $product->category->id) }}">
                                    {{ $product->category->name }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Description Tabs -->
            <div class="row justify-content-center mb--77 mb-md--57">
                <div class="col-12">
                    <div class="tab-style-1">
                        <div class="nav nav-tabs mb--35 mb-sm--25" id="product-tab" role="tablist">
                            <button type="button" class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-description" role="tab" aria-selected="true">
                                <span>Description</span>
                            </button>
                            <button type="button" class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-reviews" role="tab" aria-selected="true">
                                <span>Reviews(0)</span>
                            </button>
                        </div>
                        <div class="tab-content" id="product-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel">
                                <div class="product-description">
                                    {!! $product->description !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                                <div class="product-reviews">
                                    <h3 class="review__title">No Reviews</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="row mb--77 mb-md--57">
                <div class="col-12">
                    <div class="element-carousel slick-vertical-center" data-slick-options='{
                        "spaceBetween": 30,
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-angle-double-left" },
                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-angle-double-right" }
                    }'>
                        @foreach($relatedProducts as $relatedProduct)
                        <div class="item">
                            <div class="payne-product">
                                <div class="product__inner">
                                    <div class="product__image">
                                        <figure class="product__image--holder">
                                            <img src="{{ asset('uploads/' .$relatedProduct->featuredImage->image_path) }}" 
                                                alt="{{ $relatedProduct->title }}">
                                        </figure>
                                        <a href="{{ url('/product/' . $relatedProduct->slug) }}" class="product__overlay"></a>
                                        <div class="product__action">
                                            <a href="{{ url('/product/' . $relatedProduct->slug) }}" class="action-btn">
                                                <i class="fa fa-eye"></i>
                                                <span class="sr-only">Quick View</span>
                                            </a>
                                            <a href="javascript:void(0)" onclick="addToWishlist({{ $relatedProduct->id }})" class="action-btn">
                                                <i class="fa fa-heart-o"></i>
                                                <span class="sr-only">Add to wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__info">
                                        <div class="product__info--left">
                                            <h3 class="product__title">
                                                <a href="{{ url('/product/' . $relatedProduct->slug) }}">
                                                    {{ $relatedProduct->title }}
                                                </a>
                                            </h3>
                                            <div class="product__price">
                                                <span class="money">{{ number_format($relatedProduct->sale_price, 2) }}</span>
                                                <span class="sign">$</span>
                                            </div>
                                        </div>
                                        <div class="product__info--right">
                                            <span class="product__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

@endsection