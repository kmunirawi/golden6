@extends('dashboard.master')
@section('title')
    Create User
@endsection
@section('content')
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('users.store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMobile">Mobile</label>
                        <input type="text" name="mobile" class="form-control" id="exampleInputMobile"
                            placeholder="Enter Mobile">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Enter Email">
                    </div>

                    
                        <!-- radio -->
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="1">
                            <label class="form-check-label">Male</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="2">
                            <label class="form-check-label">Female</label>
                          </div>
                        </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    @endsection
