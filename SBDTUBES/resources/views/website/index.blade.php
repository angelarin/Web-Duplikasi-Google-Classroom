@extends('layouts.main')

@section('title', 'classes')
@section('content')
<!-- Content Wrapper -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#">
            <h1 class="h5 ml-5 mb-0 text-gray-800">To-do</h1>
        </a>
    </div>

    <!-- Always shows a header, even in smaller screens. -->
    
    <div style="height: 40rem; width: 100%;" class="row mx-5">
        @foreach ($enrollments as $tampil)
        @if ($tampil->id_user == Auth::user()->id)
            
        <div class="mdl-cell mdl-cell-custom mdl-cell--3-col">

            <div style="width: 25%" class="card animated border-0">


                <div style="border-radius: 7px;" class="front demo-card-square mdl-card mdl-shadow--2dp">
                    <div style="background-image: url('img/cardsbg.png'); background-size: 325px;"
                        class="mdl-card__title mdl-card--expand ">
                        <img class="avatar" src="img/undraw_profile_1.svg" alt="" />
                        <h2 class="mdl-card__title-text">{{$tampil->kelas['nama_kelas']}}</h2>
                    </div>
                    <div style="height: 100px" class="mdl-card__supporting-text">
                        <a class="stretched-link" href="depan{{$tampil->status}}/{{$tampil->id_kelas}}"></a>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <div style="position: relative; z-index: 2;" class="mdl-button">
                            <a href="depan{{$tampil->status}}/{{$tampil->id_kelas}}">Masuk</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        @endif
        @endforeach
        @if(session('message'))
        <div class="alert alert-info">
            {{session('message')}}
        </div>
        @endif
    </div>
    

</div>

</header>



@endsection