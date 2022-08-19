@extends('guru.main_guru')

@section('title', 'Reset Kode')
@section('content')

<div class="container-fluid" style="width: 60%">
    <div class="row">
        <div class="mb-3" style="justify-content">
            {!! Form::model($kelas,['route'=>'gururesetkode','method'=>'put']) !!}
            <label for="exampleInputEmail1" class="form-label">Anda Saat Ini Login Sebagai</label>
            <div id="emailHelp" class="form-text"><big>{{ Auth::user()->name
                    }}</big><big>({{Auth::user()->email}})</big></div>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @foreach ($kelas as $tampil)
        <div class="mb-3 form-group">
            {!! Form::label('Apakah anda ingin reset kode?') !!}
            {!! Form::hidden('id', $id, ['class'=>'form-control']) !!}
            {!! Form::hidden('kode_kelas', rand(0, 999999), ['class'=>'form-control display-none']) !!}
            @if($errors->any())
            <h6 class='text-danger'>{{$errors->first()}}</h6>
            @endif
        </div>
        <div class="form-group">
            {!! Form::submit('Setuju',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    @break
    @endforeach 
</div>
@endsection