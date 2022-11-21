@php

    $cardImage = '';
        if(!is_null($post['file_info'])){
            $cardImage = (json_decode($post['file_info']))->filename;
        }
//dd($post);
@endphp

@extends('layout.master')

    @section('content')

        <!-- =======================
Inner intro START -->
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-dark-overlay-5 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url({{asset('/').$cardImage}}); background-position: center left; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                <div class="w-100 my-auto">
                                    <!-- Card category -->
                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$post['category_id']}}</a>
                                    <!-- Card title -->
                                    <h2 class="text-white display-5">{{$post['name']}}</h2>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider text-white-force align-items-center justify-content-center">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center text-white position-relative">
                                                    <div class="avatar avatar-sm">
                                                        <img class="avatar-img rounded-circle" src="{{asset('/')}}images/1661711473_75.jpg" alt="avatar"> <!-- Geçici Avatar 1-1-->
                                                    </div>
                                                    <span class="ms-3"> <a href="#" class="stretched-link text-reset btn-link">{{$post['username']}}</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">{{\Carbon\Carbon::create($post['date'])->translatedFormat('d F Y')}}</li>
{{--                                        <li class="nav-item">5 min read</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

        <!-- ======================= Main START -->
        <section class="pt-0">
            <div class="container position-relative" data-sticky-container>
                <div class="row">
                    <!-- Main Content START -->
                    <div class="col-lg-12 mb-5">
                        <p><span class="dropcap bg-dark text-white px-2">{{substr($post['short_description'],0,1)}}</span> {{substr($post['short_description'],1)}}</p>
                        {!! $post['post_body'] !!}
                        <!-- Divider -->
                        <div class="text-center h5 mb-4">. . .</div>

                        <!-- Author info START -->
                        <div class="d-flex p-2 p-md-4 my-3 bg-primary bg-opacity-10 rounded">
                            <!-- Avatar -->
                            <a href="#">
                                <div class="avatar avatar-xxl me-2 me-md-4">
                                    <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/12.jpg" alt="avatar">
                                </div>
                            </a>
                            <!-- Info -->
                            <div>
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="m-0"><a href="#">{{1}}</a></h4>
                                        <small>An editor at Blogzine</small>
                                    </div>
                                    <a href="#" class="btn btn-xs btn-primary-soft">View Articles</a>
                                </div>
                                <p class="my-2">Louis Ferguson is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015.</p>
                                <!-- Social icons -->
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Author info END -->

                        <!-- Comments START -->
                        <div class="mt-5">
                            <h3>5 comments</h3>
                            <!-- Comment level 1-->
                            <div class="my-4 d-flex">
                                <img class="avatar avatar-md rounded-circle float-start me-3" src="{{asset('/')}}assets/images/avatar/01.jpg" alt="avatar">
                                <div>
                                    <div class="mb-2">
                                        <h5 class="m-0">Allen Smith</h5>
                                        <span class="me-3 small">June 11, 2022 at 6:01 am </span>
                                        <a href="#" class="text-body fw-normal">Reply</a>
                                    </div>
                                    <p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                                </div>
                            </div>
                            <!-- Comment children level 2 -->
                            <div class="my-4 d-flex ps-2 ps-md-3">
                                <img class="avatar avatar-md rounded-circle float-start me-3" src="{{asset('/')}}assets/images/avatar/02.jpg" alt="avatar">
                                <div>
                                    <div class="mb-2">
                                        <h5 class="m-0">Louis Ferguson</h5>
                                        <span class="me-3 small">June 11, 2022 at 6:55 am </span>
                                        <a href="#" class="text-body fw-normal">Reply</a>
                                    </div>
                                    <p>Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything. </p>
                                </div>
                            </div>
                            <!-- Comment children level 3 -->
                            <div class="my-4 d-flex ps-3 ps-md-5">
                                <img class="avatar avatar-md rounded-circle float-start me-3" src="{{asset('/')}}assets/images/avatar/01.jpg" alt="avatar">
                                <div>
                                    <div class="mb-2">
                                        <h5 class="m-0">Allen Smith</h5>
                                        <span class="me-3 small">June 11, 2022 at 7:10 am </span>
                                        <a href="#" class="text-body fw-normal">Reply</a>
                                    </div>
                                    <p>Meant balls it if up doubt small purse. </p>
                                </div>
                            </div>
                            <!-- Comment level 2 -->
                            <div class="my-4 d-flex ps-2 ps-md-3">
                                <img class="avatar avatar-md rounded-circle float-start me-3" src="{{asset('/')}}assets/images/avatar/03.jpg" alt="avatar">
                                <div>
                                    <div class="mb-2">
                                        <h5 class="m-0">Frances Guerrero</h5>
                                        <span class="me-3 small">June 14, 2022 at 12:35 pm </span>
                                        <a href="#" class="text-body fw-normal">Reply</a>
                                    </div>
                                    <p>Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>
                                </div>
                            </div>
                            <!-- Comment level 1 -->
                            <div class="my-4 d-flex">
                                <img class="avatar avatar-md rounded-circle float-start me-3" src="{{asset('/')}}assets/images/avatar/04.jpg" alt="avatar">
                                <div>
                                    <div class="mb-2">
                                        <h5 class="m-0">Judy Nguyen</h5>
                                        <span class="me-3 small">June 18, 2022 at 11:55 am </span>
                                        <a href="#" class="text-body fw-normal">Reply</a>
                                    </div>
                                    <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. </p>
                                </div>
                            </div>

                        </div>
                        <!-- Comments END -->
                        <!-- Reply START -->
                        <div>
                            <h3>Yorum Ekleyin</h3>

                            @if(!Auth::check())
                            <small>Yorum Yapmak ve Gönderi Oluşturmak için <a href="{{route('register.show')}}">Üye Ol</a> veya <a href="{{route('login.show')}}">Giriş Yap</a>*</small>
                            @endif
                            <form method="post" action="{{route('post.comment.save')}}" class="row g-3 mt-2">
                                <input  value="{{csrf_token()}}" hidden>
{{--                                <div class="col-md-6">--}}
{{--                                    <label class="form-label">Name *</label>--}}
{{--                                    <input type="text" class="form-control" aria-label="First name">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label class="form-label">Email *</label>--}}
{{--                                    <input type="email" class="form-control">--}}
{{--                                </div>--}}
                                <!-- custom checkbox -->
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                        <label class="form-check-label" for="flexCheckDefault">Save my name and email in this browser for the next time I comment. </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-12">
                                    <label class="form-label">Yorumunuz *</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Yorum Yap</button>
                                </div>
                            </form>
                        </div>
                        <!-- Reply END -->
                    </div>
                    <!-- Main Content END -->


                </div>
            </div>
        </section>
        <!-- =======================
        Main END -->


    @endsection

