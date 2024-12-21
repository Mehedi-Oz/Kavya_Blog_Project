@extends('frontEnd.master')

@section('title')
    Blog Details
@endsection

@section('content')

    <!-- single layout blog content -->
    <section class="single-layout">
        <div class="container">
            <div class="blog-img-main">
                <img src="{{asset($blog->image)}}" alt="">
            </div>
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="blog-content-wrap">
                        <div class="blog-title-wrap">
                            <div class="author-date">
                                <a class="author" href="#">
                                    <img src="{{asset($blog->author->image)}}" alt=""
                                         class="rounded-circle"/>
                                    <span class="">{{$blog->author->author_name}}</span>
                                </a>
                                <a class="date" href="#">
                                    <span>{{date('F j, Y', strtotime($blog->created_at))}}</span>
                                </a>
                            </div>
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Featured</a>
                                </li>
                                <li class="category-tag-name">
                                    <a href="#">{{$blog->category->category_name}}</a>
                                </li>
                            </ul>
                            <h1 class="title-font">{{$blog->title}}</h1>
                        </div>

                        <div class="blog-desc text-justify">
                            <p>{{$blog->description}}</p>
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et ex quas aliquam est
                                excepturi molestiae non dolor voluptatem voluptatum saepe?
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse molestiae distinctio
                                aliquam sunt dolorem architecto incidunt natus sit et excepturi! Quidem expedita
                                accusantium reiciendis iure magnam possimus excepturi accusamus aut perspiciatis ad
                                ex rem, explicabo, consequuntur ipsum eveniet tenetur aliquid molestias veniam
                                dolores harum adipisci? Enim eaque libero voluptate perspiciatis rem. Unde
                                recusandae, deserunt quo ipsam aliquid sunt cupiditate vero distinctio labore id
                                blanditiis corporis inventore assumenda non, nisi voluptatem aperiam libero officia
                                beatae dignissimos earum ratione explicabo? Adipisci, dolor!</p>
                            <img src="{{asset($blog->image)}}" alt="">

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis dicta repellendus
                                similique deleniti aperiam totam expedita quo eaque itaque saepe aliquid adipisci,
                                voluptates tenetur ab dolorem enim iusto doloremque, possimus quae aliquam? Saepe
                                debitis at officia sunt voluptas beatae molestias quis amet tempora? Autem rerum
                                inventore, excepturi nisi magni, eligendi, saepe nulla corrupti fuga eius deserunt
                                rem labore consectetur repellendus.</p>
                        </div>
                        <div class="tags-wrap">
                            <div class="blog-tags">
                                <p>Tags:</p>
                                <ul class="sidebar-list tags-list">
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">December</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Fun</a></li>
                                </ul>
                            </div>
                            <div class="share-buttons">
                                <p>Share Now:</p>
                                <ul class="share-list">
                                    <li><a href="#"><img src="{{asset('front-end-asset')}}/images/facebook.png" alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('front-end-asset')}}/images/twitter.png"
                                                         alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('front-end-asset')}}/images/pinterest.png"
                                                         alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('front-end-asset')}}/images/messenger.png" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-author-info">
                            <div class="author-img">
                                <img src="{{asset($blog->author->image)}}" alt="">
                            </div>
                            <div class="author-desc">
                                <small>written by</small>
                                <h5>{{$blog->author->author_name}}</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum magni ipsa
                                    fugiat pariatur! </p>
                            </div>
                        </div>
                        <div class="comment-section">
                            <div class="all-response">
                                <a class="btn view-all-btn" data-toggle="collapse" href="#collapseExample" role="button"
                                   aria-expanded="false" aria-controls="collapseExample">
                                    View all comments
                                </a>
                            </div>
                            @foreach($comments as $comment)
                                <div class="collapse" id="collapseExample">
                                    <div class="card comment-card">
                                        <div class="card-body">
                                            <div class="author-date">
                                                <div class="author">
                                                    <img src="{{asset('front-end-asset')}}/images/city-pink.jpg" alt=""
                                                         class="rounded-circle"/>
                                                </div>
                                                <div class="inner-author-date">
                                                    <div class="author">
                                                        <span class="">{{ session('customerName') }}</span>
                                                    </div>
                                                    <div class="date"><span>{{date('F j, Y', strtotime($comment->created_at))}}</span></div>
                                                </div>
                                            </div>
                                            <div class="comment-text mt-2">
                                                <p>{{$comment->comment}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @if(Session::get('customerId'))
                                <form action="{{route('new-comment')}}" class="comment-form" method="post">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                    {{session('message')}}

                                    <h5>Leave a comment</h5>
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                                <textarea rows="7" class="form-control" name="comment"
                                                          placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-solid">Submit</button>
                                </form>
                            @else
                                <div class="text-center pt-4">
                                    <h5>Please <a href="{{route('login-customer')}}">Login</a> or <a
                                            href="{{route('register-customer')}}">Register.</a></h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Layout Blog content end -->

    <!-- Related posts -->
    <section class="related-posts">
        <div class="container">
            <div class="related-title">
                <h3>Related posts</h3>
            </div>
            <div class="row">
                @foreach($relatedBlogs as $relatedBlog)
                    <div class="col-md-6 col-lg-3">
                        <div class="card small-card simple-overlay-card">
                            <a href="#"><img src="{{asset($relatedBlog->image)}}" class="card-img" alt=""/></a>
                            <div class="card-img-overlay">
                                <ul class="category-tag-list mb-0">
                                    <li class="category-tag-name">
                                        <a href="#">{{$relatedBlog->category->category_name}}</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="{{ route('details-blog', ['id' => $relatedBlog->id]) }}">
                                        {{ $relatedBlog->title }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related posts end -->

@endsection
