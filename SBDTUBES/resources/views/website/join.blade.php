@extends('layouts.main')

@section('title', 'Gabung Kelas')
@section('content')

<div class="container-fluid" style="width: 60%">
    <div class="row">
        <div class="mb-3" style="justify-content">
            {!! Form::model($enrollments,['route'=>'blogmasukkelas']) !!}
            <label for="exampleInputEmail1" class="form-label">Anda Saat Ini Login Sebagai</label>
            <div id="emailHelp" class="form-text"><big>{{ Auth::user()->name
                    }}</big><big>({{Auth::user()->email}})</big></div>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 form-group">
            {!! Form::label('kode_kelas') !!}
            {!! Form::text('kode_kelas', null, ['class'=>'form-control']) !!}
            {!! Form::hidden('status', 'siswa', ['class'=>'form-control display-none']) !!}
            @if($errors->any())
            <h6 class='text-danger'>{{$errors->first()}}</h6>
            @endif
        </div>
        <div class="form-group">
            {!! Form::submit('Masuk',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection