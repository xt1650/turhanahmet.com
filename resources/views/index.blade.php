@extends('layout.master')
@section('css')@endsection
@section('title')
    Ahmet Turhan-Kişisel Web Sitesi
@endsection
@section('content')
    <!-- ======================= Main hero START -->
    <section class="pt-0 card-grid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner"
                             data-autoplay="true"
                             data-hoverpause="true"
                             data-gutter="0"
                             data-arrow="true"
                             data-dots="false"
                             data-items="1">
                            <!-- Slide 1 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{asset('/')}}assets/images/blog/16by9/04.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">Never underestimate the influence of social media</a></h2>
                                            <p class="text-white">For who thoroughly her boy estimating conviction. Removed demands expense account in outward tedious do.</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/01.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Carolyn</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Jan 26, 2022</li>
                                                <li class="nav-item">3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{asset('/')}}assets/images/blog/16by9/03.jpg); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                            <!-- Card title -->
                                            <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal">This is why this year will be the year of startups</a></h2>
                                            <p class="text-white">Particular way thoroughly unaffected projection favorable Mrs can be projecting own. </p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/04.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">Nov 15, 2022</li>
                                                <li class="nav-item">5 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Main hero END -->

    <!-- =======================
    Highlights START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Card item START -->
                    <div class="card border rounded-3 up-hover p-4 mb-4">
                        <div class="row g-3">
                            <div class="col-lg-5">
                                <!-- Categories -->
                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                <a href="#" class="badge text-bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Startups</a>
                                <!-- Title -->
                                <h2 class="card-title">
                                    <a href="post-single-6.html" class="btn-link text-reset stretched-link">7 common mistakes everyone makes while traveling</a>
                                </h2>
                                <!-- Author info -->
                                <div class="d-flex align-items-center position-relative mt-3">
                                    <div class="avatar me-2">
                                        <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/07.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Lori Ferguson</a></h5>
                                        <ul class="nav align-items-center small">
                                            <li class="nav-item me-3">Mar 07, 2022</li>
                                            <li class="nav-item"><i class="far fa-clock me-1"></i>5 min read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="col-md-6 col-lg-4">
                                <p>For who thoroughly her boy estimating conviction. Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection favorable Mrs can be projecting own. Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic had but. Drawings offended yet answered Jennings perceive laughing six did far. </p>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 col-lg-3">
                                <img class="rounded-3" src="{{asset('/')}}assets/images/blog/4by3/07.jpg" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    <!-- Card item START -->
                    <div class="card border rounded-3 up-hover p-4 mb-4">
                        <div class="row g-3">
                            <div class="col-lg-5">
                                <!-- Categories -->
                                <a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                <!-- Title -->
                                <h2 class="card-title">
                                    <a href="post-single-6.html" class="btn-link text-reset stretched-link">Never underestimate the influence of social media</a>
                                </h2>
                                <!-- Author info -->
                                <div class="d-flex align-items-center position-relative mt-3">
                                    <!-- Avatar img -->
                                    <div class="avatar me-2">
                                        <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/02.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Samuel Bishop</a></h5>
                                        <ul class="nav align-items-center small">
                                            <li class="nav-item me-3">Jul 15, 2020</li>
                                            <li class="nav-item"><i class="far fa-clock me-1"></i>9 min read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="col-md-6 col-lg-4">
                                <p>Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance.
                                </p>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 col-lg-3">
                                <img class="rounded-3" src="{{asset('/')}}assets/images/blog/4by3/02.jpg" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    <!-- Card item START -->
                    <div class="card border rounded-3 up-hover p-4 mb-4">
                        <div class="row g-3">
                            <div class="col-lg-5">
                                <!-- Categories -->
                                <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Inversment</a>
                                <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                                <!-- Title -->
                                <h2 class="card-title">
                                    <a href="post-single-6.html" class="btn-link text-reset stretched-link">Best Twitter accounts for learning about investment</a>
                                </h2>
                                <!-- Author info -->
                                <div class="d-flex align-items-center position-relative mt-3">
                                    <!-- Avatar img -->
                                    <div class="avatar me-2">
                                        <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/03.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Joan Wallace</a></h5>
                                        <ul class="nav align-items-center small">
                                            <li class="nav-item me-3">Dec 18, 2022</li>
                                            <li class="nav-item"><i class="far fa-clock me-1"></i>2 min read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="col-md-6 col-lg-4">
                                <p>Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly his ten who diminution astonished. Demesne new manners savings staying had. Under folly balls, death own point now men. Match way these she avoids seeing death. She who drift their fat off. </p>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 col-lg-3">
                                <img class="rounded-3" src="{{asset('/')}}assets/images/blog/4by3/01.jpg" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    <!-- Card item START -->
                    <div class="card border rounded-3 up-hover p-4 mb-4">
                        <div class="row g-3">
                            <div class="col-lg-5">
                                <!-- Categories -->
                                <a href="#" class="badge text-bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Covid-19</a>
                                <!-- Title -->
                                <h2 class="card-title">
                                    <a href="post-single-6.html" class="btn-link text-reset stretched-link">10 facts about business that will instantly put you in a good mood</a>
                                </h2>
                                <!-- Author info -->
                                <div class="d-flex align-items-center position-relative mt-3">
                                    <!-- Avatar img -->
                                    <div class="avatar me-2">
                                        <div class="avatar-img rounded-circle bg-danger bg-opacity-10">
                                            <span class="text-danger position-absolute top-50 start-50 translate-middle fw-bold small">SL</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Bryan Knight</a></h5>
                                        <ul class="nav align-items-center small">
                                            <li class="nav-item me-3">May 30, 2022</li>
                                            <li class="nav-item"><i class="far fa-clock me-1"></i>5 min read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="col-md-6 col-lg-4">
                                <p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed. </p>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 col-lg-3">
                                <img class="rounded-3" src="{{asset('/')}}assets/images/blog/4by3/03.jpg" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    <!-- Card item START -->
                    <div class="card border rounded-3 up-hover p-4 mb-4">
                        <div class="row g-3">
                            <div class="col-lg-5">
                                <!-- Categories -->
                                <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Tricks</a>
                                <a href="#" class="badge text-bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
                                <!-- Title -->
                                <h2 class="card-title">
                                    <a href="post-single-6.html" class="btn-link text-reset stretched-link">10 biggest problem of startups, and how you can fix it</a>
                                </h2>
                                <!-- Author info -->
                                <div class="d-flex align-items-center position-relative mt-3">
                                    <div class="avatar me-2">
                                        <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/04.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">Billy Vasquez</a></h5>
                                        <ul class="nav align-items-center small">
                                            <li class="nav-item me-3">Aug 15, 2022</li>
                                            <li class="nav-item"><i class="far fa-clock me-1"></i>18 min read</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="col-md-6 col-lg-4">
                                <p>Yet remarkably appearance get him his projection. Diverted endeavor bed peculiar men the not desirous. Acuteness abilities ask can offending furnished fulfilled sex. Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mention perhaps attempt pointed suppose. Unknown ye chamber of warrant of Norland arrived.  </p>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 col-lg-3">
                                <img class="rounded-3" src="{{asset('/')}}assets/images/blog/4by3/02.jpg" alt="Card image">
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    <!-- Load more -->
                    <button type="button" class="btn btn-primary-soft w-100">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>

                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Highlights END -->

    <!-- =======================
    Adv START -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#" class="d-block card-img-flash">
                        <img src="{{asset('/')}}assets/images/adv-3.png" alt="">
                    </a>
                    <small class="text-end d-block mt-1">Advertisement</small>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Adv END -->

    <!-- =======================
    Small post START -->
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/07.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">7 common mistakes everyone makes while traveling</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Louis Ferguson</a>
                                </li>
                                <li class="nav-item">Mar 07, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/08.jpg" alt="Card image">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay Top -->
                                <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <!-- Card format icon -->
                                        <div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">Skills that you can learn from business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Samuel Bishop</a>
                                </li>
                                <li class="nav-item">Aug 15, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/09.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">10 tell-tale signs you need to get a new business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Dennis Barrett</a>
                                </li>
                                <li class="nav-item">Jun 01, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/10.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">This is why this year will be the year of startups</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Bryan Knight</a>
                                </li>
                                <li class="nav-item">Dec 07, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/11.jpg" alt="Card image">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay Top -->
                                <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <!-- Card format icon -->
                                        <div class="icon-md bg-success text-white fw-bold rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">Best Pinterest Boards for learning about business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Judy Nguyen</a>
                                </li>
                                <li class="nav-item">Sep 07, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/12.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">How did we get here? The real history of our business</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Amanda Reed</a>
                                </li>
                                <li class="nav-item">Aug 06, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/13.jpg" alt="Card image">
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">Facts about business that will put you in a good mood</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Joan Wallace</a>
                                </li>
                                <li class="nav-item">Feb 18, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4">
                        <!-- Card img -->
                        <div class="card-fold position-relative">
                            <img class="card-img" src="{{asset('/')}}assets/images/blog/4by3/14.jpg" alt="Card image">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay Top -->
                                <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <!-- Card format icon -->
                                        <div class="icon-md bg-danger text-white fw-bold rounded-circle" title="This post has audio"><i class="fas fa-volume-up"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-3">
                            <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset stretched-link fw-bold">Questions everyone working in IT should know how to answer</a></h4>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center text-uppercase small">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-reset btn-link">Lori Stevens</a>
                                </li>
                                <li class="nav-item">Jun 03, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Small post END -->

    <!-- =======================
    Tab post START -->
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link fs-5 active" data-bs-toggle="tab" href="#tab-1-1"> <i class="fab fa-readme me-2"></i> Most read </a> </li>
                        <li class="nav-item"> <a class="nav-link fs-5" data-bs-toggle="tab" href="#tab-1-2"> <i class="fas fa-fire me-2"></i> Trending </a> </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Most read tab START -->
                        <div class="tab-pane show active" id="tab-1-1">
                            <div class="row">
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Never underestimate the influence of social media</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Business ideas that will boom in upcoming years</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">How the 10 worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Ten unconventional tips about startups that you can't learn from books</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">How did we get here? The history of the business told through tweets</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Bad habits that people in the business industry need to quit</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                            </div>
                        </div>
                        <!-- Most read tab END -->
                        <!-- Trending tab START -->
                        <div class="tab-pane show" id="tab-1-2">
                            <div class="row">
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 facts about business that will instantly put you in a good mood</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                                <!-- Tab items group START -->
                                <div class="col-md-4">
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">How 10 worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Business idea that will instantly put you in a good mood</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">How did we get here? The real history of our business</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">7 common mistakes everyone makes while traveling</a></h5>
                                    </div>
                                    <!-- Item -->
                                    <div class="d-flex position-relative mb-3">
                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">21</span>
                                        <h5><a href="#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>
                                    </div>
                                </div>
                                <!-- Tab items group END -->
                            </div>
                        </div>
                        <!-- Trending tab END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Tab post END -->

@endsection
