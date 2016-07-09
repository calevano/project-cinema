@extends('layouts.admin')
@section('content')
    @include('admin.alerts.validate')
    {!!Form::model($user, ['route'=>['usuario.update', $user->id], 'method'=>'PUT']) !!}
        @include('admin.usuario.forms.usr')
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    {!!Form::close() !!}

    {!!Form::open(['route'=>['usuario.update', $user->id], 'method'=>'DELETE']) !!}
        {!! Form::submit('ELIMINAR',['class'=>'btn btn-danger']) !!}
    {!!Form::close() !!}

@stop