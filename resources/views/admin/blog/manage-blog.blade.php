@extends('admin.master')

@section('title')
    Manage Blogs
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h4 class="mb-0 text-uppercase text-center">All Blog List</h4>
                        <hr/>
                        <table class="table table-bordered table-striped table-hover text-center">
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @php $i=1 @endphp

                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{date('g:i A, F j, Y', strtotime($blog->created_at))}}</td>
                                    <td>{{$blog->category->category_name}}</td>
                                    <td>{{$blog->author->author_name}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->slug}}</td>
                                    <td class="text-justify" style="font-size: 10px;">{{$blog->description}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}"
                                             style="height: 50px; width: 50px">
                                    </td>
                                    <td>{{$blog->status==1? 'Published':'Unpublished'}}</td>
                                    <td class="btn-group">
                                        <a href="{{route('edit-blog', ['id'=>$blog->id])}}"
                                           class="btn btn-primary btn-sm">Edit</a>

                                        @if($blog->status==1)
                                            <a href="{{route('status-blog', ['id'=>$blog->id])}}"
                                               class="btn btn-warning btn-sm mx-1">Unpublish</a>
                                        @else
                                            <a href="{{route('status-blog', ['id'=>$blog->id])}}"
                                               class="btn btn-success btn-sm mx-1">Publish</a>
                                        @endif

                                        <form action="{{route('delete-blog')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$blog->id}}">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete"
                                                   onclick="return confirm('Delete this blog? Action cannot be undone!')">
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

