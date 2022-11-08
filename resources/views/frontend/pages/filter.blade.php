@include('frontend/includes/head')

@include('frontend/includes/header1')



@foreach($product as $product)
@if($product->cat_id==1)
@if($product->status==1)
@if($product->qnt>0)
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
                       <a href="{{ Route('add2',$product->id) }}" class="btn btn-primary">ADD TO CARD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endif
    @endif
    @else

    @endif
    @endforeach

    @if(!$msg=='')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 msgcontrol">
            <h1 class="text-center">{{ $msg }}</h1>
            </div>
        </div>
    </div>

    @endif


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