@php
//$total=0;
    @endphp
@extends('admin.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    @endsection
@section('main')
    <!-- ======================= Post list START -->
    <section class="py-4">
        <div class="container">
            <div class="row pb-4">
                <div class="col-12">
                    <!-- Title -->
                    <div class="d-sm-flex justify-content-sm-between align-items-center">
                        <h1 class="mb-2 mb-sm-0 h2">Gönderi Listesi <span class="badge bg-primary bg-opacity-10 text-primary">{{$total}}</span></h1>
                        <a href="{{route('admin.post.create')}}" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>Gönderi Ekle</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row g-4 mb-4">
                        <div class="col-sm-4 col-lg-2">
                            <!-- Card START -->
                            <div class="card card-body border h-100">
                                <!-- Icon -->
                                <div class="fs-3 text-start text-success">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <!-- Content -->
                                <div class="ms-0">
                                    <h3 class="mb-0">305</h3>
                                    <h6 class="mb-0">Document</h6>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <!-- Card START -->
                            <div class="card card-body border h-100">
                                <!-- Icon -->
                                <div class="fs-3 text-start text-success">
                                    <i class="bi bi-camera-reels"></i>
                                </div>
                                <!-- Content -->
                                <div class="ms-0">
                                    <h3 class="mb-0">120</h3>
                                    <h6 class="mb-0">Videos</h6>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <div class="col-sm-4 col-lg-2">
                            <!-- Card START -->
                            <div class="card card-body border h-100">
                                <!-- Icon -->
                                <div class="fs-3 text-start text-success">
                                    <i class="bi bi-image"></i>
                                </div>
                                <!-- Content -->
                                <div class="ms-0">
                                    <h3 class="mb-0">475</h3>
                                    <h6 class="mb-0">Images</h6>
                                </div>
                            </div>
                            <!-- Card END -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Card START -->
                            <div class="card card-body border h-100">
                                <h3>Storage space </h3>
                                <div>
                                    <div class="d-flex">
                                        <h6 class="mt-0">Storage 80%</h6>
                                        <span class="ms-auto">6.80GB of 10GB</span>
                                    </div>
                                    <div class="progress progress-percent-bg progress-md">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- Card END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post list table START -->
                    <div class="card border bg-transparent rounded-3">

                        <!-- Card body START -->
                        <div class="card-body p-3">

                            <!-- Search and select START -->
                            <div class="row g-3 align-items-center justify-content-between mb-3">
                                <!-- Search -->
                                <div class="col-md-8">
                                    <form class="rounded position-relative">
                                            <input class="form-control pe-5 bg-transparent" type="search"  placeholder="Arama Yap" aria-label="Search">
                                        <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                    </form>
                                </div>

                                <!-- Select option -->
                                <div class="col-md-3">
                                    <!-- Short by filter -->
                                    <form>
                                        <select class="form-select z-index-9 bg-transparent" aria-label=".form-select-sm">
                                            <option value="">Sıralama Ölçütü</option>
                                            <option selected value="1">En Yeni</option>
                                            <option value="2">En Eski</option>
                                            <option value="3">Popülerlik</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <!-- Search and select END -->

                            <!-- Post list table START -->
                            <div class="table-responsive border-0">
                                <table class="table align-middle p-4 mb-0 table-hover table-shrink" id="postTable">
                                    <!-- Table head -->
                                    <thead class="table-dark">
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">No</th>
                                        <th scope="col" class="border-0">Gönderi</th>
                                        <th scope="col" class="border-0">Yazar</th>
                                        <th scope="col" class="border-0">Tarih</th>
                                        <th scope="col" class="border-0">Kategori</th>
                                        <th scope="col" class="border-0">Durum</th>
                                        <th scope="col" class="border-0 rounded-end">İşlem</th>
                                    </tr>
                                    </thead>

{{--                                    <!-- Table body START -->--}}
{{--                                    <tbody class="border-top-0">--}}
{{--                                    <!-- Table item -->--}}
{{--                                    <tr>--}}
{{--                                        <!-- Table data -->--}}
{{--                                        <td>--}}
{{--                                            <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">12 worst types of business accounts you follow on Twitter</a></h6>--}}
{{--                                        </td>--}}
{{--                                        <!-- Table data -->--}}
{{--                                        <td>--}}
{{--                                            <h6 class="mb-0"><a href="#">Lori Stevens</a></h6>--}}
{{--                                        </td>--}}
{{--                                        <!-- Table data -->--}}
{{--                                        <td>Jan 22, 2022</td>--}}
{{--                                        <!-- Table data -->--}}
{{--                                        <td>--}}
{{--                                            <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>--}}
{{--                                        </td>--}}
{{--                                        <!-- Table data -->--}}
{{--                                        <td>--}}
{{--                                            <span class="badge bg-success bg-opacity-10 text-success mb-2">Live</span>--}}
{{--                                        </td>--}}
{{--                                        <!-- Table data -->--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex gap-2">--}}
{{--                                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>--}}
{{--                                                <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                    <!-- Table body END -->--}}
                                </table>
                            </div>
                            <!-- Post list table END -->

{{--                            <!-- Pagination START -->--}}
{{--                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">--}}
{{--                                <!-- Content -->--}}
{{--                                <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>--}}
{{--                                <!-- Pagination -->--}}
{{--                                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">--}}
{{--                                    <ul class="pagination pagination-sm pagination-bordered mb-0">--}}
{{--                                        <li class="page-item disabled">--}}
{{--                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>--}}
{{--                                        <li class="page-item disabled"><a class="page-link" href="#">..</a></li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="#">15</a></li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#">Next</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                            <!-- Pagination END -->--}}
                        </div>
                    </div>
                    <!-- Post list table END -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
           let postTable=  $('#postTable').DataTable({
                processing: true,
                serverSide: true,
                ajax:
                    {
                        url: '{!! route('datatables.post.list') !!}',
                        type: 'POST',
                        data:{
                            _token : '{{csrf_token()}}',
                            test:123
                        }
                        // data: function (d) {
                        //     d.myKey = 'myValue';
                        //     // d.custom = $('#myInput').val();
                        //     // etc
                        // },
                    },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'name', name: 'post.name' },
                    { data: 'username', name: 'users.username' },
                    { data: 'date', name: 'date' },
                    { data: 'category_id', name: 'category_id' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
            var body = document.querySelector('body');
            body.addEventListener("click", "[data-id]", function (e) {
                console.dir(e)
            });
        });
    </script>
@endsection
