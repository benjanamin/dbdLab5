<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
class RolController extends Controller
{
    public function index(){
        $roles = Rol::all();
        return $roles; 
    }

    public function create(){

    }

    public function store(Request $request){
        $rol = new Rol;
        $rol->Nombre = $request->Nombre;
        $rol->Descripcion = $request->Descripcion;
        $rol->save();
        return Rol::all(); 
    }

    public function show($id){
        $rol = Rol::findOrFail($id);
        return $rol;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $rol = Rol::findOrFail($id);
        $rol->Nombre = $request->Nombre;
        $rol->Descripcion = $request->Descripcion;
        $rol->save();
        return Rol::findOrFail($id);
    }

    public function destroy($id){
        $rol = Rol::findOrFail($id);
        $rol->delete();
        return Rol::all();
    }
}
