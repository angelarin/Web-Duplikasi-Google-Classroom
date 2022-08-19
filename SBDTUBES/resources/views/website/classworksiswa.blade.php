@extends('siswa.main_siswa')

@section('title', 'classwork')
@section('style')

<style>
    a:link {
        text-decoration: none;
    }


    .expandable {
        background: #fff;
        overflow: hidden;
        color: #000;
        line-height: 50px;

        transition: all .5s ease-in-out;
        height: 0;
    }

    .expandable:target {
        height: auto;
    }
</style>
@endsection
@section('content')

<div class="container-fluid" style="width:70%">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-7">

            <a href="#nav" id="nav"></a>
            <div class="row">
                <div class="col card shadow border-0" style="border-radius: 10px;">
                    <div class="card-body">
                        <div id="content">
                            <a href="#nav1">
                                <div class="row">
                                    <div class="col-1 tengah"><img src="{{asset('img/task (3).jpg')}}" width="100%;"></div>
                                    <div class="col-11 tengah" style="justify-content: left">
                                        <h5 class>tanya coba coba</h5>
                                    </div>
                                </div>
                            </a>
                            <div class="expandable" id="nav1">
                                <hr />
                                <div class="mx-5">
                                    <div class="row">
                                        <div class="col-9">diposting pada //waktu</div>
                                        <div class="col-3 text-success">Ditugaskan//Telah Terkumpul</div>
                                    </div>
                                    <div style="height: 55px" class="row">
                                        //Deskripsi tugas
                                    </div>
                                    <div style="height: auto" class="row">
                                        //ditemukan attachment sejumlah
                                    </div>
                                </div>
                                <hr>
                                <div class="row mx-1">
                                    <a href="#">View question</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-2"></div>
</div>
</div>


@endsection
