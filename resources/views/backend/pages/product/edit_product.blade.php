@extends('backend/master_template/master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-6 offset-md-2">
            <form action="{{ Route('updateproduct',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Categories</label>
                        <select name="categories" id="" class="form-control">
                            @foreach($category as $category)
                            @if($category->id==$product->cat_id)
                            <option value="{{ $category->id }}" selected>{{ $category->categories }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->categories }}</option>
                            @endif                           
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">MRP</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="mrp" value="{{ $product->mrp }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="qnt" value="{{ $product->qnt }}">
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Short Description</label>
                        <textarea class="form-control"  name="short_desc" id="" cols="30" rows="10" placeholder="Description">{{ $product->short_desc }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection