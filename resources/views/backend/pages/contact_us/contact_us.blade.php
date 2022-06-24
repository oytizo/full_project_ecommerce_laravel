@extends('backend/master_template/master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#SI.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $x=0;
                                    @endphp
                                    @foreach($contact as $cat)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td>{{ $cat->email }}</td>
                                        <td>{{ $cat->mobile }}</td>
                                        <td>{{ $cat->comment }}</td>
                                        <td> 
                                            <a href="{{ Route('deletecontact',$cat->id) }}" class="btn-sm btn-danger rounded">Delete</a>
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