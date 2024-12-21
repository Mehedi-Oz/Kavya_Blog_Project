@extends('admin.master')

@section('title')
    Update Blog
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h4 class="mb-0 text-uppercase  text-center">Update Blog Form</h4>
                        <div class="text-center">
                            {{session('message')}}
                        </div>
                        <hr/>
                        <form class="row g-3" action="{{route('update-blog')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$blog->id}}">

                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select a category</option>
                                    @foreach($categories as $category)
                                        <option
                                                value="{{$category->id}}"{{$category->id==$blog->category_id?'selected':''}}>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author</label>
                                <select name="author_id" id="" class="form-control">
                                    <option value="">Select a author</option>
                                    @foreach($authors as $author)
                                        <option
                                                value="{{$author->id}}"{{$author->id==$blog->author_id?'selected':''}}>{{$author->author_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Blog Title</label>
                                <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{$blog->slug}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control">{{$blog->description}}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset($blog->image)}}" alt="" class="py-2"
                                     style="height: 100px; width: 100px">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
