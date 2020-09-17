<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Validator;
use Auth;


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
        $request->validate([
            'RUT' => 'required|min:9|max:10|unique:users',
            'nombre' => 'required|max:35',
            'email' => 'required|email|unique:users',
            'password' => 'required|alpha_num|max:12|min:5',
            'direccion' => 'required|max:60',
            'telefono' => 'required|numeric|digits:8',
            'fechaDeNacimiento' => 'required'
        ]);
        $usuario = new User;
        $usuario->RUT = $request->RUT;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->fechaDeNacimiento = $request->fechaDeNacimiento;
        $usuario->IDROL = Rol::where('Nombre', $request->Rol)->firstOrFail()->id; 
        $usuario->save();
        
        return redirect('/user/loginPage');
    }

    public function show($id){
        $user = User::findOrFail($id);
        $rol = Rol::findOrFail($user->IDROL);
        return view('user.show', compact('user'), compact('rol'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));

    }

    public function update(Request $request, $id){
        $request->validate([
            'RUT' => 'required|min:9|max:10|unique:users',
            'nombre' => 'required|max:35',
            'email' => 'required|email|unique:users',
            'password' => 'required|alpha_num|max:12|min:5',
            'direccion' => 'required|max:60',
            'telefono' => 'required|numeric|digits:8',
            'fechaDeNacimiento' => 'required'
        ]);

        $usuario = User::findOrFail($id);
        $usuario->RUT = $request->RUT;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->fechaDeNacimiento = $request->fechaDeNacimiento;
        $usuario->IDROL = Rol::where('Nombre', $request->Rol)->firstOrFail()->id;
        $usuario->save();

        return redirect('/user/loginPage');
    }

    public function destroy($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        $users = User::all();
        return redirect('/user/create');
    }

    public function loginPage(){
        return view('user.login');
    }

    public function checkLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        
        $user_data = array(
            'email' => $request->input('email'),
            'password' => $request->input('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('/user/success');
        }
        else{
            return back()->with('error', 'Datos de ingreso incorrectos.');
        }

    }

    public function success(){
        return view('user.success');
    }

    public function logout(){
        Auth::logout();
        return redirect('/user/loginPage');
        
    } 











    //Borrar estas funciones
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
