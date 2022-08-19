@extends('guru.main_guru')

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
            <div style="display: table; height: 400px; overflow: hidden;" class="col-3">
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="dropdown">
                        <a class="btn btn-light" href="/depanguru/{{$id}}/buattugas" role="button" id="" aria-expanded="false">
                            <button class="btn btn-info  rounded-pill">
                                <h4>+ Create</h4>
                            </button>
                        </a>
                    </div>
                </div>
                <a href="#nav" id="nav"></a>
                @foreach ($isiposts as $isi)
                    @if ($isi->id_kelas == $id)
                        @if ($isi->jenis != 'berita')
                            <div class="row">
                                <div class="col card shadow border-0" style="border-radius: 10px;">
                                    <div class="card-body">
                                        <div id="content">
                                            <a href="#nav{{ $isi->id }}">
                                                <div class="row">
                                                    <div class="col-1 tengah"><img src="{{ asset('img/task (3).jpg') }}"
                                                            width="100%;"></div>
                                                    <div class="col-11 tengah" style="justify-content: left">
                                                        <h5 class>{{ $isi->judul }}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="expandable" id="nav{{ $isi->id }}">
                                                <hr />
                                                <div class="mx-5">
                                                    <div class="row">Dipost Pada: {{ $isi->updated_at }}</div>
                                                    <div style="height: auto" class="hstack gap-3">
                                                        <div class="col-8">{!! $isi->isi !!}</div>
                                                        <div class="vr"></div>
                                                        <div class="col">
                                                            <div style="height: 15px" class="row">
                                                                <h3>0</h3>
                                                            </div>
                                                        </div>
                                                        <div class="vr"></div>
                                                        <div class="col">
                                                            <div style="height: 15px" class="row">
                                                                <h3></h3>
                                                            </div>
                                                            <div style="height: 5px" class="row">Peserta</div>
                                                        </div>
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
                        @endif
                    @endif
                @endforeach
                <hr>

            </div>

        </div>
        <div class="col-2"></div>
    </div>
    </div>


@endsection
