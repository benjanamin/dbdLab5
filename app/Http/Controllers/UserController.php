<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return $usuarios; 
    }

    public function create(){

    }

    public function store(Request $request){
        $usuario = new User;
        $usuario->RUT = $request->RUT;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->fechaDeNacimiento = $request->fechaDeNacimiento;
        $usuario->IDROL = 1;
        $usuario->save();
        return view('welcome');
    }

    public function show($id){
        $usuario = User::findOrFail($id);
        return $usuario;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->RUT = $request->RUT;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->telefono = $request->telefono;
        $usuario->fechaDeNacimiento = $request->fechaDeNacimiento;
        $usuario->IDROL = $request->IDROL;
        $usuario->save();
        return User::findOrFail($id);
    }

    public function destroy($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return User::all();
    }

    public function showForm(){
        return view('register');
    }
    public function showData(){
        return view('userData');
    }

    public function getUserByEmail(Request $request){
        $email =$request->input('email');
        $password = $request->input('password');
        $condition = ['email' => $email, 'password'=> $password];
        $user = User::where($condition)->first();
        
        if(empty($user)){
            return view('userData');
        }
        return $user;
    }

    
}
