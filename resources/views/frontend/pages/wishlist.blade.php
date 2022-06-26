<!-- head -->

@include('frontend/includes/head')


<!-- Start Header Style -->

@include('frontend/includes/header1')


@include('frontend/includes/search')


<!-- End Search Popap -->
<!-- Start Cart Panel -->

<!-- End Bradcaump area -->
<!-- wishlist-area start -->
<div class="wishlist-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-content">
                    <form action="#">
                        <div class="wishlist-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Remove</th>
                                        <th class="product-name"><span class="nobr">Image</span></th>
                                        <th class="product-price"><span class="nobr">Product Name </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Price </span></th>
                                        <th class="product-remove"><span class="nobr">Stock Status</span></th>
                                        <th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total_price=0; @endphp
                                    @if(empty(!$wishlist))
                                    @foreach($wishlist as $item)
                                    @foreach($product as $someproduct)
                                    @if($someproduct->id==$item->p_id)

                                    <tr>
                                        <td class="product-remove"><a href="{{ Route('delwishlist',$someproduct->id) }}">×</a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="{{ asset('backend/product_image/'.$someproduct->image) }}" alt="" /></a></td>
                                        <td class="product-name"><a href="#">{{ $someproduct->name }}</a></td>
                                        <td class="product-price"><span class="amount">{{ $someproduct->price }}</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><button class="addcart{{ $someproduct->id }}" value="{{ $someproduct->id }}">ADD TO CARD</button></td>
                                    </tr>
                                    @php $total_price=$total_price+($someproduct->price*$item->qtn); @endphp
                                    @endif
                                    @endforeach
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- wishlist-area end -->
<!-- Start Brand Area -->
<div class="htc__brand__area bg__cat--4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ht__brand__inner">
                    <ul class="brand__list owl-carousel clearfix">
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/1.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/2.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/3.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/4.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/5.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/5.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/1.png" alt="brand images"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/images/brand/2.png" alt="brand images"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area -->
<!-- Start Banner Area -->
<div class="htc__banner__area">
    <ul class="banner__list owl-carousel owl-theme clearfix">
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/1.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/2.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/3.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/4.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/5.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/6.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/1.jpg" alt="banner images"></a></li>
        <li><a href="product-details.html"><img src="{{ asset('frontend') }}/images/banner/bn-3/2.jpg" alt="banner images"></a></li>
    </ul>
</div>
<!-- End Banner Area -->
<!-- End Banner Area -->
<!-- Start Footer Area -->
@include('frontend/includes/footer')

<!-- End Footer Style -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

@include('frontend/includes/script')