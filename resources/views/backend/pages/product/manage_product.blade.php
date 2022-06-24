@extends('backend/master_template/master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-6 offset-md-2">
                <form action="{{ Route('addproduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Categories</label>
                        <select name="categories" id="" class="form-control">
                            <option value="">------Select Category------</option>
                            @foreach($category as $category)
                            <option value="{{ $category->id }}">{{ $category->categories }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">MRP</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="mrp" placeholder="Enter Mrp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="qnt" placeholder="Enter Quantity">
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Short Description</label>
                        <textarea class="form-control"  name="short_desc" id="" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection