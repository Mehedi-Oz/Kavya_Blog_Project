<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i
                        class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Category">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-category" type="button"><i
                        class="bi bi-diagram-3"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Author">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-author" type="button"><i
                        class="bi bi-person-fill-gear"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-blog" type="button"><i
                        class="bi bi-journal-richtext"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <a href="{{route('dashboard')}}"> <img src="{{asset('admin-asset')}}/images/brand-logo-2.png" width="140"
                                                   alt=""/></a>

        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboard</h5>
                        </div>
                        <small class="mb-0">Admin Dashboard</small>
                    </div>
                    <a href="{{route('dashboard')}}" class="list-group-item"><i
                            class="bi bi-cart-plus"></i>Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-category">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Category</h5>
                        </div>
                        <small class="mb-0">The Blog Category Section</small>
                    </div>
                    <a href="{{route('add-category')}}" class="list-group-item"><i class="bi bi-diagram-2"></i>Add
                        Category</a>
                    <a href="{{route('manage-category')}}" class="list-group-item"><i class="bi bi-diagram-2-fill"></i>Manage
                        Category</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-author">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Author</h5>
                        </div>
                        <small class="mb-0">The Author Section</small>
                    </div>
                    <a href="{{route('add-author')}}" class="list-group-item"><i class="bi bi-person-video"></i>Add
                        Author</a>
                    <a href="{{route('manage-author')}}" class="list-group-item"><i class="bi bi-person-video2"></i>Manage
                        Author</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog</h5>
                        </div>
                        <small class="mb-0">The Blog Section</small>
                    </div>
                    <a href="{{route('add-blog')}}" class="list-group-item"><i class="bi bi-list-columns"></i>Add
                        Blog</a>
                    <a href="{{route('manage-blog')}}" class="list-group-item"><i class="bi bi-list-columns-reverse"></i>Manage
                        Blog</a>
                </div>
            </div>
        </div>
    </div>
</aside>
