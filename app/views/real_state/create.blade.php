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
        {{ Form::open(array('method' => 'POST', 'route' => array('real_state.store'), 'class' => 'form-horizontal col-md-6')) }}
        
        <div class="form-group">
            {{Form::label('name', 'Nombre');}}
            {{Form::text('name', '',array('class' => 'form-control'));}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Descripcion');}}
            {{Form::text('description', '',array('class' => 'form-control'));}}
        </div>
            {{ Form::submit('Crear', array('class' => 'btn btn-success')) }}
        {{ Form::close() }}
    </div>
</div>
@stop