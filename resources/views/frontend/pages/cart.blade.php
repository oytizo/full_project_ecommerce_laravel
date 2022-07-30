<!-- head -->

@include('frontend/includes/head')


<!-- Start Header Style -->

@include('frontend/includes/header1')

<!-- End Header Area -->
<!-- Start Search Popap -->

<!-- End Search Popap -->
<!-- Start Cart Panel -->

<!-- End Header Area -->


    <!-- End Search Popap -->
    <!-- Start Cart Panel -->

    <!-- End Cart Panel -->
</div>
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
                            <span class="breadcrumb-item active">shopping cart</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="#">
                    <div class="table-content table-responsive">

                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">products</th>
                                    <th class="product-name">name of products</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total_price=0; @endphp
                                @if(empty(!$addcart))
                                @foreach($addcart as $item)
                                @foreach($product as $someproduct)
                                @if($someproduct->id==$item->p_id)
                                

                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="{{ asset('backend/product_image/'.$someproduct->image) }}" alt="product img" />
                                        </td>

                                        <td class="product-name">
                                            {{ $someproduct->name }}
                                        </td>

                                        <td class="product-price">
                                            <span class="amount{{ $someproduct->id }}" >{{ $someproduct->price }}</span>
                                        </td>

                                        <form action="">
                                            @csrf
                                        </form>

                                        <form action="{{ route('cartupdate',$someproduct->id) }}" method="post">
                                         @csrf

                                        <td class="product-quantity{{ $someproduct->id }}">
                                            <input class='product_qnt{{ $someproduct->id }}' id="{{ $someproduct->id }}" type="number" name="qnt" value="{{ $item->qtn }}" min=1 max=5 />
                                        </td>
                                        
                                        <td class="product-subtotal">${{ $someproduct->price * $item->qtn }}</td>
                                        <td class="product-remove">
                                                <button class="btn btn-sm btn-primary" type="submit" id="">Update</button>
                                                <a class="btn btn-sm btn-danger" href="{{ Route('cartdelete',$someproduct->id)  }}" style="font-size: 12px;">Delete</a>
                                        </td>
                                        </form>
                                    </tr>
                                @php $total_price=$total_price+($someproduct->price*$item->qtn);  @endphp
                                @endif
                                @endforeach
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="buttons-cart--inner">
                                <div class="buttons-cart">
                                </div>
                              
                                <div class="buttons-cart checkout--btn">
                                    <h3>Total</h3>
                                    <a  href="#">${{ $total_price }}</a>
                                    <a target="_blank" href="{{ Route('checkout1') }}">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->
<!-- End Banner Area -->
<!-- Start Footer Area -->

@include('frontend/includes/footer')

<!-- End Footer Style -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

@include('frontend/includes/script')