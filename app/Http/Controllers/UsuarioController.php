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
        $usuario = new Usuario();
        $usuario->create($request->all());

        return['created successfully'];
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        $usuario = Usuario::find($usuario);
        return $usuario;
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;

        $usuario->save();

        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return['deleted successfully'];
    }
}
