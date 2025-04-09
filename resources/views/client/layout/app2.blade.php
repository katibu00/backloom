<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('pageTitle') - Marvenus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="/client/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/client/img/icon.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/client/css/bootstrap.css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/client/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="/client/css/main.css">
</head>

<body>

    <!-- Preloader Start -->
    <div class="ft-preloader active">
        <div class="ft-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ft-child ft-bounce1"></div>
            <div class="ft-child ft-bounce2"></div>
            <div class="ft-child ft-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <!-- Header Start -->
        <header class="header header-default site-header">
            <div class="header__outer">
                <div class="header__inner header--fixed">
                    <div class="container">
                        <div class="header__main">
                            <div class="header__col header__left">
                                <a href="index.html" class="logo">
                                    <figure class="logo--normal">
                                        <img src="/client/img/logo/logo.png" alt="Logo">
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="/client/img/logo/logo.png" alt="Logo">
                                    </figure>
                                </a>
                            </div>
                            <div class="header__col header__center">
                                <nav class="main-navigation d-none d-lg-block">
                                    <ul class="mainmenu">
                            
                                        <li class="mainmenu__item">
                                            <a href="{{ route('home') }}" class="mainmenu__link">Home</a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="{{ route('shop') }}" class="mainmenu__link">Shop</a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="{{ route('contact') }}" class="mainmenu__link">Contact Us</a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__col header__right">
                                <div class="toolbar-item d-none d-lg-block">
                                    <a href="login-register.html" class="toolbar-btn">
                                        <span>Login</span>
                                    </a>
                                </div>
                                <div class="toolbar-item d-block d-lg-none">
                                    <a href="#offcanvasnav" class="hamburger-icon js-toolbar menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                                
                                <div class="toolbar-item mini-cart-btn">
                                    <a href="#miniCart" class="toolbar-btn js-toolbar">
                                        <span class="mini-cart-btn__icon">
                                            <i class="flaticon-bag"></i>
                                        </span>
                                        <sup class="mini-cart-btn__count">
                                            0
                                        </sup>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-sticky-height"></div>
            </div>
        </header>
        <!-- Header End -->

       @yield('content')

        <!-- Footer Start-->
        @include('client.layout.footer')
        <!-- Footer End-->

        <!-- OffCanvas Menu Start -->
        <aside class="offcanvas-navigation" id="offcanvasnav">
            <div class="offcanvas-navigation__inner">
                <a href="#" class="btn-close">
                    <i class="flaticon-cross"></i>
                    <span class="sr-only">Close Offcanvas Navigtion</span>
                </a>
                <div class="offcanvas-navigation__top">
                    <ul class="offcanvas-menu">
                       
                        <li><a href="{{ route('home') }}"><span class="mm-text"></span>Home</a></li>
                        <li><a href="{{ route('shop') }}"><span class="mm-text"></span>Shop</a></li>
                        <li><a href="{{ route('contact') }}"><span class="mm-text">Contact Us</span></a></li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- OffCanvas Menu End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <div class="mini-cart__close">
                    <a href="#" class="btn-close"><i class="flaticon-cross"></i></a>
                </div>
                <div class="mini-cart-inner">
                    <h3 class="mini-cart__heading mb--45">Shopping Cart</h3>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="mini-cart__product-remove">
                                    <i class="flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product-image">
                                    <img src="/client/img/products/product-11-90x90.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product-content">
                                    <a class="mini-cart__product-title" href="product-details.html">Lexbaro Begadi</a>
                                    <span class="mini-cart__product-quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="mini-cart__product-remove">
                                    <i class="flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product-image">
                                    <img src="/client/img/products/product-12-90x90.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product-content">
                                    <a class="mini-cart__product-title" href="product-details.html">Lexbaro Begadi</a>
                                    <span class="mini-cart__product-quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="mini-cart__product-remove">
                                    <i class="flaticon-cross"></i>
                                </a>
                                <div class="mini-cart__product-image">
                                    <img src="/client/img/products/product-13-90x90.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product-content">
                                    <a class="mini-cart__product-title" href="product-details.html">Lexbaro Begadi</a>
                                    <span class="mini-cart__product-quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-bg-primary mb--20">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-bg-primary">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Qicuk View Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="flaticon-cross"></i></span>
                        </button>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="element-carousel slick-vertical-center" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                                }'>
                                <div class="item">
                                    <figure class="product-gallery__image">
                                        <img src="/client/img/products/product-03-270x300.jpg" alt="Product">
                                        <span class="product-badge sale">Sale</span>
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="product-gallery__image">
                                        <img src="/client/img/products/product-04-270x300.jpg" alt="Product">
                                        <span class="product-badge sale">Sale</span>
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="product-gallery__image">
                                        <img src="/client/img/products/product-05-270x300.jpg" alt="Product">
                                        <span class="product-badge sale">Sale</span>
                                    </figure>
                                </div>
                                <div class="item">
                                    <figure class="product-gallery__image">
                                        <img src="/client/img/products/product-06-270x300.jpg" alt="Product">
                                        <span class="product-badge sale">Sale</span>
                                    </figure>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="modal-box product-summary">
                                    <div class="product-navigation text-end mb--20">
                                        <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                        <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="product-rating d-flex mb--20">
                                        <div class="star-rating star-four">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                    </div>
                                    <h3 class="product-title mb--20">Golden Easy Spot Chair.</h3>
                                    <p class="product-short-description mb--20">Donec accumsan auctor iaculis. Sed suscipit
                                        arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget,
                                        sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus
                                        scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                    <div class="product-price-wrapper mb--25">
                                        <span class="money">$200.00</span>
                                        <span class="price-separator">-</span>
                                        <span class="money">$400.00</span>
                                    </div>
                                    <form action="#" class="variation-form mb--20">
                                        <div class="product-size-variations d-flex align-items-center mb--15">
                                            <p class="variation-label">Size:</p>
                                            <div class="product-size-variation variation-wrapper">
                                                <div class="variation">
                                                    <a class="product-size-variation-btn selected" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="S">
                                                        <span class="product-size-variation-label">S</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="M">
                                                        <span class="product-size-variation-label">M</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="L">
                                                        <span class="product-size-variation-label">L</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a class="product-size-variation-btn" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="XL">
                                                        <span class="product-size-variation-label">XL</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="reset_variations">Clear</a>
                                    </form>
                                    <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                                        <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                            <label class="quantity-label" for="qty">Quantity:</label>
                                            <div class="quantity">
                                                <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                                                    min="1">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-shape-square btn-size-sm"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                    </div>
                                    <div class="product-footer-meta">
                                        <p><span>Category:</span>
                                            <a href="shop.html">Full Sweater</a>,
                                            <a href="shop.html">SweatShirt</a>,
                                            <a href="shop.html">Jacket</a>,
                                            <a href="shop.html">Blazer</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Qicuk View Modal End -->

        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->
    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="/client/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="/client/js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.net/payne/payne/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2024 07:40:43 GMT -->
</html>