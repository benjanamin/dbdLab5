<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RolPermission;

class RolPermissionController extends Controller
{
    public function index(){
        $categories = RolPermission::all();
        return $categories; 
    }

    public function create(){

    }

    public function store(Request $request){
        $roles = new RolPermission;
        $roles->IDROL = $request->IDROL;
        $roles->IDPERMISSION = $request->IDPERMISSION;
        $roles->save();
        return RolPermission::all(); 
    }

    public function show($id){
        $roles = RolPermission::findOrFail($id);
        return $roles;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $roles = RolPermission::findOrFail($id);
        $roles->IDROL = $request->IDROL;
        $roles->IDPERMISSION = $request->IDPERMISSION;
        $roles->save();
        return RolPermission::findOrFail($id);
    }

    public function destroy($id){
        $roles = RolPermission::findOrFail($id);
        $roles->delete();
        return RolPermission::all();
    }
}
