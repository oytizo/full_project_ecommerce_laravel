<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/paymentstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="top">
            <h3>Add new card</h3>
            <hr>
        </div>
        <div class="card-details"> <input type="text" required placeholder="0000 0000 0000 0000" data-slots="0" data-accept="\d" size="19"> <span>Card Number</span> <i class="fa fa-credit-card"></i> </div>
        <div class="exp-cvv">
            <div class="card-details"> <input type="text" required placeholder="mm/yyyy" data-slots="my"> <span>Expiry date</span> <i class="fa fa-calendar"></i> </div>
            <div class="card-details"> <input type="text" required placeholder="000" data-slots="0" data-accept="\d" size="3"> <span>CVV</span> <i class="fa fa-info-circle"></i> </div>
        </div>
        <div class="card-details mt-25"> <input type="text" required placeholder="Enter cardholder's full name"> <span>Card Holder Name</span> </div>
        <div class="tick"> <span><i class="fa fa-check d-none"></i></span>
            <p>Save card</p>
        </div>
        <div class="button"> <a class="btn btn-md btn-primary" href="{{ url('phone-auth') }}">Submit</a> </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/js/payment.js"></script>
</body>
</html>