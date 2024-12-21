@extends('frontEnd.master')

@section('title')
     PC Builder
@endsection

@section('content')

    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-carousel">
                @foreach($blogs as $blog)
                    <div class="banner-item">
                        <div class="card">
                            <a href=""><img src="{{asset($blog->image)}}" class="card-img" alt=""/></a>
                            <div class="card-img-overlay banner-text">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">{{$blog->category->category_name}}</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="{{route('details-blog', ['id'=>$blog->id])}}">{{$blog->slug}}</a>
                                </h5>
                                <p class="card-text mb-3">
                                    {{$blog->title}}
                                </p>
                                <a href="{{route('details-blog', ['id'=>$blog->id])}}" class="btn btn-solid btn-read">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="more-content-grid">
                <div class="row">
                    @foreach($blogs->reverse()->take(3) as $blog)
                        <div class="col-md-4 py-2">
                            <div class="card simple-overlay-card mt-0">
                                <a href="{{route('details-blog', ['id'=>$blog->id])}}"><img
                                        src="{{asset($blog->image)}}"
                                        class="card-img" alt=""/></a>
                                <div class="card-img-overlay">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">{{$blog->category->category_name}}</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font">
                                        <a href="{{route('details-blog', ['id'=>$blog->id])}}">{{$blog->title}}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section end -->

    <!-- Featured Posts -->
    <section class="featured-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Featured posts</h2>
            </div>
            <div class="row no-gutters">
                @foreach($blogs->random(3) as $index => $blog)
                    @if($index == 0)
                        <div class="col-md-3">
                            <div class="card border-0 card-350">
                                <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                    <img src="{{ asset($blog->image) }}" class="card-img-top" alt=""/>
                                </a>
                                <div class="card-body px-0">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">{{ $blog->category->category_name }}</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font">
                                        <a href="{{route('details-blog', ['id'=>$blog->id])}}">{{ $blog->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @elseif($index == 1)
                        <div class="col-md-6">
                            <div class="card mx-md-4 border-0 card-500">
                                <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                    <img src="{{ asset($blog->image) }}" class="card-img" alt=""/>
                                </a>
                                <div class="card-img-overlay">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">{{ $blog->category->category_name }}</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font">
                                        <a href="{{route('details-blog', ['id'=>$blog->id])}}">{{ $blog->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-3">
                            <div class="card card-350 border-0">
                                <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                    <img src="{{ asset($blog->image) }}" class="card-img-top" alt=""/>
                                </a>
                                <div class="card-body px-0">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">{{ $blog->category->category_name }}</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font">
                                        <a href="{{route('details-blog', ['id'=>$blog->id])}}">{{ $blog->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured posts end -->

    <!-- Kavya posts -->
    <section class="kavya-posts popular">
        <div class="container">
            <div class="section-title">
                <h2>Popular Posts</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="posts-wrapper">
                        <div class="row">
                            @foreach($blogs->random(5) as $index=>$blog)
                                @if($index==0)
                                    <div class="col-lg-8">
                                        <div class="card card-350">
                                            <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}"
                                                     class="card-img-top" alt=""/>
                                            </a>
                                            <div class="card-body px-0">
                                                <ul class="category-tag-list">
                                                    <li class="category-tag-name">
                                                        <a href="#">{{$blog->category->category_name}}</a>
                                                    </li>
                                                    {{--                                                    <li class="category-tag-name">--}}
                                                    {{--                                                        <a href="#">Lifestyle</a>--}}
                                                    {{--                                                    </li>--}}
                                                </ul>
                                                <h5 class="card-title title-font">
                                                    <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                        {{$blog->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($index == 1)
                                    <div class="col-lg-4">
                                        <div class="card card-350">
                                            <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}"
                                                     class="card-img-top" alt=""/>
                                            </a>
                                            <div class="card-body px-0">
                                                <ul class="category-tag-list">
                                                    <li class="category-tag-name">
                                                        <a href="#">{{$blog->category->category_name}}</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font">
                                                    <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                        {{$blog->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($index == 2)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}"
                                                     class="card-img-top"
                                                     alt=""/>
                                            </a>
                                            <div class="card-body px-0">
                                                <ul class="category-tag-list">
                                                    <li class="category-tag-name">
                                                        <a href="#">{{$blog->category->category_name}}</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font">
                                                    <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                        {{$blog->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($index == 3)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}"
                                                     class="card-img-top"
                                                     alt=""/>
                                            </a>
                                            <div class="card-body px-0">
                                                <ul class="category-tag-list">
                                                    <li class="category-tag-name">
                                                        <a href="#">{{$blog->category->category_name}}</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font">
                                                    <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                        {{$blog->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($index == 4)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}"
                                                     class="card-img-top"
                                                     alt=""/>
                                            </a>
                                            <div class="card-body px-0">
                                                <ul class="category-tag-list">
                                                    <li class="category-tag-name">
                                                        <a href="#">{{$blog->category->category_name}}</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font">
                                                    <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                        {{$blog->title}}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="sidebar-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Recent Posts</h5>
                        </div>
                        <div class="sidebar-content author-posts">
                            @foreach($blogs->random(5) as $blog)
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-md-4">
                                            <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}"
                                                     class="card-img" alt="">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-8">
                                            <div class="card-body">
                                                <ul class="category-tag-list mb-0">
                                                    <li class="category-tag-name">
                                                        <a href="#">{{$blog->category->category_name}}</a>
                                                    </li>
                                                </ul>
                                                <h5 class="card-title title-font"><a
                                                        href="{{route('details-blog', ['id'=>$blog->id])}}">Pc
                                                        Component</a>
                                                </h5>
                                                <div class="author-date">
                                                    <a class="date" href="#">
                                                        <span>{{date('g:i A, F j, Y', strtotime($blog->created_at))}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kavya posts end -->

    <!-- Popular Posts -->
    <section class="popular-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>More from Startech</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    @foreach($blogs->random(3) as $blog)
                        <div class="card mb-4">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-4">
                                    <a href="{{route('details-blog', ['id'=>$blog->id])}}">
                                        <img src="{{asset($blog->image)}}" class="card-img" alt="">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">{{$blog->category->category_name}}</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font"><a
                                                href="{{route('details-blog', ['id'=>$blog->id])}}">{{$blog->title}}</a>
                                        </h5>
                                        <p class="card-text">{{substr($blog->description, 0, 100)}}
                                        <p>
                                        <div class="author-date">
                                            <a class="author" href="#">
                                                <img src="{{asset($blog->author->image)}}" alt=""
                                                     class="rounded-circle"/>
                                                <span class="writer-name-small">{{$blog->author->author_name}}</span>
                                            </a>
                                            <a class="date" href="#">
                                                <span>{{date('g:i A, F j, Y', strtotime($blog->created_at))}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="recent-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Trending this week</h5>
                        </div>
                        <div class="sidebar-content">
                            <ul class="sidebar-list">
                                @foreach($blogs->random(5) as $blog)
                                    <li class="sidebar-item">
                                        <div class="num-left">
                                            1
                                        </div>
                                        <div class="content-right">
                                            <a href="{{route('details-blog', ['id'=>$blog->id])}}">{{$blog->title}}</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="instagram-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Instagram Posts</h5>
                        </div>
                        <div class="sidebar-content">
                            <div class="row no-gutters">
                                @foreach($blogs->random(6) as $blog)
                                    <div class="col-6 col-lg-4">
                                        <div class="image-item insta-item">
                                            <a href="#"> <img src="{{$blog->image}}"
                                                              alt=""></a>
                                            <a href="#">
                                                <div class="image-hover">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-12">
                                    <div class="insta-link">
                                        <a href="#" target="_blank" class=" btn-solid">Follow us <i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular posts end -->

@endsection
