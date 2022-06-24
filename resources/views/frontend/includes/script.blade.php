 <!-- jquery latest version -->
 <script src="{{ asset('frontend') }}/js/vendor/jquery-3.2.1.min.js"></script>
 <!-- Bootstrap framework js -->
 <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
 <!-- All js plugins included in this file. -->
 <script src="{{ asset('frontend') }}/js/plugins.js"></script>
 <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
 <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
 <!-- Waypoints.min.js. -->
 <script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
 <!-- Main js file that contents all jQuery plugins activation. -->
 <script src="{{ asset('frontend') }}/js/main.js"></script>


 <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

     function cartshow() {
         jQuery('.shp__cart__wrap').html('');
         @php $cartCollection = Cart::getContent();
         @endphp
         @foreach($cartCollection as $item)

         jQuery('.shp__cart__wrap').append('<div class="shp__single__product">\
                <div class="shp__pro__thumb">\
                    <a href="#">\
                        <img src="{{ asset("backend/product_image/".$item->image) }}">\
                    </a>\
                </div>\
                <div class="shp__pro__details">\
                    <h2><a href="product-details.html">{{ $item->name }}</a></h2>\
                    <span class="quantity">1</span>\
                    <span class="shp__price">${{ $item->price }}</span>\
                </div>\
                <div class="remove__btn">\
                    <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>\
                </div>\
            </div>')
         @endforeach

     }


     @foreach($product as $product)

     jQuery('.addcart{{ $product->id }}').click(function() {
         var temp = jQuery('.addcart{{ $product->id }}').val();
         $.ajax({
             url: 'add/' + temp,
             data: 'get',
             datatype: 'json',
             success: function(result) {
                 if (result.data != 'same') {
                     if (result.data == 'success') {
                         var count = parseInt(jQuery('.htc__qua').text());
                         count++;
                         jQuery('.htc__qua').html(count);
                         // $.each(result.item,function(key,item){

                         // });
                         var temp=parseInt(jQuery('.total__price').text());
                         temp=temp+result.item['price'];
                         jQuery('.total__price').html(temp);

                         jQuery('.shp__cart__wrap').append('<div class="shp__single__product">\
                <div class="shp__pro__thumb">\
                    <a href="#">\
                        <img src="{{ asset("backend/product_image") }}/' + result.item['image'] + '">\
                    </a>\
                </div>\
                <div class="shp__pro__details">\
                    <h2><a href="product-details.html">' + result.item['name'] + '</a></h2>\
                    <span class="quantity">1</span>\
                    <span class="shp__price">$' + result.item['price'] + '</span>\
                </div>\
            </div>')
                     } else {
                         location.replace('/customerregistration');
                     }
                 } else {
                     alert('already added');
                 }

             }
         });
     });
     @endforeach
 </script>


 </body>

 </html>