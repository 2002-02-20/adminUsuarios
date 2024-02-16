<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();        
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataCreated = Usuario::created($request->all());
        return $dataCreated; 
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $id)
    {
        return Usuario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $id)
    {
        $usuario = Usuario::find($id);
        $dataUpdate = $usuario->update($request->all());
        return $dataUpdate;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $id)
    {
        $data = Usuario::find($id);
        $data->delete($id);
        return ['delete']; 
    }
}
