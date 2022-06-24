@extends('backend/master_template/master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Categories </h4>
                        <h4 class="box-link"><a href="{{ Route('insertcategories') }}">Add Categories </a></h4>
                    </div>

                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#SI.</th>
                                        <th>Categories</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $x=0;
                                    @endphp
                                    @foreach($categories as $cat)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $cat->categories }}</td>
                                        @if($cat->status==1)
                                        <td><button href="" class="btn-sm btn-primary rounded">Active</button></td>
                                        @else
                                        <td><button href="" class="btn-sm btn-secondary rounded">Deactive</button></td>
                                        @endif
                                        <td> 
                                            <a href="{{ Route('editcategories',$cat->id) }}" class="btn-sm btn-primary rounded">Edit</a>
                                            <a href="{{ Route('deletecategories',$cat->id) }}" class="btn-sm btn-danger rounded">Delete</a>
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