@extends('admin.master')

@section('title')
    Update Author
@endsection


@section('content')

    <div class="row py-5">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h4 class="mb-0 text-uppercase text-center">Update Author Form</h4>
                        <div class="text-center">
                            {{session('message')}}
                        </div>
                        <hr/>
                        <form class="row g-3" action="{{route('update-author')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$author->id}}">

                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" class="form-control" name="author_name"
                                       value="{{$author->author_name}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset($author->image)}}" alt="" class="py-2"
                                     style="height: 100px; width: 100px">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Author</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
