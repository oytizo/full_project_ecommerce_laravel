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
                                    <li><a href="https://twitter.com" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="https://instragram.com" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="https://facebook.com" target="_blank"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="https://google.com" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="https://linkedin.com" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>
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
                                <li><a href="{{ route('contact_us') }}">Contact us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
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
                                <li><a href="">My Account</a></li>
                                <li><a href="cart.html">My Cart</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
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
                                <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
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
                                <br>
                               
                                @if(Auth::check())
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn btn-success" class="nav-link"><i class="fa fa-power-off"></i>Logout</button>
                                </form>
                                @endif
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
                        <a href="#"><img src="{{ asset('frontend') }}/images/others/shape/paypol.png" alt="payment images"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
</footer>
</div>