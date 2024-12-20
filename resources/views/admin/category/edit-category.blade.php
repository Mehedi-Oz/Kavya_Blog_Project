@extends('admin.master')

@section('title')
    Update Category
@endsection

@section('content')

    <div class="row py-5">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h4 class="mb-0 text-uppercase text-center">Update Category Form</h4>
                        <div class="text-center">
                            {{session('message')}}
                        </div>
                        <hr/>
                        <form class="row g-3" action="{{route('update-category')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">

                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name"
                                       value="{{$category->category_name}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset($category->image)}}" alt="" class="py-2"
                                     style="height: 100px; width: 100px">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                    <div class="text-center">
                                        {{session('message')}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
