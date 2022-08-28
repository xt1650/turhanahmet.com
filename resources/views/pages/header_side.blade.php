<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{asset('/')}}">
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
                            <input class="form-control pe-5 bg-light" type="search" placeholder="Gönderi Ara" aria-label="Search">
                            <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
                        </form>
                    </div>
                </div>
                <!-- Nav Search END -->
                <ul class="navbar-nav navbar-nav-scroll ms-auto" id="navbar-header">

                    <!-- Anasayfa -->
                    <li class="nav-item"> <a class="nav-link" id="home" href="{{route('home.index')}}"> Anasayfa</a></li>
                    <!-- Hakkımda -->
                    <li class="nav-item"> <a class="nav-link" id="about-me" href="{{route('about-me')}}"> Hakkımda</a></li>
                    <!-- İletişim-->
                    <li class="nav-item"> <a class="nav-link" id="contact-me" href="{{route('contact-me')}}"> İletişim</a></li>
                    @auth  {{-- Kullanıcı oturum açmış ise  --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}"> <i class="bi bi-wrench me-1"></i>Yönetim</a></li>
                    @endauth

                </ul>
            </div>
            <!-- Main navbar END -->
            <!-- Dark mode switch -->
            <div class="modeswitch ms-4" id="darkModeSwitch">
                <div class="switch"></div>
            </div>
            @if (Route::has('login.show'))
                @auth  {{-- Kullanıcı oturum açmış ise  --}}
                <a class="nav-link text-danger" href="{{route('logout.perform')}}"> Çıkış</a>
                @else
                    <a class="nav-link text-primary" href="{{route('login.show')}}">Giriş Yap </a>
                @endauth
            @endif


        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- ======================= Header END -->
