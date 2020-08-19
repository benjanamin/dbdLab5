<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permision;
class PermissionController extends Controller
{
    public function index(){
        $categories = Permission::all();
        return $categories; 
    }

    public function create(){

    }

    public function store(Request $request){
        $permiso = new Permission;
        $permiso->Descripcion = $request->Descripcion;
        $permiso->save();
        return Permission::all(); 
    }

    public function show($id){
        $permiso = Permission::findOrFail($id);
        return $permiso;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $permiso = Permission::findOrFail($id);
        $permiso->Descripcion = $request->Descripcion;
        $permiso->save();
        return Permission::findOrFail($id);
    }

    public function destroy($id){
        $permiso = Permission::findOrFail($id);
        $permiso->delete();
        return Permission::all();
    }
}
