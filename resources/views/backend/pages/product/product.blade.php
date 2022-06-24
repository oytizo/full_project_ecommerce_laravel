@extends('backend/master_template/master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Product</h4>
                        <h4 class="box-link"><a href="{{ Route('insertproduct') }}">Add Product</a></h4>
                    </div>

                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#SI.</th>
                                        <th>product Name</th>
                                        <th>Category</th>
                                        <th>mrp</th>
                                        <th>price</th>
                                        <th>image</th>
                                        <th>short_desc</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $x=0;
                                    @endphp
                                    @foreach($product as $product)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $product->name }}</td>
                                        @foreach($category as $categories)
                                          @if($categories->id==$product->cat_id)
                                          <td>{{ $categories->categories }}</td>
                                          @endif
                                        @endforeach
                                        <td>{{ $product->mrp }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td><img src="{{ asset('backend/product_image/'.$product->image) }}" alt=""></td>
                                        <td>{{ $product->short_desc }}</td>                                        
                                        @if($product->status==1)
                                        <td><button href="" class="btn-sm btn-primary rounded">Active</button></td>
                                        @else
                                        <td><button href="" class="btn-sm btn-secondary rounded">Deactive</button></td>
                                        @endif
                                        <td> 
                                            <a href="{{ Route('editproduct',$product->id) }}" class="btn-sm btn-primary rounded">Edit</a>
                                            <a href="{{ Route('deleteproduct',$product->id) }}" class="btn-sm btn-danger rounded">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection