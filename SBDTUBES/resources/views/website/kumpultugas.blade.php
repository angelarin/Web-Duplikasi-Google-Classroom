@extends('layouts.main_guru')
@section('title', 'cobaaa')
@section('NamaKelas', 'Kelas 10 WKWK Wajib')
@section('content')
<!-- Content Wrapper -->


<!-- Content Row -->
<div class="container mx-auto" style="width: 80%;">
    <div class="row mb-5">
        <div class="col-8">
            <div class="row">
                <div class="col-2">
                    <img class="img-fluid px-3 px-sm-4 ml-5 mt-4  " style="width: 80px;" src="img/task (3).jpg"
                        alt="...">
                </div>
                <div class="col-8">
                    <h3>
                        <font color="#5F9EA0">Cobaaa</font>
                    </h3>
                    <div class="col-8 mb-3">
                        <b>Karina Angela &nbsp; &nbsp; 3 Mei</b>
                    </div>
                    <div class="col-8 mb-3">
                        <b>100 poin</b>
                    </div>
                    <hr style="background-color : #007B83; height:2px;">
                    <div class="col-8 mb-3">
                        ya gitu dehh
                    </div>
                </div>

                <div class="col-2">
                    <a class="nav-link data-toggle" href="#" id="userDropdown" role="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <h3>
                            <img class="img-fluid px-3 px-sm-4" src="img/dot.svg" alt="...">
                        </h3>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Salin Link
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Laporkan Penyalahgunaan
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col card shadow" style="width: 40%; border-radius: 10px; float: right;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class>Tugas Anda</h4>
                    </div>

                    <div class="col">
                        <h6 class="card-title mt-10 ml-6">
                            <font color="#228B22"><b>Ditugaskan</b></font>
                        </h6>
                    </div>
                </div>
                <div class="d-grid gap-2 col-12 mb-3">
                    <span class="border"> <button type="button" class="btn btn-light"><img
                                class="img-fluid px-3 px-sm-4  " style="width: 70px;" src="img/add.svg" alt="...">
                            <font color="#5F9EA0"><b>Tambah atau buat</b></font>
                        </button></span>
                    <button class="btn btn-primary" type="button" style="background-color: #007B83;">
                        <font face="Arial"><b>Tandai sebagai selesai </b></font>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-8">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">

                    <hr style="background-color : #007B83; height:2px;">
                    <div>
                        <div class="row">
                            <img class="img-fluid px-3 px-sm-4  " style="width: 70px;" src="img/people2.svg"
                                alt="...">Komentar Kelas
                            <button style="text-align: left" type="button" class="btn btn-light">
                                <font color="#5F9EA0"><b>Tambahkan komentar kelas</b></font>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <div class="col card shadow " style="width: 50%; border-radius: 10px; float:right;">
            <div class="card-body">
                <div class="row">

                    <div class="row">
                        <div class="col">
                            <h6 class="card-title"><img class="img-fluid px-3 px-sm-4  " style="width: 70px;"
                                    src="img/person.svg" alt="...">Komentar Pribadi
                            </h6>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-12 mb-3">
                        <button type="button" class="btn btn-light">
                            <font color="#5F9EA0"><b>Tambahkan komentar ke Karina Angela</b></font>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

