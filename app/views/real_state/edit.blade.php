@extends('layouts.layout_base')
 
@section('title')
    crear usuarios
@stop

@section('head')
    @parent
      <style>
            .role{
                margin-top: 60px;
            }
        </style>  
@stop

@section('content')
<div class="container">
    <div class="role">
        {{ Form::Model($real_state, array('method' => 'PUT', 'route' => array('real_state.update', $real_state->id),             'class' => 'form-horizontal col-md-6')) }}
        
        <div class="form-group">
            {{Form::label('name', 'Nombre');}}
            {{Form::text('name', null, array('class' => 'form-control'));}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Descripcion');}}
            {{Form::text('description', null, array('class' => 'form-control'));}}
        </div>
            {{ Form::submit('Editar', array('class' => 'btn btn-success')) }}
            {{ Form::close() }}
        {{ Form::close() }}
    </div>
</div>
@stop