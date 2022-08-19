@extends('guru.main_guru')

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
                        <hr>
                        <div class="row">
                            <div class="col-md-10">
                                <h6>Komentar kelas</h6>
                            </div>
                        </div>
                        @foreach ($komenn as $kom)
                            @if ($kom->id_isipost == $id)
                                @if ($kom->status_komen == '1')
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ asset('img/user-solid.svg') }}" width="25px;">
                                        </div>
                                        <div class="col-md-10">
                                            <h6>{!! $kom->usernya->name !!}</h6>
                                            <p>{!! $kom->isi_komen !!}</p>
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
                                @endif
                            @endif
                        @endforeach
                        <div class="row">
                            <div class="form-group">
                                <label for="comment">Comment:</label>

                                <form action="buatkomen" method="post">
                                    @csrf
                                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" />
                                    <input type="hidden" name="id_isipost" value="{{ $isiposts->id }}" />
                                    <input type="hidden" name="status_komen" value="1" />
                                    <textarea name="commentumum" id="comment" cols="30" rows="10" style="width: 100%; height: 60px;"></textarea>
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
                        @foreach ($komenn as $kom)
                            @if ($kom->id_isipost == $id)
                                @if ($kom->status_komen == '2')
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ asset('img/user-solid.svg') }}" width="15px;">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>{!! $kom->usernya->name !!}</h6>
                                            <p>{!! $kom->isi_komen !!}</p>
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
                                @endif
                            @endif
                        @endforeach
                        <div class="row">
                            <div class="form-group">
                                <hr>
                                <form action="buatkomen" method="post">
                                    @csrf
                                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" />
                                    <input type="hidden" name="id_isipost" value="{{ $isiposts->id }}" />
                                    <input type="hidden" name="status_komen" value="2" />
                                    <textarea name="commentpri" id="comment" cols="30" rows="10" style="width: 100%; height: 60px;"></textarea>
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
