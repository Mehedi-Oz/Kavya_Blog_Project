@extends('frontEnd.master')

@section('title')
    Register
@endsection

@section('content')

    <div class="row my-5">
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded font-style-custom">
                        <h3 class="text-center">Register</h3>
                        <h6 class="text-center text-success pt-1">
                            {{session('message')}}
                        </h6>
                        <hr>
                        <form action="{{route('new-customer')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-12 mb-2">
                                    <label for="" class="mt-2">Name: </label>
                                    <input type="text" name="customer_name" class="form-control" placeholder="">
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label for="" class="mt-2">Email: </label>
                                    <input type="email" name="email" class="form-control"
                                           placeholder="">
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label for="" class="mt-2">Phone: </label>
                                    <input type="text" name="phone" class="form-control"
                                           placeholder="">
                                </div>
                                <div class="col-12 col-md-12 mb-2">
                                    <label for="" class="mt-2">Password: </label>
                                    <input type="password" name="password" class="form-control" placeholder="">
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="" class="mt-2">Image: </label>
                                    <input type="file" name="image" class="form-control" placeholder="">
                                </div>
                                <div class="col-12 col-md-12 mb-4">
                                    <button class="form-control btn btn-solid">Register</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
