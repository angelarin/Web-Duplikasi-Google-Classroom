@extends('guru.main_guru')

@section('title', 'classes')
@section('content')
    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid" style="width: 75%">
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="card img-fluid" style="width:100%; border-radius: 10px; margin: auto;">
                <img class="card-img-top" src="{{ asset('img/img1.jpg') }}" alt="Card image"
                    style="width:100%; border-radius: 10px;">
                <div class="card-img-overlay">
                    <h4 class="card-title" style="color: white; font-size: 35px; margin-top: 130px; padding-left: 10px;">
                    @foreach ($roll as $item)
                    @if ($item->id_kelas==$id)
                    <b>{!! $item->kelas->nama_kelas !!}</b>
                    @break
                    @endif
                    @endforeach
                    
                        
            
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
                                        <img src="{{ asset('img/3_button.png') }}" width="15px;">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item btn btn-primary" href="/depanguru/{{$id}}/resetkode">Reset Kode</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @foreach ($roll as $item)
                    @if ($item->id_kelas==$id)
                    <h4 class="card-text">{!! $item->kelas->kode_kelas!!}</h4>
                    @break
                    @endif
                    @endforeach
                        
                    </div>
                </div>
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
                        <form action="/depanguru/buatberita" method="post">
                            @csrf
                            <input type="hidden" name="id_author" value="{{Auth::user()->id}}"/>
                            <input type="hidden" name="id_kelas" value="{{$item->id_kelas}}"/>
                            <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                            <div class="float-right">
                                <button type="submit" class="btn btn-lg btn-primary" style=>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>

                @foreach ($isiposts as $isi)
                    @if ($isi->id_kelas == $id)
                        @if ($isi->jenis == 'berita')
                            <div class="card" style="border-radius: 10px;">
                                <!-- Illustrations -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ asset('img/list-check-solid.svg') }}" width="25px;">
                                        </div>
                                        <div class="col-md-10">
                                            <h6><a href = "#">{{ $isi->authors->name }}</a></h6>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="dropdown">
                                                <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{ asset('img/3_button.png') }}" width="20px;">
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
                                        <p>{{ $isi->isi }}</p>
                                    </div>
                                    <hr>
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
                                                <textarea name="comment" id="comment" cols="30" rows="10" style="width: 85%; height: 60px;"></textarea>
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-lg btn-primary"
                                                        style=>Submit</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line"
                                style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>
                        @else
                            <div class="card" style="border-radius: 10px;">
                                <!-- Illustrations -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="{{ asset('img/list-check-solid.svg') }}" width="25px;">
                                        </div>
                                        <div class="col-md-10">
                                            <h6><a href="#">{{$isi->authors->name}} memposting {{$isi->jenis}} baru</a></h6>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="dropdown">
                                                <a class="btn btn-light" href="#" role="button" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{ asset('img/3_button.png') }}" width="20px;">
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
                        @endif
                    @endif
                @endforeach
                <div class="line"
                    style="width: 100%; height: 2px; border-bottom: 1px dashed #fff; margin: 15px 0;"></div>
            </div>
        </div>
        <!-- /.container-fluid -->


    @endsection
