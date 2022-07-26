@extends('Admin.Layouts.master')
@section('page')
Detail
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Product Detail</h4>
                        <p class="category">List of all stock</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <tbody>

                                <tr>
                                    <th>ID</th>
                                    <td>{{$product->id}}</td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td>{{$product->name}}</td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td>{{$product->description}}</td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>{{$product->price}}</td>
                                </tr>

                                <tr>
                                    <th>Created At</th>
                                    <td>{{$product->created_at}}</td>
                                </tr>

                                <tr>
                                    <th>Updated At</th>
                                    <td>{{$product->updated_at}}</td>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{asset('uploads/'.$product->image)}}" width="100px" height="105px"></td>
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