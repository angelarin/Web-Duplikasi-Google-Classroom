@extends('layouts.main')

@section('title', 'Gabung Kelas')
@section('content')

  <div class="container-fluid" style="width: 60%">
    <div class="row">
    <div class="mb-3" style="justify-content">
      {!! Form::model($kelas,['route'=>'blogcreatekelas']) !!}
      <label for="exampleInputEmail1" class="form-label">Anda Saat Ini Login Sebagai</label>
      <div id="emailHelp" class="form-text"><big>{{ Auth::user()->name }}</big><big>({{Auth::user()->email}})</big></div>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3 form-group">
      {!! Form::label('nama_kelas') !!}
      {!! Form::text('nama_kelas', , ['class'=>'form-control']) !!}
      {!! Form::hidden('kode_kelas', rand(0,999999), ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Buat',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
</div>
@endsection