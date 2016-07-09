@extends('layouts.admin')
@include('admin.alerts.success')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Email</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
@stop