@extends('layout.master')
    @section('content')
        <!-- =======================
    Inner intro START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="bg-primary bg-opacity-10 rounded p-4 p-sm-5">
                            <h2>Hesap Oluştur </h2>
                            <!-- Form START -->
                            <form class="mt-4" method="post" action="{{route('register.perform')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">E-Posta</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="E-posta" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">Şifre</label>
                                    <input type="password" class="form-control" id="password" placeholder="*********" name="password" value="{{ old('password') }}" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword2">Şifre Tekrar</label>
                                    <input type="password" class="form-control" id="password_confirmation" placeholder="*********" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success">Kayıt Ol</button>
                                    </div>
                                    <div class="col-sm-8 text-sm-end">
                                        <span>Hesabınız Ver mı? <a href="{{route('login.show')}}"><u>Giriş Yap</u></a></span>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->
    @endsection
