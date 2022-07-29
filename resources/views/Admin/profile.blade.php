 @extends('Admin.Layouts.master')
@section('page')
Profile
@endsection
@section('content')
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Form</h4>
                            </div>
                            <div class="content">
                                <form action={{route('Admin.profile.store')}} method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input type="text" class="form-control border-input" name="name" placeholder="name" value="{{$user->name}}">
                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control border-input" name="email" placeholder="email" value="{{$user->email}}">
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control border-input" name="password" placeholder="password" value="{{$user->password}}">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
