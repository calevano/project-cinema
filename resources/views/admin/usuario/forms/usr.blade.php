<div class="form-group">
    {!! Form::label('Nombre:') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa nombre del usuario']) !!}
</div>
<div class="form-group">
    {!! Form::label('Correo:') !!}
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa correo del usuario']) !!}
</div>
<div class="form-group">
    {!! Form::label('Password:') !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa password del usuario']) !!}
</div>