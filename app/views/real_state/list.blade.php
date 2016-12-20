@extends('layouts.layout_base')
 
@section('title')
    users
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
        @if(Entrust::can('crear_real'))
        {{ Form::open(array('method' 
                            => 'get', 'route' => array('real_state.create'))) }}
                            {{ Form::submit('Crear', array('class'
                        => 'btn btn-success')) }}
                        {{ Form::close() }}
        @endif
        <table class="table table-hover">
            <thead>
                <tr><th>Nombre</th><th>Descripcion</th></tr>
            </thead>
            @if(isset($real_state))
                <tbody>
                @foreach($real_state as $real_state)
                    <tr><td>{{ $real_state->name }}</td>
                        <td>{{ $real_state->description }}</td>
                        @if(Entrust::can('editar_real'))
                            <td>{{ Form::open(array('method' 
                            => 'GET', 'route' => array('real_state.edit', $real_state->id))) }}
                            {{ Form::submit('Editar', array('class'
                        => 'btn btn-info')) }}
                        {{ Form::close() }}</td>
                        @endif
                        @if(Entrust::can('eliminar_real'))
                        <td>
                            {{ Form::open(array('method' 
                            => 'DELETE', 'route' => array('real_state.destroy', $real_state->id))) }}
                            {{ Form::submit('Eliminar', array('class'
                        => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                        @endif
                    </tr>
                @endforeach
                    </tbody>
            @endif
        </table>
    </div>
</div>
@stop