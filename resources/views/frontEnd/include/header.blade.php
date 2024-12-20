<header>
    <!-- Top header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class=" social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="search-wrapper">
                        <div class="search-icon">
                            <button class="open-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="sidebar-icon">
                            <button class="sidebar-btn"><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top header end -->

    <!-- Bottom header -->
    <div class="bottom-header">
        <div class="container">
            <div class="brand-name">
                <a href="{{route('home')}}">
                    <h1>Pc Builder</h1>
                </a>
            </div>
        </div>

        <!-- Navbar -->
        <div class="kavya-navbar" id="sticky-top">
            <div class="container">
                <nav class="nav-menu-wrapper">
              <span class="navbar-toggle" id="navbar-toggle">
                <i class="fas fa-bars"></i>
              </span>
                    <div class="sticky-logo">
                        <a href="{{route('home')}}">
                            <p>Pc Builder</p>
                        </a>
                    </div>
                    <ul class="nav-menu ml-auto mr-auto" id="nav-menu-toggle">
                        <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Categories <span class="arrow-icon"> <span
                                        class="left-bar"></span>
                      <span class="right-bar"></span></span>
                            </a>
                            <ul class="drop-menu">
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Food</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Technology</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Fashion</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Women</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Lifestyle</a></li>
                            </ul>
                        </li>
                        <li class="nav-item drop-arrow"><a href="#" class="nav-link">Pages <span
                                    class="arrow-icon"> <span
                                        class="left-bar"></span>
                   <span class="right-bar"></span></span></a>
                            <ul class="drop-menu">
                                <li class="drop-menu-item"><a href="{{route('home')}}">Home Page One</a></li>
                                <li class="drop-menu-item"><a href="index2.html">Home Page Two</a></li>
                                <li class="drop-menu-item"><a href="index3.html">Home Page Three</a></li>
                                <li class="drop-menu-item"><a href="index4.html">Home Page Dark</a></li>
                                <li class="drop-menu-item"><a href="index5.html">Home Page RTL</a></li>
                                <li class="drop-menu-item"><a href="404.html">404 Error Page One</a></li>
                                <li class="drop-menu-item"><a href="404-text.html">404 Error Page Two</a></li>
                                <li class="drop-menu-item"><a href="search.html">Search Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item drop-arrow"><a href="#" class="nav-link">Layout <span
                                    class="arrow-icon"> <span
                                        class="left-bar"></span>
                    <span class="right-bar"></span></span></a>
                            <ul class="drop-menu">
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Archive Layout One</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-two.html">Archive Layout Two</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-three.html">Archive Layout Three</a>
                                </li>
                                <li class="drop-menu-item"><a href="archive-layout-four.html">Archive Layout Four</a>
                                </li>
                                <li class="drop-menu-item"><a href="single-layout-one.html">Single Layout One</a></li>
                                <li class="drop-menu-item"><a href="single-layout-two.html">Single Layout Two</a></li>
                                <li class="drop-menu-item"><a href="single-layout-three.html">Single Layout Three</a>
                                </li>
                                <li class="drop-menu-item"><a href="single-layout-four.html">Single Layout Four</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="sticky-search">
                        <div class="search-wrapper">
                            <div class="search-icon">
                                <button class="open-search-btn"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="sidebar-icon">
                                <button class="sidebar-btn"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar end -->
    </div>
    <!-- Bottom header end -->

    <!-- Search overlay -->
    <div id="search-overlay" class="search-section">
        <span class="closebtn"><i class="fas fa-times"></i></span>
        <div class="overlay-content">
            <form>
                <input type="text" placeholder="Search here" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Search overlay end -->

    <!-- Sticky sidebar -->
    <div class="sticky-sidebar">
        <div class="sticky-sidebar-content">
            <div class="close-sidebar ml-auto">
                <i class="fas fa-times"></i>
            </div>
            @if(Session::get('customerId'))
                <h3>About the Author</h3>

                <div class="author-img">
                    <img src="{{asset('front-end-asset')}}/images/alone.jpg" alt="">
                </div>
                <div class="author-desc">
                    <h5 class="mb-2">{{Session::get('customerName')}}</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequuntur vel quo, quae
                        aliquam esse
                        facere eveniet magnam rerum! Quo itaque ipsa a ipsum quaerat optio illo ducimus dolores in!</p>
                </div>
                <div class="circular-icons social-links">
                    <ul>
                        <a href="{{route('customer-logout')}}" class="btn btn-danger">Logout</a>
                    </ul>
                </div>
            @else
                <h3>Sign Up</h3>
                <a href="{{route('register')}}" class="btn btn-outline-primary btn-sm">Sign Up As Admin</a>
                <a href="{{route('register-customer')}}" class="btn btn-outline-primary btn-sm">Sign Up As User</a>

                <h5 class="my-5">Already have an account?</h5>

                <h3>Sign In</h3>
                <a href="{{route('login')}}" class="btn btn-outline-success btn-sm">Sign In As Admin</a>
                <a href="{{route('login-customer')}}" class="btn btn-outline-success btn-sm">Sign In As User</a>
            @endif
            <div class="author-posts">
                <h3>Most viewed</h3>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{asset('front-end-asset')}}/images/time.jpg" class="card-img" alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">

                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Making time for
                                        travel</a>
                                </h5>
                                <div class="author-date">

                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{asset('front-end-asset')}}/images/alone.jpg" class="card-img" alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">It's okay to be
                                        alone
                                        sometimes</a>
                                </h5>
                                <div class="author-date">
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{asset('front-end-asset')}}/images/forest.jpg" class="card-img" alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">travel</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Conserve
                                        Forest</a>
                                </h5>
                                <div class="author-date">
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4">
                            <a href="single-layout-one.html">
                                <img src="{{asset('front-end-asset')}}/images/beach-sea.jpg" class="card-img"
                                     alt="">
                            </a>
                        </div>
                        <div class="col-8 col-md-8">
                            <div class="card-body">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">Beach is my
                                        favourite place</a>
                                </h5>
                                <div class="author-date">
                                    <a class="date" href="#">
                                        <span>21 Dec, 2019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sticky sidebar end -->

    <div class="body-overlay"></div>
</header>
