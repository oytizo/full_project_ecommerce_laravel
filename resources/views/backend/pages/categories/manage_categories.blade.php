@extends('backend/master_template/master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-6 offset-md-2">
                <form action="{{ Route('addcategories') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Categories</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="categories" placeholder="Enter Categories Name">
                    </div>          
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection