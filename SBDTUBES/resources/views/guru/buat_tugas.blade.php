@extends('layouts.main_tugas')

@section('title', 'classes')
@section('content')
<!-- Content Wrapper -->


<!-- Begin Page Content -->
<div class="row mx-3 flex">
    <div class="col-9">
        <div class="row" style="height: 4rem;justify-content: center;align-items: center;display:flex;">
            <div class="col-1">
                <img src="img/article_judul.svg" alt="gambar judul" style="width: 40%"  > </div>
                <div class="form-row col-auto" style="width: 90%">
                <input type="text" class="form-control" name="title" placeholder="Judul">
            </div>
        </div>
        <div class="row" style="justify-content: center;align-items: center;display:flex;">
            <div class="col-1"> <img src="img/article.svg" alt="gambar isi" style="width: 40%"> </div>
            <div class="col-auto" style="width: 90%">
                <form action="/post" method="POST">
                    @csrf
                    <textarea name="description" id="summernote" style="width: 100%"></textarea>
                </form>
            </div>
            </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-auto">d</div>
        </div>
    </div>
    <div class="col-auto border-left border-2 huruf1" style="width: 25%">
        <div class="row">Untuk</div>
        <br>
        <div class="row ">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Kelas 10 WKWK
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Semua Mahasiswa
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
              </div>
        </div>
        <br>
        <div class="row">Poin</div>
        <br>
        <div class="row">
            <div class="dropdown">
                <button class="btn btn-outline dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <input type="text" name="title" placeholder="100" style="width: 100%">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Tidak Dinilai</a></li>
                  </ul>
                </div>
        </div>
        <br>
        <div class="row">Tenggat</div>
        <br>
        <div class="row">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Tidak ada batas waktu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">Topik</div>
        <br>
        <div class="row">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Tidak ada topik
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">Rubrik</div>
        <br>
        <div class="row">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  + Rubrik
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <br>
    </div>

</div>
<!-- /.container-fluid -->


@endsection