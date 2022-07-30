<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('frontend') }}/images/logo/logo11.png" alt="logo images"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="{{ url('/') }}">Home</a></li>
                                @foreach($category as $category)
                                @if($category->status==1)
                                <li><a href="#{{ $category->categories  }}">{{ $category->categories  }}</a></li>
                                 @endif
                                @endforeach
                                <li><a href="{{ route('contact_us') }}">contact</a></li>
                                <li><a href="{{ route('wishlist') }}">wishlist</a></li>
                                <li><a href="{{ route('cart') }}">View Cart</a></li>
                                @if(Auth::check())
                                <li><a href="{{ route('history') }}">purchase History</a></li>
                                @endif
                            </ul>
                        </nav>

                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="cart.html">Cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="product-grid.html">product grid</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                        <div class="header__right">
                        <div class="header__search search search__open">
                                <a href="#"><i class="icon-magnifier icons"></i></a>
                            </div>
                           
                            @if(!Auth::check())
                            <div class="header__account">
                                <a href="{{ url('customerregistration/') }}"><i class="icon-user icons"></i></a>
                            </div>
                              @endif
                            <div class="htc__shopping__cart">
                                <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                <a href="#"><span class="htc__qua">0</span></a>
                            </div>
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