@extends('layouts.main_user')

@section('title', 'materi')
@section('content')

<div class="container-fluid" style="width: 55%">
    <div class="row">
        <div class="col-2 tengah">
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <img style="width: 190%; height: auto;" src="img/task (3).jpg" alt="...">
                </div>
            </div>
        </div>
        <div class="col-8 tengah" style="justify-content: left">
            <h2 style="color: #129EAF">INI MATERI</h2>
        </div>
        <div class="col-1 tengah">
            <div class="dropdown">
                <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="img/3_button.png" width="20px;">
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                    <li><a class="dropdown-item" href="#">Salin Link</a></li>
                </ul>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-9">
            <span>Karina Angela · 3 Mei</span>
            <hr style="color: #007883; height: 1px">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sapien a est ultrices
                tincidunt. Quisque nec bibendum dui. Nam ac auctor sem, sit amet posuere odio. Ut
                consectetur metus ipsum, a consequat mi ornare a. Proin laoreet tempor nunc vitae
                vestibulum. Nulla volutpat mauris at ligula mollis accumsan. Pellentesque nibh justo, tempus
                ac aliquet aliquam, condimentum vel leo. Quisque vitae faucibus ligula. Pellentesque semper
                risus vel ante convallis ultrices. Nunc porta ultricies mauris, in mattis mi scelerisque
                eget. Maecenas leo ipsum, iaculis vitae eros non, facilisis semper tellus. Fusce porttitor
                cursus molestie. Cras vulputate nulla id nisl facilisis, non auctor justo interdum.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas.
            </p>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-9">
            <div class="card" style="width: 18rem; margin-left:10px;">
                <div class="card-body">
                    <p class="card-text"><a href="#">link materi</a></p>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-9">
            <hr style="color: #9AA0A6">
            <div class="row" style="justify-content:center;align-items: center; height: 60px">
                <div class="col-1 tengah">
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2"><img src="img/people2.svg" alt=""></div>
                    </div>
                </div>
                <div class="col-11 tengah" style="justify-content: left">
                    <h6>2 komentar kelas</h6>
                    <br>
                </div>
            </div>
            <div class="row" style="height: 60px" ;>
                <div class="col-1 tengah"><img src="img/user-solid.svg" width="60%;"></div>
                <div class="col-10">
                    <div class="row tengah">
                        <h6>Paul</h6>
                    </div>
                    <div class="row tengah">
                        <p>Ini Komen</p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="dropdown">
                        <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="img/3_button.png" width="100%;">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 60px" ;>
                <div class="col-1 tengah"><img src="img/user-solid.svg" width="60%;"></div>
                <div class="col-10">
                    <div class="row tengah">
                        <h6>Paul</h6>
                    </div>
                    <div class="row tengah">
                        <p>Ini Komen</p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="dropdown">
                        <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="img/3_button.png" width="100%;">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Hapus</a></li>
                    </div>
                </div>
            </div>
            <hr style="color: #9AA0A6">
            <div class="row">
                <div class="col-1 center">
                    <img src="img/user-solid.svg" width="60%;">
                </div>
                <div class="col-11 center">
                    <div class="row center">
                        <div class="form-group">
                            <div class="input-group border-0">
                                <input type="text" class="form-control rounded-pill" placeholder="Comment">
                                <div class="input-group-append">
                                    <button class="border-0" type="submit"><img src="img/send.svg" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>


@endsection