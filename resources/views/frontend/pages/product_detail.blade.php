<!-- head -->

@include('frontend/includes/head')


<!-- Start Header Style -->

<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('frontend') }}/images/logo/4.png" alt="logo images"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('contact_us') }}">contact</a></li>
                                <li><a href="{{ route('wishlist') }}">wishlist</a></li>
                                <li><a href="{{ route('cart') }}">View Cart</a></li>

                            </ul>
                        </nav>

                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('contact_us') }}">contact</a></li>
                                    <li><a href="{{ route('wishlist') }}">wishlist</a></li>
                                    <li><a href="{{ route('cart') }}">View Cart</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>


<!-- Start Offset Wrapper -->
<div class="offset__wrapper">

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->

    <!-- End Offset Wrapper -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('frontend') }}/images/bg/4.jpg) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <a class="breadcrumb-item" href="product-grid.html">Products</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                <span class="breadcrumb-item active">ean shirt</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Details Area -->

    <section class="htc__product__details bg__white ptb--100">
        <!-- Start Product Details Top -->
        <div class="htc__product__details__top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="htc__product__details__tab__content">
                            <!-- Start Product Big Images -->
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                        <img src="{{ asset('backend/product_image/'.$product->image) }}" alt="full-image">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Big Images -->

                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="ht__product__dtl">
                            <h2>{{ $product->name }}</h2>
                            <ul class="pro__prize">
                                <li>${{ $product->price }}</li>
                            </ul>
                            <p class="pro__info">{{ $product->short_desc }}</p>
                            <div class="ht__pro__desc">
                                <div class="sin__desc">
                                    <p><span>Availability:</span> In Stock</p>
                                </div>
                                <div class="sin__desc align--left">
                                    <p><span>Categories:</span></p>
                                    <ul class="pro__cat__list">
                                        <li><a href="#">Fashion,</a></li>
                                    </ul>

                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->
<!-- Start Product Description -->
<section class="htc__produc__decription bg__white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Start List And Grid View -->
                <ul class="pro__details__tab" role="tablist">
                    <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>
                </ul>
                <!-- End List And Grid View -->
            </div>
        </div>

    </div>
</section>

<!-- End Product Description -->
<!-- Start Product Area -->

<!-- End Product Area -->
<!-- End Banner Area -->
<footer id="htc__footer">
    <!-- Start Footer Widget -->
    <div class="footer__container bg__cat--1">
        <div class="container">
            <div class="row">
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer">
                        <h2 class="title__line--2">ABOUT US</h2>
                        <div class="ft__details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                            <div class="ft__social__link">
                                <ul class="social__link">
                                    <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                    <div class="footer">
                        <h2 class="title__line--2">information</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Manufactures</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">my account</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="#">My Account</a></li>
                                <li><a href="cart.html">My Cart</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">Our service</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="#">My Account</a></li>
                                <li><a href="cart.html">My Cart</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">NEWSLETTER </h2>
                        <div class="ft__inner">
                            <div class="news__input">
                                <input type="text" placeholder="Your Mail*">
                                <div class="send__btn">
                                    <a class="fr__btn" href="#">Send Mail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
            </div>
        </div>
    </div>
    <!-- End Footer Widget -->
    <!-- Start Copyright Area -->
    <div class="htc__copyright bg__cat--5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright__inner">
                        <p>Copyright© <a href="https://freethemescloud.com/">Free themes Cloud</a> 2018. All right reserved.</p>
                        <a href="#"><img src="{{ asset('frontend') }}/images/others/shape/paypol.png" alt="payment images"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
</footer>
<!-- End Footer Style -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="{{ asset('backend') }}/js/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="{{ asset('backend') }}/js/plugins.js"></script>
<script src="{{ asset('backend') }}/js/slick.min.js"></script>
<script src="{{ asset('backend') }}/js/owl.carousel.min.js"></script>
<!-- Waypoints.min.js. -->
<script src="{{ asset('backend') }}/js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ asset('backend') }}/js/main.js"></script>



</body>

</html>