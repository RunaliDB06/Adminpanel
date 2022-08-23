@extends('fornt.Layouts.master')

@section('content')

<div class="container">
<div class="col-md-12">

    <div class="card">
        <div class="header">
            <h4 class="title">User Details</h4>
            <p>User Details <a href="{{route('edit.profile')}}">Edit Profile</a></p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <tbody>

                    <tr>
                        <th>ID</th>
                        <td>{{Auth::user()->id}}</td>
                    </tr>

                    <tr>
                        <th>Name</th>
                        <td>{{Auth::user()->name}}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{Auth::user()->email}}</td>
                    </tr>

                    <tr>
                        <th>Registered At</th>
                        <td>{{Auth::user()->created_at}}</td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>
</div>



    <div class="col-md-12">
        {{-- @include('admin.layouts.messege') --}}
        <div class="card">
            <div class="header">
                <h4 class="title">Orders Detail</h4>
                {{-- <p class="category">List of all orders</p> --}}
                {{-- <a href="{{route('orders.details',$order->id)}}" method="post" enctype="multipart/form-data"> --}}

            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($user->order as $order)
                            <td>{{$order->id}}</td>
                            <td>
                                @foreach ($order->products as $item)
                                <table class="table">
                                    <tr>
                                        <td>{{$item->name}}</td>
                                    </tr>
                                </table>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($order->orderItems as $items)
                                <table class="table">
                                    <tr>
                                        <td>{{$items->quantity}}</td>
                                    </tr>
                                </table>

                                @endforeach
                            </td>
                            <td>
                                @foreach ($order->orderItems as $items)
                                <table class="table">
                                    <tr>
                                        <td>RS{{$items->price}}</td>
                                    </tr>
                                </table>

                                @endforeach
                            </td>
                            {{-- <td>
                                @foreach ($order->orderItems as $items)
                                <table class="table">
                                <tr>
                                    <td>{{$items->name}}</td>
                                </tr>
                                </table>

                                @endforeach
                            </td> --}}
                            <td>
                                @if ($order->status)
                                <span class="badge badge-success">Confirmed</span>
                                @else
                                <span class="badge badge-warning">Pending</span>

                                @endif
                            </td>
                            <td>
                                <a href="{{route('profile.details') .'/'.$order->id}}" class="btn btn-outline-dark btn-sm">Details</a>
                            </td>
                            @endforeach
                        </tr>

                        </tbody>
                    </table>
@endsection
