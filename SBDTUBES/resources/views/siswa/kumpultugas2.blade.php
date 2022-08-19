@extends('siswa.main_siswa')

@section('title', 'classes')
@section('content')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid" style="width: 90%;">
        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-md-1" style="width:100%;">
                <img class="img-fluid px-3 px-sm-4 ml-5 mt-4" src="{{ asset('img/task (3).jpg') }}" alt="...">
            </div>
            <div class="col-md-8" style="width:100%; border-radius: 10px;">
                <div class="card" style="border-radius: 10px; background-color: #fff; border-color:#fff">
                    <!-- Illustrations -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-11">
                                <h2>{{ $isiposts->judul }}</h2>
                                <h6>{{ $isiposts->authors->name }}</h6>
                                <!--<h6>100 poin</h6>-->
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('img/3_button.png') }}" width="20px;">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                                        <li><a class="dropdown-item" href="#">Salin Link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <p>{{ $isiposts->isi }}</p>
                        </div>
                        @if ($isiposts->isi_attach != null)
                            <div class="row">
                                <div class="card" style="width: 18rem; margin-left:10px; margin-bottom: 15px;">
                                    <div class="card-body">
                                        <p class="card-text"><a href="#">link materi</a></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($isiposts->jenis == 'isian')
                            <div class="row">
                                <div class="card"
                                    style="width: 100%; margin-left:10px; margin-bottom:10px; box-shadow: 1px 1px 8px 5px rgba(0,0,0,0.14);">
                                    <div class="form-group">
                                        <label for="comment">Jawaban Anda : &nbsp; &nbsp; Ditugaskan</label>
                                        <form action="/post" method="post">
                                            <textarea name="jawaban" id="jawaban" cols="30" rows="10" style="width: 85%; height: 60px;"></textarea>
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-lg btn-primary"
                                                    style=>Serahkan</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <hr>
                        <div class="row">
                            <div class="col-md-10">
                                <h6>2 komentar kelas</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{ asset('img/user-solid.svg') }}" width="25px;">
                            </div>
                            <div class="col-md-10">
                                <h6>Paul</h6>
                                <p>Ini Komen</p>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('img/3_button.png') }}" width="20px;">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="comment">Comment:</label>

                                <form action="/post" method="post">
                                    <textarea name="comment" id="comment" cols="30" rows="10" style="width: 100%; height: 60px;"></textarea>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-lg btn-primary" style=>Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>
            </div>
            <div class="col-md-3" style="width:100%;">
                <!-- Project Card Example -->
                @if($isiposts->jenis=='tugas')
                <div class="col card shadow" style="width: 100%; border-radius: 10px; float: right;">
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
                                        class="img-fluid px-3 px-sm-4  " style="width: 70px;"
                                        src="{{ asset('img/add.svg') }}" alt="...">
                                    <font color="#5F9EA0"><b>Tambah atau buat</b></font>
                                </button></span>
                            <button class="btn btn-primary" type="button" style="background-color: #007B83;">
                                <font face="Arial"><b>Tandai sebagai selesai </b></font>
                            </button>
                        </div>
                    </div>
                </div>
                @endif
                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>
                <div class="card"
                    style="width: 100%; border-radius: 10px; box-shadow: 1px 1px 8px 5px rgba(0,0,0,0.14);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="card-title">Komentar Pribadi</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{ asset('img/user-solid.svg') }}" width="15px;">
                            </div>
                            <div class="col-md-8">
                                <h6>Paul</h6>
                                <p>Ini Komen</p>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('img/3_button.png') }}" width="10px;">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Hapus</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <hr>
                                <form action="/post" method="post">
                                    <textarea name="komenpri" id="komenpri" cols="30" rows="10" style="width: 85%; height: 60px;"></textarea>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-lg btn-primary" style=>>></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->


    @endsection
