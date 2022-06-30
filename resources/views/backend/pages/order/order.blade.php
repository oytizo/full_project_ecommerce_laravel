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
                                        <th>Phone</th>
                                        <th>Amount</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Transaction_id</th>
                                        <th>Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $x=0;
                                    @endphp
                                    @foreach($order as $order)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>@if($order->status =='Pending')
                                        <a href="{{ Route('updateorder',$order->id) }}" class="btn-sm btn-info rounded">Pending</a>
                                        <a href="{{ Route('deleteorder',$order->id) }}" class="btn-sm btn-danger rounded">Delete</a>
                                             @else
                                             <a href="{{ Route('updateorder1',$order->id) }}" class="btn-sm btn-dark rounded">Success</a>
                                             <a href="{{ Route('deleteorder',$order->id) }}" class="btn-sm btn-danger rounded">Delete</a>
                                             @endif
                                        </td>
                                        <td>{{ $order->transaction_id }}</td>
                                        <td>{{ $order->currency }}</td>
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