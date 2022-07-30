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
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $x=0;
                                    @endphp
                                    @foreach($userinfo as $userinfo)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $userinfo->id }}</td>
                                        <td>{{ $userinfo->name }}</td>
                                        <td>{{ $userinfo->email }}</td>
                                        <td><a class="btn btn-danger" href="{{ Route('deleteuser',$userinfo->id) }}">Delete</a></td>
                                        <!-- <td> 
                                        </td> -->
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