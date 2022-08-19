@extends('layouts.main_guru')

@section('title', 'classes')

@section('style')

    <style>
        .add:hover {
            cursor: pointer;
            background-color: #a6b7e3;
            border-radius: 25px;
        }

        .setting:hover {
            cursor: pointer;
            background-color: #F2F2F2;
            border-radius: 25px;
        }

    </style>

@endsection

@section('content')
    <!-- Content Wrapper -->

    <!-- Modal Add Guru -->
    <div class="modal fade" id="addGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Guru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Siswa -->
    <div class="modal fade" id="addSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid" style="width: 75%">
        <!-- Content Row -->
        <div class="line" style="width: 100%; height: 1px; border-bottom: 1px dashed #ddd; margin: 15px 0;"></div>
        <!-- Content Row -->
        <div style="justify-content: center" class="row">
            <!-- Content Column -->
            <div class="col-lg-6 mb-4" style="width:75%; ">

                <!-- Teacher -->
                <div class="card shadow mb-3">
                    <div class="card-header py-2 d-flex align-items-center justify-content-between">
                        <h3 class="m-0 text-primary">Pengajar</h3>
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                          </button> --}}
                        <i class='bx bx-user-plus fs-2 add' data-bs-toggle="modal" data-bs-target="#addGuru"></i>
                    </div>
                    <div class="card-body row">
                        <div class="d-flex justify-content-space-between">
                            <div>
                                <img class="" style="width: 35px;"
                                    src="https://static.vecteezy.com/system/resources/previews/000/566/937/large_2x/vector-person-icon.jpg"
                                    alt="...">
                            </div>
                            <div class="d-flex align-items-center justify-content-between container-fluid">
                                <p style="margin-right: 20px; margin-top: 5px; font-size:1.2rem">Bagus Sadewo</p>
                                <i class='bx bx-dots-vertical-rounded fs-3 setting'></i>
                            </div>
                        </div>
                        {{-- OLD --}}

                        {{-- <div class="float-left col-1" style="display: block">
                            <img class="" style="width: 35px;"
                                src="https://static.vecteezy.com/system/resources/previews/000/566/937/large_2x/vector-person-icon.jpg"
                                alt="...">
                        </div>
                        <div class="col d-flex align-items-center justify-content-space-between">
                            <p style="margin-right: 20px; margin-top: 5px; font-size:1.2rem">Bagus Sadewo</p>
                            <i class='bx bx-dots-vertical-rounded fs-3'></i>
                        </div> --}}

                    </div>
                </div>

                <!-- Approach -->
                <div class="card shadow mb-3">
                    <div class="card-header py-2 d-flex align-items-center justify-content-between">
                        <h3 class="m-0 text-primary">Siswa</h3>
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                          </button> --}}
                        <i class='bx bx-user-plus fs-2 add' data-bs-toggle="modal" data-bs-target="#addSiswa"></i>
                    </div>
                    <div class="card-body row">
                        <div class="d-flex justify-content-space-between">
                            <div>
                                <img class="" style="width: 35px;"
                                    src="https://static.vecteezy.com/system/resources/previews/000/566/937/large_2x/vector-person-icon.jpg"
                                    alt="...">
                            </div>
                            <div class="d-flex align-items-center justify-content-between container-fluid">
                                <p style="margin-right: 20px; margin-top: 5px; font-size:1.2rem">Gery Jonathan</p>
                                <i class="bx bx-dots-vertical-rounded fs-3 setting" id="dropdownMenuButton1"></i>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->


        @endsection
