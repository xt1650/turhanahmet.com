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
                    <h1 class="mb-0 h2">Gönderi Oluştur</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Chart START -->
                    <div class="card border">
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Form START -->
                            <form action="{{route('admin.post.controller')}}" method="post"  enctype="multipart/form-data">
                                <!-- Main form -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Post name -->
                                        <div class="mb-3">
                                            <label class="form-label">Gönderi Adı</label>
                                            <input required id="con-name" name="name" type="text" class="form-control" placeholder="Gönderi Adı">
{{--                                            <small>Moving heaven divide two sea female great midst spirit</small>--}}
                                        </div>
                                    </div>
                                    <!-- Post type START -->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Gönderi Türü</label>
                                            <div class="d-flex flex-wrap gap-3">
                                                <!-- Post type item -->
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="post_type" value="1" id="option">
                                                    <label class="btn btn-outline-light w-100" for="option">
                                                        <i class="bi bi-chat-left-text fs-1"></i>
                                                        <span class="d-block"> Gönderi </span>
                                                    </label>
                                                </div>
                                                <!-- Post type item -->
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="post_type" value="2" id="option2">
                                                    <label class="btn btn-outline-light w-100" for="option2">
                                                        <i class="bi bi-patch-question fs-1"></i>
                                                        <span class="d-block"> Soru </span>
                                                    </label>
                                                </div>
                                                <!-- Post type item -->
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="post_type" value="3" id="option3" checked>
                                                    <label class="btn btn-outline-light w-100" for="option3">
                                                        <i class="bi bi-chat-right-dots fs-1"></i>
                                                        <span class="d-block"> Soru-Cevap </span>
                                                    </label>
                                                </div>
                                                <!-- Post type item -->
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="post_type" value="4" id="option4">
                                                    <label class="btn btn-outline-light w-100" for="option4">
                                                        <i class="bi bi-ui-checks-grid fs-1"></i>
                                                        <span class="d-block"> Resim </span>
                                                    </label>
                                                </div>
                                                <!-- Post type item -->
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="post_type" value="5" id="option5">
                                                    <label class="btn btn-outline-light w-100" for="option5">
                                                        <i class="bi bi-camera-reels fs-1"></i>
                                                        <span class="d-block"> Video </span>
                                                    </label>
                                                </div>
                                                <!-- Post type item -->
                                                <div class="flex-fill">
                                                    <input type="radio" class="btn-check" name="post_type" value="6" id="option6">
                                                    <label class="btn btn-outline-light w-100" for="option6">
                                                        <i class="bi bi-chat-square fs-1"></i>
                                                        <span class="d-block"> Diğer </span>
                                                    </label>
                                                </div>
                                                <!-- Post type item -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post type END -->

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
                                            <label class="form-label"  for="content">Gönderi </label>
                                            <textarea class="form-control" id="content" name="content"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <!-- Image -->
                                            <div class="position-relative">
                                                <h6 class="my-2">Gönderi resmini buraya yükleyin, veya<a href="#!" class="text-primary"> Göz Atın</a></h6>
                                                <label class="w-100" style="cursor:pointer;">
                      <span>
                        <input class="form-control stretched-link" type="file" name="image" id="image" accept="image/gif, image/jpeg, image/png" >
                      </span>
                                                </label>
                                            </div>
                                            <p class="small mb-0 mt-2"><b>Not:</b> Yalnızca JPG, JPEG ve PNG. Önerilen boyutlarımız 600px * 450px'dir. Daha büyük resim, küçük resimlerimize/önizlemelerimize uyması için 4:3'e kırpılacaktır.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <!-- Tags -->
                                        <div class="mb-3">
                                            <label class="form-label">Etiketler</label>
                                            <textarea class="form-control" rows="1" name="tags" placeholder="business, sports ..."></textarea>
                                            <small>En fazla 14 anahtar kelime. Anahtar kelimelerin tümü küçük harfli olmalı ve virgülle ayrılmalıdır. Örneğin. javascript, react, marketing.</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <!-- Message -->
                                        <div class="mb-3">
                                            <label class="form-label">Kategori</label>
                                            <select class="form-select" aria-label="Default select example" name="category" id="category">
                                                <option value="6" selected>Yaşam tarzı</option>
                                                <option value="1">Teknoloji</option>
                                                <option value="2">Yolculuk</option>
                                                <option value="3">İşletme</option>
                                                <option value="4">Spor</option>
                                                <option value="5">Pazarlama</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="postCheck">
                                            <label class="form-check-label" for="postCheck">
                                                Bu gönderi öne çıkarılsın mı?
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Create post button -->
                                    <div class="col-md-12 text-start">
                                        <button class="btn btn-primary w-100" type="submit">Gönderi Oluştur</button>
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
@section('script')
{{--    <script src="{{asset('/')}}assets/vendor/quill/js/quill.min.js"></script>--}}
    @endsection
{{--<!-- Editor toolbar -->--}}
{{--<div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">--}}
{{--                        <span class="ql-formats">--}}
{{--                          <select class="ql-size"></select>--}}
{{--                        </span>--}}
{{--    <span class="ql-formats">--}}
{{--                          <button class="ql-bold"></button>--}}
{{--                          <button class="ql-italic"></button>--}}
{{--                          <button class="ql-underline"></button>--}}
{{--                          <button class="ql-strike"></button>--}}
{{--                        </span>--}}
{{--    <span class="ql-formats">--}}
{{--                          <select class="ql-color"></select>--}}
{{--                          <select class="ql-background"></select>--}}
{{--                        </span>--}}
{{--    <span class="ql-formats">--}}
{{--                          <button class="ql-code-block"></button>--}}
{{--                        </span>--}}
{{--    <span class="ql-formats">--}}
{{--                          <button class="ql-list" value="ordered"></button>--}}
{{--                          <button class="ql-list" value="bullet"></button>--}}
{{--                          <button class="ql-indent" value="-1"></button>--}}
{{--                          <button class="ql-indent" value="+1"></button>--}}
{{--                        </span>--}}
{{--    <span class="ql-formats">--}}
{{--                          <button class="ql-link"></button>--}}
{{--                          <button class="ql-image"></button>--}}
{{--                        </span>--}}
{{--    <span class="ql-formats">--}}
{{--                          <button class="ql-clean"></button>--}}
{{--                        </span>--}}
{{--</div>--}}
{{--<!-- Main toolbar -->--}}
{{--<div class="bg-body border rounded-bottom h-300 overflow-hidden" id="quilleditor">--}}
{{--</div>--}}
