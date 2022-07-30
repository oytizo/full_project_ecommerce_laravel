<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/paymentstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="card">
            <form action="{{ Route('phone_auth') }}" method="post">
                @csrf
                <div class="top">
                    <h4> <a href="{{ Route('anotherpayment') }}"><span style="color: red;">Another Methods Of Payment</span></a></h4>
                    <h3>Add new card</h3>
                    <hr>
                </div>
                <div class="card-details"> <input type="text" name="cart_no" required placeholder="0000000000000000" data-slots="0" data-accept="\d" size="19"> <span>Card Number</span> <i class=""></i> </div>
                <div class="exp-cvv">
                    <div class="card-details"> <input type="date" name="date"> <span>Expiry date</span>  </div>
                    <div class="card-details"> <input type="text" name="cvv_no"  required placeholder="0000" data-slots="0" data-accept="\d" size="3"> <span>CVV</span> <i class=""></i> </div>
                </div>
                <div class="card-details mt-25"> <input type="text" name="full_name"  required placeholder="Enter cardholder's full name"> <span>Card Holder Name</span> </div>
                <div class=""> <span style="color: black;"></span>
                </div>
                <br>
                <div class="button"> <button class="btn btn-md btn-primary">Submit</button> </div>
        </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"></script>
    <script src="{{ asset('frontend') }}/js/payment.js"></script>
</body>

</html>