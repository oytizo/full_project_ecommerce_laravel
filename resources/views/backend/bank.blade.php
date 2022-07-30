<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/bootstrap.min.css">
</head>

<body>
    <section class="bg-info">
        <div class="container">
            <div class="col-md-5 offset-md-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ Route('bankdata') }}" method="post">
                    @csrf
                    <h2 class="text-center text-light w-100hv">Bank Section</h2>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" value="{{ old('fullname') }}" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Enter Phone Name">
                    </div>
                    <div class="form-group">
                        <label for="birth">Birth Date</label>
                        <input type="date" class="form-control" name="birth" id="birth" value="{{ old('birth') }}" placeholder="Enter Birth Date">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" name="age" id="age" value="{{ old('age') }}" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label for="branchname">Branch Name</label>
                        <input type="text" class="form-control" name="branchname" id="branchname" value="{{ old('branchname') }}" placeholder="Enter Branch Name">
                    </div>
                    <div class="form-group">Cart No.</label>
                        <input type="text" class="form-control" name="cartno" id="cartno" value="{{ old('cartno') }}" placeholder="Enter Cart No.">
                    </div>
                    <div class="form-group">
                        <label for="city">City Name</label>
                        <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}" placeholder="Enter City Name">
                    </div>
                    <div class="form-group">
                        <label for="expair_birth">Expair Date</label>
                        <input type="date" class="form-control" name="expair_date" id="expair_birth" value="{{ old('expair_date') }}" placeholder="Enter Expair Date">
                    </div>
                    <div class="form-group">
                        <label for="cvvno">CVV No.</label>
                        <input type="text" class="form-control" name="cvvno" id="cvvno" value="{{ old('cvvno') }}" placeholder="Enter CVV NO.">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>