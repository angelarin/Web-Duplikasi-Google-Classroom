@extends('siswa.main_siswa')

@section('title', 'classes')
@section('content')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid" style="width: 75%">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="card img-fluid" style="width:100%; border-radius: 10px; margin: auto;">
                <img class="card-img-top" src="{{asset('img/img1.jpg')}}" alt="Card image" style="width:100%; border-radius: 10px;">
                <div class="card-img-overlay">
                    <h4 class="card-title" style="color: white; font-size: 35px; margin-top: 130px; padding-left: 10px;">
                        <b>{!! $enrollments->kelas->nama_kelas !!}</b>
                    </h4>
                </div>
            </div>
        </div>
        <div class="line" style="width: 100%; height: 1px; border-bottom: 1px dashed #ddd; margin: 15px 0;"></div>
        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-md-3" style="width:100%;">
                <!-- Project Card Example -->
                <!--
                <div class="card" style="width: 100%; border-radius: 10px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="card-title">Kode Kelas</h6>
                            </div>
                            <div class="col-md-2">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="img/3_button.png" width="15px;">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Salin Link</a></li>
                                        <li><a class="dropdown-item" href="#">Menyalin kode</a></li>
                                        <li><a class="dropdown-item" href="#">Reset Kode</a></li>
                                        <li><a class="dropdown-item" href="#">Nonaktifkan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-text">LUV123</h4>
                    </div>
                </div>
            -->
                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>
                <div class="card" style="width: 100%; border-radius: 10px;">
                    <div class="card-body">
                        <h6 class="card-title"><b>Mendatang</b></h6>
                        <!--<h6 class="card-subtitle mb-2 text-muted">Sub Title</h6>-->
                        <p class="card-text">Hore, tidak ada tugas yang perlu segera diselesaikan!</p>
                        <!--<a href="#" class="card-link">Card link</a>-->
                        <a href="#" class="card-link">Lihat semua</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9" style="width:100%; border-radius: 10px;">
                <div class="card" style="border-radius: 10px;">
                    <!-- Illustrations -->
                    <div class="card-body">
                        <form action="/post" method="post">
                            @csrf
                            <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                            <div class="float-right">
                                <button type="submit" class="btn btn-lg btn-primary" style=>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>

                <div class="card" style="border-radius: 10px;">
                    <!-- Illustrations -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('img/list-check-solid.svg')}}" width="25px;">
                            </div>
                            <div class="col-md-10">
                                <h6>Karina Angela</h6>
                                <p>3 Mei</p>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('img/3_button.png')}}" width="20px;">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Pindah ke atas</a></li>
                                        <li><a class="dropdown-item" href="#">Salin Link</a></li>
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Nonaktifkan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sapien a est ultrices
                                tincidunt. Quisque nec bibendum dui. Nam ac auctor sem, sit amet posuere odio. Ut
                                consectetur metus ipsum, a consequat mi ornare a. Proin laoreet tempor nunc vitae
                                vestibulum. Nulla volutpat mauris at ligula mollis accumsan. Pellentesque nibh justo, tempus
                                ac aliquet aliquam, condimentum vel leo. Quisque vitae faucibus ligula. Pellentesque semper
                                risus vel ante convallis ultrices. Nunc porta ultricies mauris, in mattis mi scelerisque
                                eget. Maecenas leo ipsum, iaculis vitae eros non, facilisis semper tellus. Fusce porttitor
                                cursus molestie. Cras vulputate nulla id nisl facilisis, non auctor justo interdum.
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('img/user-solid.svg')}}" width="25px;">
                            </div>
                            <div class="col-md-10">
                                <h6>Paul</h6>
                                <p>Ini Komen</p>

                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('img/3_button.png')}}" width="20px;">
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
                                    <textarea name="comment" id="comment" cols="30" rows="10" style="width: 85%; height: 60px;"></textarea>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-lg btn-primary" style=>Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>
                <div class="card" style="border-radius: 10px;">
                    <!-- Illustrations -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('img/list-check-solid.svg')}}" width="25px;">
                            </div>
                            <div class="col-md-10">
                                <h6>Karina Angela memposting tugas baru</h6>
                                <p>3 Mei</p>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('img/3_button.png')}}" width="20px;">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Pindah ke atas</a></li>
                                        <li><a class="dropdown-item" href="#">Salin Link</a></li>
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Nonaktifkan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>
            </div>
        </div>
        <!-- /.container-fluid -->


    @endsection
