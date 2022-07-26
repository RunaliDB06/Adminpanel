@extends('Admin.Layouts.master')
@section('page')
View Product
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <strong>{{session()->get('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </div>

            @endif
            <div class="card">
                <div class="header">
                    <h4 class="title">All Products</h4>
                    <p class="category">List of all stock</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Desc</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ( $products as $product )


                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td><img src="{{asset('uploads/'.$product->image)}}" width="100px" height="100px" alt="" class="img-thumbnail"></td>
                            <td>
                                <a href="{{route('edit',$product->id)}}"><button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button></a>
                                <a href="{{route('delete',$product->id)}}"><button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                               <a href="{{route('products.details',$product->id)}}">
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button></a>
                            </td>
                        </tr>
                        {{-- <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td><img src="assets/img/favicon.png" alt="" class="img-thumbnail"
                                     style="width: 50px"></td>
                            <td>
                                <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button>
                                <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button>
                                <button class="btn btn-sm btn-primary ti-view-list-alt"
                                        title="Details"></button>
                            </td>
                        </tr> --}}
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
