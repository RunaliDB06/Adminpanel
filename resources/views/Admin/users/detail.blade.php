@extends('Admin.Layouts.master')
@section('page')
User Product
@endsection
@section('content')
<div class="content">

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">{{@$order->user->name}}</h4>
                            <p class="category">List of all register user</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> Order ID</th>
                                    <th>Product Name</th>
                                    <th>Address</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                  <tr>
                                    <td>{{@$order->id}}</td>
                                    <td>{{@$order->products[0]->name}}</td>
                                    <td>{{@$order->address}}</td>
                                    <td>{{@$order->OrderItems[0]->quantity}}</td>
                                    <td>{{@$order->OrderItems[0]->price}}</td>
                                    <td>{{@$order->date}}</td>
                                    <td>@if (@$order->status)
                                        <span class="label label-success">Confirmed</span>
                                        @else
                                        <span class="label label-warning">pending</span>
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
