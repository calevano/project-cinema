@extends('layouts.admin')
@section('content')
    @include('admin.alerts.validate')
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}
        @include('admin.usuario.forms.usr')
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!!Form::close() !!}

@stop