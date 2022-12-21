@php
//    dump($user_info,$settings,$personal_info);
//    dump($user_info['id']);
//    $settings = null;
@endphp
@extends('admin.master')
@section('main')
    <!-- ======================= Main contain START -->
    <section class="py-4">
        <div class="container">

            <div class="row g-4">
                <!-- Profile cover and info START -->
                <div class="col-12">
                    <div class="card mb-4 position-relative z-index-9">
                        <!-- Cover image -->
                        <div class="py-5 h-200 rounded" style="background-image:url({{asset('/')}}{{$settings['background_image'] ?? 'assets/images/blog/16by9/big/07.jpg'}}); background-position: center bottom; background-size: cover; background-repeat: no-repeat;">
                        </div>
                        <div class="card-body pt-3 pb-0">
                            <div class="row d-flex justify-content-between">
                                <!-- Avatar -->
                                <div class="col-sm-12 col-md-auto text-center text-md-start">
                                    <div class="avatar avatar-xxl mt-n5">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow" src="{{asset('/')}}{{$settings['profile_image'] ?? 'assets/images/avatar/teles-bot.svg'}}" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col-sm-12 col-md text-center text-md-start d-md-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="my-1">Louis Ferguson <i class="bi bi-patch-check-fill text-info small"></i></h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="bi bi-person-fill me-1"></i> An editor at Blogzine</li>
                                            <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> New York</li>
                                            <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> Joined on Jan 15, 2018</li>
                                        </ul>
                                        <p class="m-0"></p>
                                    </div>
                                    <!-- Links -->
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <a href="#" class="btn btn-primary-soft me-3">Follow</a>
                                        <!-- Card action START -->
                                        <div class="dropdown ms-3">
                                            <a class="text-secondary" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                <!-- Dropdown Icon -->
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle fill="currentColor" cx="3" cy="12" r="2.5"></circle>
                                                    <circle fill="currentColor" opacity="0.5" cx="12" cy="12" r="2.5"></circle>
                                                    <circle fill="currentColor" opacity="0.3" cx="21" cy="12" r="2.5"></circle>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2 fw-icon"></i>Share profile</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-volume-mute me-2 fw-icon"></i>Mute notification</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-slash-circle me-2 fw-icon"></i>Delete profile</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-flag me-2 fw-icon"></i>Report a bug</a></li>
                                            </ul>
                                        </div>
                                        <!-- Card action END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile info END -->
            </div>

            <div class="row g-4">
                <!-- Left sidebar START -->
                <div class="col-lg-7 col-xxl-8">
                    <!-- Profile Setting START-->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Profil Bilgileri</h5>
                        </div>
                        <div class="card-body">
                            <form id="profile_info_form" method="post" enctype="multipart/form-data" >
                                <input hidden value="{{csrf_token()}}">

                                <!-- Profile title -->
                                <div class="mb-3">
                                    <label class="form-label">Profil Başlığı</label>
                                    <input class="form-control" type="text" name="profile_title" value="{{$settings['profile_title'] ?? ""}} ">
                                </div>
                                <!-- Profile picture -->
                                <div class="mb-3">
                                    <label class="form-label">Profil Resmi</label>
                                    <!-- Avatar upload START -->
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative me-3">
                                            <!-- Avatar edit -->
                                            <div class="position-absolute top-0 end-0  z-index-9">

                                                <button type="button" class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1" id="add_avatar"> <i class="bi bi-pencil"></i> </button>
                                            </div>
                                            <!-- Avatar preview -->
                                            <div class="avatar avatar-xl">
                                                <input id="profile_file_input" name="profile_file_input" class="file-upload" type="file" accept="image/*" hidden/>
                                                <img id="bordered_profile" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{asset('/')}}{{$settings['profile_image'] ?? 'assets/images/avatar/teles-bot.svg'}}" alt="">
                                            </div>
                                        </div>
                                        <!-- Avatar remove button -->
                                        <div class="avatar-remove">
                                            <button type="button" class="btn btn-light">Sil</button>
                                        </div>
                                    </div>
                                    <!-- Avatar upload END -->
                                </div>
                                <!-- Cover image -->
                                <!-- Profile title -->
                                <div class="mb-3">
                                    <label class="form-label">Profil ArkaPlan Resmi</label>
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative me-3">
                                            <!-- Avatar edit -->
                                            <div class="position-absolute top-0 end-0  z-index-9">

                                                <button type="button" class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1" id="add_profile_background"> <i class="bi bi-pencil"></i> </button>
                                            </div>
                                            <input id="profile_background" name="profile_background" class="file-upload" type="file" accept="image/*" hidden/>
                                            <img id="profile_background_img" class=" border border-white border-3 shadow h-90 w-160" src="{{asset('/')}}{{$settings['background_image'] ?? 'assets/images/blog/16by9/big/07.jpg'}}" alt="">

                                        </div>

                                    </div>

                                </div>
                                <!-- Location -->
                                <div class="mb-3">
                                    <label class="form-label">Konum</label>
                                    <input class="form-control" type="text" name="adress" value="{{$settings['location'] ?? ""}}">
                                </div>
                                <!-- Bio -->
                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" name="bio_info" rows="3">{{$settings['bio'] ?? ""}}</textarea>
                                    <div class="form-text">Profiliniz Hakkında kısaca bilgiler veriniz.</div>
                                </div>
                                <!-- Save button -->
                                <div class="d-flex justify-content-end mt-4">
                                    <a href="#" class="btn text-secondary border-0 me-2">İptal</a>
                                    <button type="submit" id="profile_info_btn" value="1" class="btn btn-primary">Değişiklikleri Kaydet</button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="saveOrUpdateProfileAlerts" hidden>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </symbol>
                                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </symbol>
                                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </symbol>
                                    </svg>
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <strong>Kaydetme Başarılı!</strong> Profiliniz başarılı bir şekilde kaydedilmiştir.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Profile Setting END-->
                    <!-- Profile START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Profil</h5>
                        </div>
                        <div class="card-body">
                            <form id="saveChangesProfileFirst" method="post" enctype="multipart/form-data" >
                                <input hidden value="{{csrf_token()}}">
                            <!-- Full name -->
                            <div class="mb-3">
                                <label class="form-label">Ad-Soyad</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="ad" value="{{--$user_info['ad']--}}" placeholder="Ad">
                                    <input type="text" class="form-control" name="soyad" value="{{--$user_info['soyad']--}}" placeholder="Soyad">
                                </div>
                            </div>
                            <!-- Username -->
                            <div class="mb-3">
                                <label class="form-label">Kullanıcı Adı</label>
                                <div class="input-group">
                                    <span class="input-group-text">turhanahmet.com</span>
                                    <input type="text" class="form-control" name="user_name" value="{{$user_info['name']}}">
                                </div>
                            </div>

                            <!-- Job title -->
                            <div class="mb-3">
                                <label class="form-label">Meslek Adı</label>
                                <input class="form-control" type="text" name="job" value="An editor at Blogzine">
                            </div>
                            <!-- Location -->
                            <div class="mb-3">
                                <label class="form-label">Konum</label>
                                <input class="form-control" type="text" name="adress" value="New Hampshire">
                            </div>
                            <!-- Bio -->
                            <div class="mb-3">
                                <label class="form-label">Bio</label>
                                <textarea class="form-control" name="bio_info" rows="3">I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world.</textarea>
                                <div class="form-text">Brief description for your profile.</div>
                            </div>
                            <!-- Birthday -->
                            <div>
                                <label class="form-label">Birthday</label>
                                <input type="text" name="dogum_tarih" class="form-control flatpickr-input" placeholder="DD/MM/YYYY" value="12/10/1990">
                            </div>
                            <!-- Save button -->
                            <div class="d-flex justify-content-end mt-4">
                                <a href="#" class="btn text-secondary border-0 me-2">İptal</a>
                                <button type="submit" id="base_profile" value="1" class="btn btn-primary">Değişiklikleri Kaydet</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- Profile END -->

                    <!-- Personal information START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Kişisel Bilgiler</h5>
                        </div>
                        <div class="card-body">
                            <!-- Skype -->
                            <div class="mb-3">
                                <label class="form-label">Skype|AnyDesk|Discord</label>
                                <input class="form-control" type="text" value="iamlouisferguson">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" value="{{$user_info['email']}}" readonly>
                            </div>
                            <!-- Address -->
                            <div class="mb-3">
                                <label class="form-label">Adres</label>
                                <input class="form-control" type="text" value="750 Sing Sing Rd, Horseheads, NY, 14845 ">
                            </div>
                            <!-- Save button -->
                            <div class="d-flex justify-content-end mt-4">
                                <a href="#" class="btn btn-primary">Değişiklikleri Kaydet</a>
                            </div>
                        </div>
                    </div>
                    <!-- Personal information END -->

                    <!-- Social links START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0"> Sosyal Medya</h5>
                        </div>
                        <div class="card-body">
                            <!-- Skype -->
                            <div class="mb-3">
                                <label class="form-label">Facebook</label>
                                <input class="form-control" type="text" value="https://facebook.com/">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">linkedin</label>
                                <input class="form-control" type="email" value="https://www.linkedin.com/">
                            </div>
                            <!-- Address -->
                            <div class="mb-3">
                                <label class="form-label">Twitter</label>
                                <input class="form-control" type="text" value="https://twitter.com/ ">
                            </div>
                            <!-- Save button -->
                            <div class="d-flex justify-content-end mt-4">
                                <a href="#" class="btn btn-primary">Değişiklikleri Kaydet</a>
                            </div>
                        </div>
                    </div>
                    <!-- Social links END -->

                    <!-- Update password START -->
                    <div class="card border">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Şifreyi Güncelle</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Geçerli Şifre</label>
                                <input class="form-control" type="password" placeholder="Mevcu Şifrenizi Giriniz">
                            </div>
                            <!-- New password -->
                            <div class="mb-3">
                                <label class="form-label" id="psw-strength-message"></label>
                                <div class="input-group">
                                    <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter new password">
                                    <span class="input-group-text p-0">
                  <i class="fakepasswordicon far fa-eye cursor-pointer p-2 w-40px"></i>
                </span>
                                </div>
                                <div class="rounded mt-1" id="psw-strength"></div>
                            </div>
                            <!-- New password -->
                            <div>
                                <label class="form-label">Confirm new password</label>
                                <input class="form-control" type="password" placeholder="Enter new password">
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <a href="#" class="btn btn-primary">Change password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left sidebar END -->

                <!-- Right sidebar START -->
                <div class="col-lg-5 col-xxl-4">
                    <!-- Profile Setting START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Profile Setting</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="availabilityCheck" checked="">
                                <label class="form-check-label" for="availabilityCheck">Visible profile to everyone</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="proCheck" disabled="">
                                <label class="form-check-label" for="proCheck">Disable ads <span class="badge bg-primary align-middle">Pro</span></label>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Setting END -->

                    <!-- Notifications START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Notifications</h5>
                        </div>
                        <!-- Card body START -->
                        <div class="card-body">
                            <p>Choose type of notifications you want to receive</p>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="withdrawalCheck" checked="">
                                <label class="form-check-label" for="withdrawalCheck">Withdrawal activity</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="weeklyCheck">
                                <label class="form-check-label" for="weeklyCheck">Weekly report</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="passwordCheck" checked="">
                                <label class="form-check-label" for="passwordCheck">Password change</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="dataCheck">
                                <label class="form-check-label" for="dataCheck">Data usage alert</label>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Notifications START -->

                    <!-- Deactivate account START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Deactivate Account</h5>
                        </div>
                        <div class="card-body">
                            <h6>Before you go...</h6>
                            <ul>
                                <li>Take backup of your data <a href="#">Here</a> </li>
                                <li>Account deletion is final. There will be no way to restore your account</li>
                            </ul>
                            <div class="form-check form-check-md my-3">
                                <input class="form-check-input" type="checkbox" value="" id="deleteaccountCheck">
                                <label class="form-check-label" for="deleteaccountCheck">Yes, I'd really like to delete my account</label>
                            </div>
                            <a href="#" class="btn btn-success-soft my-1">Keep my account</a>
                            <a href="#" class="btn btn-danger my-1">Delete my account</a>
                        </div>
                    </div>
                    <!-- Deactivate account START -->
                    <p><i class="bi bi-info-circle me-2"></i>This account was created on Jan 15, 2018</p>

                    <div class="card bg-transparent border rounded-3 mt-4">
                        <!-- Card header -->
                        <div class="card-header bg-transparent border-bottom p-3">
                            <h5 class="card-header-title mb-0">Linked account</h5>
                        </div>
                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Google -->
                            <div class="position-relative mb-3 mt-3 d-sm-flex bg-success bg-opacity-10 border border-success p-3 rounded">
                                <!-- Title and content -->
                                <h2 class="fs-1 mb-0 me-3"><i class="fab fa-google text-google-icon"></i></h2>
                                <div>
                                    <div class="position-absolute top-0 start-100 translate-middle bg-white rounded-circle lh-1 h-20px">
                                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                    </div>
                                    <h6 class="mb-1">Google</h6>
                                    <p class="mb-1 small">You are successfully connected to your Google account</p>
                                    <!-- Button -->
                                    <button type="button" class="btn btn-sm btn-danger mb-0 me-2">Invoke</button>
                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                </div>
                            </div>

                            <!-- Blogger -->
                            <div class="mb-3 d-sm-flex border p-3 rounded">
                                <!-- Title and content -->
                                <h2 class="fs-1 mb-0 me-3"><i class="fab fa-blogger text-warning"></i></h2>
                                <div>
                                    <h6 class="mb-1">Blogger</h6>
                                    <p class="mb-1 small">Connect with Blogger account for a personalized experience</p>
                                    <!-- Button -->
                                    <button type="button" class="btn btn-sm btn-primary mb-0 me-2">Connect Blogger </button>
                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                </div>
                            </div>

                            <!-- Facebook -->
                            <div class="d-sm-flex border p-3 rounded mb-2">
                                <!-- Title and content -->
                                <h2 class="fs-1 mb-0 me-3"><i class="fab fa-facebook text-facebook"></i></h2>
                                <div>
                                    <h6 class="mb-1">Facebook</h6>
                                    <p class="mb-1 small">Connect with Facebook account for a personalized experience</p>
                                    <!-- Button -->
                                    <button type="button" class="btn btn-sm btn-primary mb-0 me-2">Connect Facebook</button>
                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Main contain END -->
@endsection
@section('script')
{{--    <script src="{{asset('/')}}js/axios.min.js"></script>--}}
    <script src="{{asset('/')}}js/app.js"></script>
    <script src="{{asset('/')}}js/axios/profile.js"></script>
<script>



    document.addEventListener("DOMContentLoaded", () => {
        let add_avatar= document.getElementById('add_avatar');
        let add_profile_background= document.getElementById('add_profile_background');
        let profile_file_input= document.getElementById('profile_file_input');
        let profile_background= document.getElementById('profile_background');
        let circle = document.getElementById('bordered_profile');
        let circleBackground = document.getElementById('profile_background_img');
        let changeSaveButtonFirst = document.getElementById('base_profile');




        /**
         * Image Preview in img elements
         */
        profile_file_input.addEventListener('change',function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            circle.setAttribute('src', img);
        });
        profile_background.addEventListener('change',function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            circleBackground.setAttribute('src', img);
        });

        add_avatar.addEventListener('click',function (e) {
            document.getElementById('profile_file_input').click();
        });
        add_profile_background.addEventListener('click',function (e) {
            document.getElementById('profile_background').click();
        });


        // changeSaveButtonFirst.addEventListener('click',function (event) {
        //     // Promise.any([BasicProfile('/save_profile_changes',{a:'b'})])
        //     //     .then(function (results) {
        //     //         console.log("results")
        //     //         console.log(results)
        //     //     })  .catch(function (error) {
        //     //     console.log(error);
        //     // });
        //     // var forms = document.getElementById('saveChangesProfileFirst');
        //     var forms = $('#saveChangesProfileFirst');
        //     console.log(forms.serialize())
        //     // BasicProfile('/save_profile_changes',new URLSearchParams(new FormData(forms)).toString()).then(function (response) {
        //     //     console.log(response)
        //     // })
        // })
        let forms = $('#saveChangesProfileFirst');
        let profileInfoForms = $('#profile_info_form');
        profileInfoForms.on('submit',function (e) {
            e.preventDefault();
            e.stopPropagation();


            let formData = new FormData(profileInfoForms[0]);

            if(profile_background.files[0] !== undefined ){
                formData.append("file", profile_background.files[0]);
            }
            if(profile_file_input.files[0] !== undefined ){
                formData.append("file", profile_file_input.files[0]);
            }

            formData.append("id", {{$settings['id'] ?? null}});


            BasicProfile('{{route('save.profile.info',['user_id'=>$user_info['id']])}}',formData,true).then(function (response) {
                console.log(response)

                response.data ? $('#saveOrUpdateProfileAlerts').removeAttr('hidden') : alert('Kayıt Başarısız');
            })
        });
        forms.on('submit',function (e) {
            e.preventDefault();
            e.stopPropagation();
            console.log($(this).serialize())
            console.log($(this).serializeArray())
            console.log(profile_file_input.files[0])

            let formData = new FormData(forms[0]);
            formData.append("file", profile_file_input.files[0]);

                BasicProfile('/save_profile_changes',formData,true).then(function (response) {
                    console.log(response)
                })
            });

    });
</script>
@endsection
