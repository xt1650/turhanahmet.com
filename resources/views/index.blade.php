@php
    $cardImage = '';
    $cardImageHigh = '';

@endphp
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
                            @foreach($slider as $key=>$value)
                                @if(!is_null($value['file_info']))
                                        {{$cardImage = (json_decode($value['file_info']))->filename}}
                                @endif
{{--                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{asset('/')}}assets/images/blog/16by9/04.jpg); background-position: center left; background-size: cover;">--}}
                            <div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url({{asset('/').$cardImage}}); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5">
                                    <div class="w-100 mt-auto">
                                        <div class="col-md-10 col-lg-7">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$value['category_id']}}</a>
                                            <!-- Card title -->
{{--                                            <h2 class="text-white display-5"><a href="{{route('show.post',['post_name'=>str_replace(' ','-',strtolower($value['name'])).'-'.$value['id']])}}" class="btn-link text-reset fw-normal">{{$value['name']}}</a></h2>--}}
                                            <h2 class="text-white display-5"><a href="{{route('show.post',['post_name'=>str_replace(' ','-',strtolower($value['name'])),'post_id'=>encrypt($value['id'])])}}" class="btn-link text-reset fw-normal">{{$value['name']}}</a></h2>
                                            <p class="text-white">{{$value['short_description']}}</p>
                                            <!-- Card info -->
                                            <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle" src="{{asset('/')}}assets/images/avatar/01.jpg" alt="avatar">
                                                            </div>
                                                            <span class="ms-3"> <a href="#" class="stretched-link text-reset btn-link">{{$value['username']}}</a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">{{ \Carbon\Carbon::create($value['date'])->translatedFormat('d F Y')}}</li>
{{--                                                <li class="nav-item">3 min read</li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Main hero END -->

    <!-- ======================= Highlights START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Card item START -->
                    @foreach($highlights as $key=>$value)

                    <div class="card border rounded-3 up-hover p-4 mb-4">
                        <div class="row g-3">
                            <div class="col-lg-5">
                                <!-- Categories -->
                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$value['category_id']}}</a>
{{--                                <a href="#" class="badge text-bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Startups</a>--}}
                                <!-- Title -->
                                <h2 class="card-title">
                                    <a href="{{route('show.post',['post_name'=>str_replace(' ','-',strtolower($value['name'])),'post_id'=>encrypt($value['id'])])}}" class="btn-link text-reset stretched-link">{{$value['name']}}</a>
                                </h2>
                                <!-- Author info -->
                                <div class="d-flex align-items-center position-relative mt-3">
                                    <div class="avatar me-2">
                                        <img class="avatar-img rounded-circle" src="{{asset('/')}}images/1661711473_75.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><a href="#" class="stretched-link text-reset btn-link">{{$value['username']}}</a></h5>
                                        <ul class="nav align-items-center small">
                                            <li class="nav-item me-3">{{\Carbon\Carbon::create($value['date'])->translatedFormat('d F Y')}}</li>
{{--                                            <li class="nav-item"><i class="far fa-clock me-1"></i>5 min read</li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail -->
                            <div class="col-md-6 col-lg-4">
                                <p>{{$value['short_description']}}</p>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 col-lg-3">
                                @if(!is_null($value['file_info']))
                                    <img class="rounded-3" src="{{asset('/').((json_decode($value['file_info']))->filename)}}" alt="Card image">
                                @endif

                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Card item END -->
                    <!-- Load more -->
{{--                    <button type="button" class="btn btn-primary-soft w-100">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>--}}

                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Highlights END -->



{{--    <!-- =======================--}}
{{--    Tab post START -->--}}
{{--    <section class="pt-4 pb-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <ul class="nav nav-tabs">--}}
{{--                        <li class="nav-item"> <a class="nav-link fs-5 active" data-bs-toggle="tab" href="#tab-1-1"> <i class="fab fa-readme me-2"></i> Most read </a> </li>--}}
{{--                        <li class="nav-item"> <a class="nav-link fs-5" data-bs-toggle="tab" href="#tab-1-2"> <i class="fas fa-fire me-2"></i> Trending </a> </li>--}}
{{--                    </ul>--}}
{{--                    <div class="tab-content">--}}
{{--                        <!-- Most read tab START -->--}}
{{--                        <div class="tab-pane show active" id="tab-1-1">--}}
{{--                            <div class="row">--}}
{{--                                <!-- Tab items group START -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Never underestimate the influence of social media</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Business ideas that will boom in upcoming years</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">How the 10 worst business fails of all time could have been prevented</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Ten unconventional tips about startups that you can't learn from books</a></h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Tab items group END -->--}}
{{--                                <!-- Tab items group START -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">How did we get here? The history of the business told through tweets</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Bad habits that people in the business industry need to quit</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Tab items group END -->--}}
{{--                                <!-- Tab items group START -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Tab items group END -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Most read tab END -->--}}
{{--                        <!-- Trending tab START -->--}}
{{--                        <div class="tab-pane show" id="tab-1-2">--}}
{{--                            <div class="row">--}}
{{--                                <!-- Tab items group START -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 facts about business that will instantly put you in a good mood</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Around the web: 20 fabulous info-graphics about business</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">The most common business debate isn't as black and white as you might think</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">The business debate isn't as black and white as you might think</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">12 worst types of business accounts you follow on Twitter</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">7 lessons that will teach you all you need to know a startup</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">07</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Tab items group END -->--}}
{{--                                <!-- Tab items group START -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">08</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">8 initial problem of startups and their solution</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">09</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">This is why this year will be the year of startups</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">10</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Dirty little secrets about the business industry</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">11</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 biggest problem of startups, and how you can fix it</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">12</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">The no. 1 question everyone working in business should know how to answer</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">13</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Twitter accounts for learning about investment</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">14</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Best Pinterest Boards for learning about business</a></h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Tab items group END -->--}}
{{--                                <!-- Tab items group START -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">15</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">10 tell-tale signs you need to get a new business</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">16</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">How 10 worst business fails of all time could have been prevented</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">17</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Questions everyone working in IT should know how to answer</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">18</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Business idea that will instantly put you in a good mood</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">19</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">How did we get here? The real history of our business</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">20</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">7 common mistakes everyone makes while traveling</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <!-- Item -->--}}
{{--                                    <div class="d-flex position-relative mb-3">--}}
{{--                                        <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">21</span>--}}
{{--                                        <h5><a href="#" class="stretched-link text-reset btn-link">Worst business fails of all time could have been prevented</a></h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Tab items group END -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Trending tab END -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- =======================--}}
{{--    Tab post END -->--}}

@endsection
@section('scripts')
<script>
    var home = document.getElementById('home');
    home.classList.add('active');
</script>
@endsection
