@extends('client.layout.app2')
@section('pageTitle', 'Shop')
@section('content')


 <!-- Breadcrumb area Start -->
 <section class="page-title-area bg-color" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Shop Fullwidth</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Shop Fullwidth</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="shop-page-wrapper shop-fullwidth ptb--80">
        <div class="container">
            <div class="row mb--50">
                <div class="col-12">
                    <div class="shop-toolbar">
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-sm--30 mb-xs--10">
                                <div class="shop-toolbar__left">
                                    <div class="product-ordering">
                                        <select class="product-ordering__select nice-select">
                                            <option value="0">Default Sorting</option>
                                            <option value="1">Relevance</option>
                                            <option value="2">Name, A to Z</option>
                                            <option value="3">Name, Z to A</option>
                                            <option value="4">Price, low to high</option>
                                            <option value="5">Price, high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="shop-toolbar__right">
                                    <p class="product-pages">Showing Result 08 Among 72</p>
                                    <div class="product-view-mode ml--50 ml-xs--0">
                                        <a class="active" href="#" data-target="grid">
                                            <img src="/client/img/icons/grid.png" alt="Grid">
                                        </a>
                                        <a href="#" data-target="list">
                                            <img src="/client/img/icons/list.png" alt="Grid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid shop-products">
            <div class="row">
              
                @forelse($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <img src="{{ $product->featuredImage ? asset('uploads/' . $product->featuredImage->image_path) : asset('/client/img/products/product-placeholder.jpg') }}" 
                                         alt="{{ $product->title }}">
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
                                        <span class="money">{{ number_format($product->sale_price, 2) }}</span>
                                        <span class="sign">$</span>
                                    </div>
                                </div>
                                <div class="product__info--right">
                                    <span class="product__rating">
                                        {{-- You might want to add a rating system later --}}
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
                @empty
                <div class="col-12 text-center">
                    <p>No products available at the moment.</p>
                </div>
                @endforelse
               
            </div>

            <div class="row">
                {{-- <div class="col-12">
                    <nav class="pagination-wrap mt--35 mt-md--25">
                        <ul class="pagination">
                            <li><span class="page-number current">1</span></li>
                            <li><a href="#" class="page-number">2</a></li>
                            <li><span class="dot"></span></li>
                            <li><span class="dot"></span></li>
                            <li><span class="dot"></span></li>
                            <li><a href="#" class="page-number">16</a></li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->


@endsection