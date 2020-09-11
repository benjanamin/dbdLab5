<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users')); 
    }

    public function create(){
        return view('user.create');

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

        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));

    }

    public function update(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->RUT = $request->RUT;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->fechaDeNacimiento = $request->fechaDeNacimiento;
        $usuario->IDROL = 1; //cambiar segun permisos entre arrendador, arrendatario y admin
        $usuario->save();

        $users = User::all();


        return view('user.index', compact('users'));
    }

    public function destroy($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        $users = User::all();
        return view('user.index', compact('users'));
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
