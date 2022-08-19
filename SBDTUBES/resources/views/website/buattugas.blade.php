@extends('guru.main_guru')

@section('title', 'Buat Tugas')
@section('content')
<form action="/depanguru/kumpulbuat" method="POST">
<div class="row mx-3 flex">
    <div class="col-9">
        <div class="row" style="height: 4rem;justify-content: center;align-items: center;display:flex;">
            <div class="col-1">
                @foreach ($roll as $item)
                    
                @endforeach
                <form action="/depanguru/kumpulbuat" method="POST">
                <img src="{{asset('img/article_judul.svg')}}" alt="gambar judul" style="width: 40%"  > </div>
                <div class="form-row col-auto" style="width: 90%">
                <input type="text" class="form-control" name="judul" placeholder="Judul">
            </div>
        </div>
        <div class="row" style="justify-content: center;align-items: center;display:flex;">
            <div class="col-1"> <img src="{{asset('img/article.svg')}}" alt="gambar isi" style="width: 40%"> </div>
            <div class="col-auto" style="width: 90%">
                
                    @csrf
                    <input type="hidden" name="id_author" value="{{Auth::user()->id}}"/>
                    <input type="hidden" name="id_kelas" value="{{$item->id_kelas}}"/>
                    <textarea name="description" id="summernote" style="width: 100%"></textarea>
                
            </div>
            </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-auto"></div>
        </div>
    </div>
    <div class="col-auto border-left border-2 huruf1" style="width: 25%">
        <div class="row">Untuk</div>
        <br>
        <div class="row ">
            <div class="dropdown">
                <button class="btn btn-outline-dark" type="button"aria-expanded="false">
                  {{$item->kelas['nama_kelas']}}
                </button>
                <button class="btn btn-outline-dark" type="button"aria-expanded="false">
                    Semua Mahasiswa
                  </button>
              </div>
        </div>
        <br>
        <div class="row">Jenis</div>
        <br>
        <div class="row">
                <select name="jenis">Jenis
                    <option value="materi">Materi</option>
                    <option value="tugas">Tugas</option>
                    <option value="isian">Isian</option>
                </select>
        </div>
        <br>
        <div class="row">
            <button type="submit" class="btn btn-outline-dark">Buat</button>
        </div>
    </div>

</div>
</form>


@endsection