@extends('layouts.layout_base')
 
@section('title')
    crear usuarios
@stop

@section('head')
    @parent
        <style>
            .user{
                margin-top: 60px;
            }
        </style>    
@stop

@section('content')
<div class="container">
    <div class="user">
        
        <div class="form-group">
            {{Form::label('name', 'Nombre');}}
            {{Form::text('name', '',array('class' => 'form-control'));}}
        </div>
        <div class="form-group">
            {{Form::label('correo', 'Email');}}
            {{Form::text('correo', '',array('class' => 'form-control'));}}
        </div>
        <div class="form-group">
            {{Form::label('mensaje', 'Mensaje');}}
            {{Form::textarea('notes');}}
        </div>
            {{ Form::submit('Enviar', array('class' => 'btn btn-success')) }}
        {{ Form::close() }}
    </div>
</div>
@stop