@extends('admin.master')
@section('css')
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/vendor/quill/css/quill.snow.css">--}}
@endsection
@section('main')
    <script src="{{ asset('/')}}js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({//Text editörü varsayılan özellikleri ile başlatılıyor
            selector: 'textarea#content', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            language:'tr_TR'
        });
    </script>
    <!-- =======================
Main contain START -->
    <section class="py-4">
        <div class="container">
            <div class="row pb-4">
                <div class="col-12">
                    <!-- Title -->
                    <h1 class="mb-0 h2">Hakkımda Sayfası Kaydet|Güncelle</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Chart START -->
                    <div class="card border">
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Form START -->
                            <form action="{{route('admin.aboutme.controller')}}" method="post"  enctype="multipart/form-data">
                                <!-- Main form -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Post name -->
                                        <div class="mb-3">
                                            <label class="form-label">Başlık</label>
                                            <input required id="title" name="title" type="text" class="form-control" placeholder="Başlık">
                                            {{--                                            <small>Moving heaven divide two sea female great midst spirit</small>--}}
                                        </div>
                                    </div>

                                    <!-- Short description -->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Kısa Açıklama </label>
                                            <textarea class="form-control" rows="3" name="short_description" placeholder="Açıklama Ekle"></textarea>
                                        </div>
                                    </div>

                                    <!-- Main toolbar -->
                                    <div class="col-md-12">
                                        <!-- Subject -->
                                        <div class="mb-3">
                                            <label class="form-label"  for="content">Hakkımda İçerik </label>
                                            <textarea class="form-control" id="context" name="context"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <!-- Image -->
                                            <div class="position-relative">
                                                <h6 class="my-2">Hakkımda resmini buraya yükleyin, veya<a href="#!" class="text-primary"> Göz Atın</a></h6>
                                                <label class="w-100" style="cursor:pointer;">
                      <span>
                        <input class="form-control stretched-link" type="file" name="image" id="image" accept="image/gif, image/jpeg, image/png" >
                      </span>
                                                </label>
                                            </div>
                                            <p class="small mb-0 mt-2"><b>Not:</b> Yalnızca JPG, JPEG ve PNG. Önerilen boyutlarımız 600px * 450px'dir. Daha büyük resim, küçük resimlerimize/önizlemelerimize uyması için 4:3'e kırpılacaktır.</p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="aboutCheck">
                                            <label class="form-check-label" for="postCheck">
                                                Mevcut Resim Kullanılsın
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Create post button -->
                                    <div class="col-md-12 text-start">
                                        <button class="btn btn-primary w-100" type="submit">Kaydet|Güncelle</button>
                                    </div>
                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                </div>
                            </form>
                            <!-- Form END -->
                        </div>
                    </div>
                    <!-- Chart END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main contain END -->
@endsection
