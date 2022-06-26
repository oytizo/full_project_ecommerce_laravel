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



     @if(empty(!$product))
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
                         var temp = parseInt(jQuery('.total__price').text());
                         temp = temp + result.item['price'];
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
     jQuery('.wishlist{{ $product->id }}').click(function() {
         var temp = jQuery('.wishlist{{ $product->id }}').val();
         $.ajax({
             url: 'wishlistadd/' + temp,
             data: 'get',
             datatype: 'json',
             success: function(result) {
                 if (result.data != 'same') {
                     if (result.data == 'success') {
                         alert('Successfully Added To Wishlist');

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
     @endif

     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     jQuery(document).ready(function() {
         jQuery('.search_all').keyup(function() {
             var temp = jQuery('.search_all').val();
            if(temp!=''){
                $.ajax({
                 url: 'search/' + temp,
                 type: 'get',
                 dataType: 'json',
                 success: function(result) {
                jQuery(".search_list").html('');
                     $.each(result.data, function(key, item) {
                         jQuery(".search_list").append('<li class="list-unstyled">' + item.name + '</li>');
                     });
                 }
             });
            }
            else{
                jQuery(".search_list").html('');
            }
         });
         jQuery(document).on('click','.search_list li',function(){
            var res=jQuery(this).text();
            jQuery('.search_all').val(res);
            var res=jQuery('.search_list li').hide();

         });

     });
 </script>


 </body>

 </html>