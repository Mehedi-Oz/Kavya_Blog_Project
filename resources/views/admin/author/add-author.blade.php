@extends('admin.master')

@section('title')
    Add Author
@endsection

@section('content')

    <div class="row py-5">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h4 class="mb-0 text-uppercase text-center">Add Author Form</h4>
                        <hr/>
                        <form class="row g-3" action="{{route('new-author')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" class="form-control" name="author_name"
                                       value="{{ old('author_name') }}">
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
                                    <button type="submit" class="btn btn-primary">Submit Author</button>
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
