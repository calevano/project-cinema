@extends('layouts.admin')
@section('content')

    {!!Form::model($user, ['route'=>['usuario.update', $user->id], 'method'=>'PUT']) !!}
        @include('admin.usuario.forms.usr')
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    {!!Form::close() !!}

@stop