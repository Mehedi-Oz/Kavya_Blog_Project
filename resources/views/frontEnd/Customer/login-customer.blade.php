@extends('frontEnd.master')

@section('title')
    Sign In
@endsection

@section('content')

    <div class="row my-5">
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded font-style-custom">
                        <h3 class="text-center">Sign In</h3>
                        <h5 class="text-center text-success">
                            {{session('message')}}
                        </h5><hr>

                        <form action="{{route('login-customer')}}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-12 mb-4">
                                    <label for="" class="mt-2">Name: </label>
                                    <input type="text" name="user_name" class="form-control" placeholder="email or phone">
                                </div>
                                <div class="col-12 col-md-12 mb-4">
                                    <label for="" class="mt-2">Password: </label>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                <div class="col-12 col-md-12 mb-4">
                                    <button class="form-control btn btn-solid">Log In</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
