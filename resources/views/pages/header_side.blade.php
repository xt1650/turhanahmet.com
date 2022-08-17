<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{asset('/')}}index-2.html">
                <img class="navbar-brand-item light-mode-item" src="{{asset('/')}}assets/images/logo.svg" alt="logo">
                <img class="navbar-brand-item dark-mode-item" src="{{asset('/')}}assets/images/logo-light.svg" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main navbar START -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Nav Search START -->
                <div class="nav mt-3 mt-lg-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="rounded position-relative">
                            <input class="form-control pe-5 bg-light" type="search" placeholder="Search the blog" aria-label="Search">
                            <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
                <ul class="navbar-nav navbar-nav-scroll ms-auto">

                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu" aria-labelledby="homeMenu">
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-2.html">Home default</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-lazy.html">Home lazy load</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-3.html">Magazine classic</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-4.html">Magazine</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-5.html">Home cards</a></li>
                            <li> <a class="dropdown-item active" href="{{asset('/')}}index-6.html">Blog classic</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-7.html">Blog Personal </a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-8.html">Blog Vintage</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-9.html">Blog Tech</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-10.html">Blog Fashion</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-11.html">Blog Podcast</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}index-12.html">Home Shop <span class="badge bg-danger smaller me-1">New</span></a></li>
                        </ul>
                    </li>

                    <!-- Nav item 2 Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            <li> <a class="dropdown-item" href="{{asset('/')}}about-us.html">About</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}contact-us.html">Contact</a></li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Shop <span class="badge bg-danger smaller me-1">New</span></a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{asset('/')}}shop-grid.html">Shop grid <span class="badge bg-danger smaller me-1">New</span></a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}shop-detail.html">Shop detail <span class="badge bg-danger smaller me-1">New</span></a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}checkout.html">Checkout <span class="badge bg-danger smaller me-1">New</span></a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}my-cart.html">Cart <span class="badge bg-danger smaller me-1">New</span></a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}empty-cart.html">Empty cart <span class="badge bg-danger smaller me-1">New</span></a> </li>
                                </ul>
                            </li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{asset('/')}}author.html">Author Page</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}categories.html">Category page 1</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}categories-2.html">Category page 2</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}tag.html"># tag</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}search-result.html">Search result</a> </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}404.html">Error 404</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}signin.html">signin</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}signup.html">signup</a></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}offline.html">offline</a></li>
                            <!-- Dropdown submenu levels -->
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                                    <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{asset('/')}}docs/index.html" target="_blank">
                                    <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{asset('/')}}rtl/index.html" target="_blank">
                                    <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
                                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item 3 Post -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
                        <ul class="dropdown-menu" aria-labelledby="postMenu">
                            <!-- dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Post grid</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{asset('/')}}post-grid.html">Post grid</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}post-grid-4-col.html">Post grid 4 col</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}post-grid-masonry.html">Post grid masonry</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}post-grid-masonry-filter.html">Post grid masonry filter</a> </li>
                                    <li> <a class="dropdown-item" href="{{asset('/')}}post-large-and-grid.html">Post mixed large than grid</a> </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-list.html">Post list</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-list-2.html">Post list 2</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-cards.html">Post card</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-overlay.html">Post Overlay</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-types.html">Post types</a> </li>
                            <li class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-single.html">Post single magazine</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-single-2.html">Post single classic</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-single-3.html">Post single minimal</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-single-4.html">Post single card</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-single-5.html">Post single review</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}post-single-6.html">Post single video</a> </li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}podcast-single.html">Podcast single</a> </li>
                            <li class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="{{asset('/')}}pagination-styles.html">Pagination styles</a> </li>
                        </ul>
                    </li>

                    <!-- Nav item 4 Mega menu -->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
                        <div class="dropdown-menu" aria-labelledby="megaMenu">
                            <div class="container">
                                <div class="row g-4 p-3 flex-fill">
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded" src="{{asset('/')}}assets/images/blog/16by9/small/01.jpg" alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">Joan Wallace</a>
                                                    </li>
                                                    <li class="nav-item">Feb 18, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded" src="{{asset('/')}}assets/images/blog/16by9/small/02.jpg" alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">Lori Stevens</a>
                                                    </li>
                                                    <li class="nav-item">Jun 03, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded" src="{{asset('/')}}assets/images/blog/16by9/small/03.jpg" alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">Judy Nguyen</a>
                                                    </li>
                                                    <li class="nav-item">Sep 07, 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="bg-primary bg-opacity-10 p-4 text-center h-100 w-100 rounded">
                                            <span>The Blogzine</span>
                                            <h3>Premium Membership</h3>
                                            <p>Become a Member Today!</p>
                                            <a href="#" class="btn btn-warning">View pricing plans</a>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                </div> <!-- Row END -->
                                <!-- Trending tags -->
                                <div class="row px-3">
                                    <div class="col-12">
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">Trending tags:</li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
                                        </ul>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>
                    </li>

                    <!-- Nav item 5 link-->
                    <li class="nav-item"> <a class="nav-link" href="{{asset('/')}}dashboard.html">Dashboard</a></li>
                </ul>
            </div>
            <!-- Main navbar END -->
            <!-- Dark mode switch -->
            <div class="modeswitch ms-4" id="darkModeSwitch">
                <div class="switch"></div>
            </div>
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->
