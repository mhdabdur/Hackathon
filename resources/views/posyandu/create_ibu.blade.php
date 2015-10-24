@extends('posyandu.app')

@section('content')
    <h1>Create Book</h1>
    {!! Form::open(['url' => 'posyandu']) !!}
    <div class="form-group">
        {!! Form::label('Ibu', 'Nama Lengkap:') !!}
        {!! Form::text('nama',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Ayah', 'Nama Suami:') !!}
        {!! Form::text('suami',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Author', 'Author:') !!}
        {!! Form::text('date', '', array('id' => 'datepicker')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publisher', 'Publisher:') !!}
        {!! Form::text('publisher',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop