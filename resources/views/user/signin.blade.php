@extends('layout.master')
@section('content')
    <!-- =======================
Inner intro START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="p-4 p-sm-5 bg-primary bg-opacity-10 rounded">
                        <h2>Hesabınıza Giriş Yapın</h2>
                        <!-- Form START -->
                        <form class="mt-4">
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">E-Posta</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-posta Adresinizi Giriniz">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">Şifre</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">Giriş Yap</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>Hesabınız Yok mu? <a href="{{route('register.show')}}"><u>Kayıt Ol</u></a></span>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                        <hr>
                        <!-- Social-media btn -->
                        <div class="text-center">
                            <p>Diğer Oturum Açma Seçenekleri :</p>
                            <ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
                                <li class="mx-2">
                                    <a href="#" class="btn bg-google d-inline-block"><i class="fab fa-google me-2"></i> Google ile giriş yap(Yakında)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Inner intro END -->

    @endsection
