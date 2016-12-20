<?php

class RealStateController extends \BaseController
{

    public function __construct()
    {
        $this->beforeFilter('ver_real', array('only' => 'index') );
        $this->beforeFilter('crear_real', array('only' => 'create') );
        $this->beforeFilter('crear_real', array('only' => 'store') );
        $this->beforeFilter('editar_real', array('only' => 'edit') );
        $this->beforeFilter('editar_real', array('only' => 'update') );
        $this->beforeFilter('eliminar_real', array('only' => 'delete') );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        Return View::make('real_state.list', array('real_state' => RealState::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all()->lists('name','id');
        return View::make('real_state.create', array('roles' => $roles));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {      
        $real_state = new RealState();
        $real_state->name = Input::get('name');
        $real_state->description = Input::get('description');
        $real_state->save();        
        return Redirect::route('real_state.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $real_state = RealState::find($id);
        return View::make('real_state.edit', array('real_state' => $real_state));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $real_state = RealState::find($id);
        $real_state->name = Input::get('name');
        $real_state->description = Input::get('description');
        $real_state->save();
        return Redirect::route('real_state.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        RealState::destroy($id);
        return Redirect::route('real_state.index');
    }
}

