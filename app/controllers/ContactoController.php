<?php

class ContactoController extends \BaseController
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
        

        Return View::make('contacto.list', array('contacto' => Contacto::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {      
        
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
        
        
    }
}

