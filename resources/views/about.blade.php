{{--@php--}}
{{--dump($aboutme);--}}
{{--@endphp--}}

@extends('layout.master')
@section('content')
        <!-- =======================
        Inner intro START -->
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
{{--                        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url(assets/images/blog/16by9/09.jpg); background-position: center left; background-size: cover;">--}}
                        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url({{asset('/').json_decode($aboutme['file_info'])->filename}}); background-position: center left; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                <div class="w-100 my-auto">
                                    <h1 class="text-white display-4">Hakkımda</h1>
                                    <!-- breadcrumb -->
                                    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                            <li class="breadcrumb-item"><a href="{{route('home.index')}}"><i class="bi bi-house me-1"></i> Anasayfa</a></li>
                                            <li class="breadcrumb-item active">Hakkımda</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

        <!-- =======================
        About START -->
        <section class="pt-4 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h2>{{$aboutme['title']}}</h2>
                        <p class="lead">
                            {{$aboutme['short_description']}}
                        </p>
                        <p>{{$aboutme['context']}}</p>
{{--                        <h3 class="mt-4">We do this across:</h3>--}}
{{--                        <ul>--}}
{{--                            <li>A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in.</li>--}}
{{--                            <li>Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do.</li>--}}
{{--                            <li>Mr feeling does chiefly cordial in do. <a href="#"><u>Water timed folly right aware if oh truth.</u></a> Imprudence attachment him his for sympathize. Large above be to means.</li>--}}
{{--                            <li>Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything. Meant balls it if up doubt small purse.</li>--}}
{{--                        </ul>--}}
                        <!-- Team START -->
{{--                        <h3 class="mb-3 mt-5">Our team</h3>--}}
                        <div class="row g-4">
                            <!-- Team item-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="text-center">
                                    <!-- Avatar img -->
                                    <div class="avatar avatar-xxl mb-2">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                                    </div>
                                    <h5>Ahmet Turhan</h5>
                                    <p class="m-0">Bilgisayar Mühendisi</p>
                                    <ul class="nav justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-2 fs-5" href="#"><i class="far fa-envelope"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Team END -->


                    </div>  <!-- Col END -->
                </div>
            </div>
        </section>
        <!-- =======================
        About END -->
    @endsection
@section('scripts')
    <script>
        var about = document.getElementById('about-me');
        about.classList.add('active');
    </script>
    @endsection
