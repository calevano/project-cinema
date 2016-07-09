@extends('layouts.admin')
@section('content')

    {!! Form::open()!!}
        <div id="message" class="alert alert-success alert-dismissible d-none" role="alert"></div>
        <input type="hidden" name="token" value="{{ csrf_token() }}" id="token">
        @include('admin.genero.forms.genero')
        {!! link_to('#', 'Registrar',['id'=> 'registro', 'class'=>'btn btn-primary'],null) !!}
    {!! Form::close() !!}
@stop
