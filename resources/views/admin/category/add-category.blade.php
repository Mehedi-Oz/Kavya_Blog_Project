@extends('admin.master')

@section('title')
    Add Category
@endsection


@section('content')

    <div class="row py-5">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h4 class="mb-0 text-uppercase text-center">Add Category Form</h4>
                        <div class="text-center">
                            {{session('message')}}
                        </div>
                        <hr/>
                        <form class="row g-3" action="{{route('new-category')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name"
                                       value="{{old('category_name')}}">
                                @error('author_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
