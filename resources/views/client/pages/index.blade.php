@extends('client.layout.app')
@section('pageTitle','Home')
@section('content')

@include('client.layout.slider')


<!-- Product Area Start -->
<section class="product-area mb--50 mb-xl--40 mb-lg--25 mb-md--30 mb-sm--20 mb-xs--15">
    <div class="container">
        <div class="row mb--42">
            <div class="col-lg-5 col-sm-10">
                <h2 class="heading__secondary">NEW ARRIVALS</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor ipisci velit, sed quia non numquam
                    eius modi </p>
            </div>
        </div>
        <div class="row">
            @forelse($products as $product)
                @include('client.partials._product-card', ['product' => $product])
            @empty
                <div class="col-12 text-center">
                    <p>No products available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
<!-- Product Area End -->

<!-- Countdown Product Area Start -->
<div class="limited-product-area mb--11pt5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-md--40 mb-sm--45">
                <div class="limited-product__image">
                    <div class="limited-product__title">
                        <h2>{{ $featuredProduct->title ?? 'Featured Product' }}</h2>
                    </div>
                    <div class="limited-product__large-image">
                        <div class="element-carousel main-slider" data-slick-options='{
                            "slidesToShow": 1,
                            "asNavFor": ".nav-slider"
                        }'>
                            @foreach($featuredProduct->images as $image)
                                <div class="item">
                                    <figure>
                                        <img src="{{ asset('uploads/' . $image->image_path) }}" alt="{{ $featuredProduct->title }}">
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="limited-product__nav-image">
                        <div class="element-carousel nav-slider" data-slick-options='{
                            "spaceBetween": 25,
                            "slidesToShow": 3,
                            "vertical": true,
                            "focusOnSelect": true,
                            "asNavFor": ".main-slider"
                        }' 
                        data-slick-responsive='[
                            {"breakpoint": 576, "settings": { "vertical": false }}
                        ]'>
                            @foreach($featuredProduct->images as $image)
                                <div class="item">
                                    <figure>
                                        <img src="{{ asset('uploads/' . $image->image_path) }}" alt="{{ $featuredProduct->title }}">
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="limited-product__info">
                    <h2 class="limited-product__name">
                        <a href="{{ route('product.details', $featuredProduct->slug) }}">{{ $featuredProduct->title }}</a>
                    </h2>
                    <p class="limited-product__desc">{!! $featuredProduct->description !!}</p>
                    <div class="d-flex align-items-center">
                        <div class="limited-product__price">
                            <span class="money">{{ number_format($featuredProduct->sale_price, 2) }}</span>
                            <span class="sign">$</span>
                        </div>
                        <span class="limited-product__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </div>
                    <h3 class="limited-product__subtitle">BEST DEAL, LIMITED TIME OFFER GET YOUR’S NOW!</h3>
                    <div class="limited-product__countdown">
                        <div class="countdown-wrap">
                            <div class="countdown" data-countdown="2025/10/01" data-format="short">
                                <div class="countdown__item">
                                    <span class="countdown__time daysLeft"></span>
                                    <span class="countdown__text daysText"></span>
                                </div>
                                <div class="countdown__item">
                                    <span class="countdown__time hoursLeft"></span>
                                    <span class="countdown__text hoursText"></span>
                                </div>
                                <div class="countdown__item">
                                    <span class="countdown__time minsLeft"></span>
                                    <span class="countdown__text minsText"></span>
                                </div>
                                <div class="countdown__item">
                                    <span class="countdown__time secsLeft"></span>
                                    <span class="countdown__text secsText"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn-link">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Countdown Product Area End -->

<style>
    .funding-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    
    .funding-section h1 {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    .funding-section h2 {
        color: #34495e;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .funding-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }
    
    .feature-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .partners-section {
        padding: 60px 0;
        background-color: white;
    }
    
    .partner-logo {
        height: 100px;
        padding: 15px;
        margin: 0 20px;
        display: flex !important;
        align-items: center;
        justify-content: center;
    }
    
    .partner-logo img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
        filter: grayscale(100%);
        transition: filter 0.3s ease;
    }
    
    .partner-logo img:hover {
        filter: grayscale(0%);
    }
    
    .slick-track {
        display: flex !important;
        align-items: center;
    }
    
    .slick-slide {
        height: inherit !important;
    }
    
    @media (max-width: 768px) {
        .funding-section {
            padding: 40px 0;
        }
        
        .funding-content {
            text-align: center;
            margin-bottom: 30px;
        }
    }
</style>

<section class="funding-section" style="margin-top: 0px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="funding-content">
                    <h1>Invitation to Join Our Funding Round</h1>
                    <h2>Empowering Growth and Innovation</h2>
                    <p class="lead">We are thrilled to announce that Mars & Venus LTD is opening its doors to strategic investors, offering a unique opportunity to join our funding round starting December 1st, 2024. This investment will propel our company's growth, drive innovation, and solidify our position as a leader in our industry.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="/images/image3.png" width="50%" alt="Funding Announcement" class="feature-image"> <!-- Replace with your image path -->
            </div>
        </div>
    </div>
</section>


<section class="partners-section">
    <div class="container">
        <div class="partner-carousel">
            <!-- Replace the placeholder images with your actual partner logos -->
            <div class="partner-logo">
                <img src="/images/image1.png" alt="Partner 1">
            </div>
            <div class="partner-logo">
                <img src="/images/image4.png" alt="Partner 2">
            </div>
            <div class="partner-logo">
                <img src="/images/image5.png" alt="Partner 3">
            </div>
            <div class="partner-logo">
                <img src="/images/image6.png" alt="Partner 4">
            </div>
            <div class="partner-logo">
                <img src="/images/image7.png" alt="Partner 5">
            </div>
            
        </div>
    </div>
</section>



<section class="method-area mb--11pt5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="sr-only">Methods</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-sm--50">
                <div class="method-box shipment-method">
                    <i class="flaticon-truck"></i>
                    <h3>Free Home Delivery</h3>
                </div>
            </div>
            <div class="col-md-4 mb-sm--50">
                <div class="method-box money-back-method">
                    <i class="flaticon-money"></i>
                    <h3>MONEY BACK GUARANTEE</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="method-box support-method">
                    <i class="flaticon-support"></i>
                    <h3>SUPORT 24/7</h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.partner-carousel').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
@endsection