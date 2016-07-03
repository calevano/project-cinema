@extends('layouts.admin')
@section('content')

    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}
        @include('admin.usuario.forms.usr')
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!!Form::close() !!}

@stop