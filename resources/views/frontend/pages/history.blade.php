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
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('backend') }}/images/slide.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
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
                                    <th class="product-thumbnail">Name</th>
                                    <th class="product-name">Email</th>
                                    <th class="product-price">Phone</th>
                                    <th class="product-quantity">Amount</th>
                                    <th class="product-subtotal">Payment</th>
                                    <th class="product-subtotal">Date & Time</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($userhistory as $userhistory)
                                <tr>                                 
                                  <td>{{ $userhistory->name }}</td>
                                   <td>{{ $userhistory->email }}</td>
                                   <td>{{ $userhistory->phone  }}</td>
                                   <td>{{ $userhistory->amount  }}</td>
                                   <td>{{ $userhistory->status  }}</td>
                                   <td>{{ $userhistory->created_at  }}</td>
                                </tr>      
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="buttons-cart--inner">
                                <div class="buttons-cart">
                                </div>
                              
                                <div class="buttons-cart checkout--btn">
                                    
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