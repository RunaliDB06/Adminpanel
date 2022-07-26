@extends('Admin.Layouts.master')
@section('page')
Orders Details
@endsection
@section('content')
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <strong>{{session()->get('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-lable="close">
                <span aria-hidden="true">&times;</span>
            </div>
            @endif

            <div class="card">
                <div class="header">
                    <h4 class="title">Orders</h4>
                    <p class="category">List of all Order</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Actions</th>
                            {{-- <th>Details</th> --}}
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($order as $order )

                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{@$order->user->name}}</td>

                                <td>
                                    {{-- product is function name in order.php and  --}}
                                    @foreach ($order->products as $item )
                                    {{$item->name}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($order->OrderItems as $item )
                                          {{$item->quantity}}

                                    @endforeach
                                </td>
                                {{-- <td>

                                </td> --}}
                                <td>@if ($order->status)
                                    <span class="label label-success">Confirmed</span>
                                    @else
                                    <span class="label label-warning">pending</span>
                                    @endif
                                </td>

                                <td>
                                    {{-- @if ($order->status)
                                   <a href="{{route('orders.pending',$order->id)}}"> <button type="button" class="btn btn-danger"> Pending</button></a>
                                    @else
                                 <a href="{{route('orders.confirm',$order->id)}}">  <button type="button" class="btn btn-success"> Confirm</button></a>
                                    @endif --}}

                                 <a href="{{route('orders.details',$order->id)}}">  <button type="button" class="btn btn-success"> Details</button></a>
                                </td>
                            </tr>

                            @endforeach
                            {{-- <tr>
                                <td>2</td>
                                <td>Dakota</td>
                                <td>Macbook pro</td>
                                <td>1</td>
                                <td>12/33,UK</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-success ti-check"
                                            title="Confirm Order"></button>

                                    <button class="btn btn-sm btn-primary ti-view-list-alt"
                                            title="Details"></button>
                                </td>
                            </tr> --}}

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
