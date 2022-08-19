@extends('layouts.main_user')

@section('title', 'classes')
@section('content')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid" style="width: 90%;">
        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-md-1" style="width:100%;">
                <img class="img-fluid px-3 px-sm-4 ml-5 mt-4" src="img/task (3).jpg" alt="...">
            </div>
            <div class="col-md-8" style="width:100%; border-radius: 10px;">
                <div class="card" style="border-radius: 10px; background-color: #fff; border-color:#fff">
                    <!-- Illustrations -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-11">
                                <h2>INI TUGAS</h2>
                                <h6>Karina Angela &nbsp; &nbsp; 3 Mei</h6>
                                <h6>100 poin</h6>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="img/3_button.png" width="20px;">
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
                        <div class="row">
                            <div class="card" style="width: 18rem; margin-left:10px; margin-bottom: 15px;">
                                <div class="card-body">
                                    <p class="card-text"><a href="#">link materi</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card" style="width: 100%; margin-left:10px; margin-bottom:10px; box-shadow: 1px 1px 8px 5px rgba(0,0,0,0.14);">
                                <div class="form-group">
                                    <label for="comment">Jawaban Anda : &nbsp; &nbsp; Ditugaskan</label>
                                    <form action="/post" method="post">
                                        <textarea name="jawaban" id="jawaban" cols="30" rows="10" style="width: 85%; height: 60px;"></textarea>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-lg btn-primary" style=>Serahkan</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-10">
                                <h6>2 komentar kelas</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <img src="img/user-solid.svg" width="25px;">
                            </div>
                            <div class="col-md-10">
                                <h6>Paul</h6>
                                <p>Ini Komen</p>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="img/3_button.png" width="20px;">
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
                <div class="card" style="width: 100%; border-radius: 10px; box-shadow: 1px 1px 8px 5px rgba(0,0,0,0.14);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="card-title">Komentar Pribadi</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <img src="img/user-solid.svg" width="15px;">
                            </div>
                            <div class="col-md-8">
                                <h6>Paul</h6>
                                <p>Ini Komen</p>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="img/3_button.png" width="10px;">
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
