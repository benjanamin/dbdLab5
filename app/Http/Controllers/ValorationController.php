<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valoration;
use App\Advertisement;
use Auth;
class ValorationController extends Controller
{
    public function index(){
        $categories = Valoration::all();
        return $categories;
    }

    public function create(){


    }

    public function store(Request $request){
        $valoracion = new Valoration;
        $valoracion->Titulo = $request->Titulo;
        $valoracion->Estrellas = $request->Estrellas;
        $valoracion->Comentario = $request->Comentario;
        $valoracion->IDUsuario = Auth::user()->id;
        $valoracion->IDAnuncio = $request->IDAnuncio;
        $valoracion->save();
        // return Valoration::all(); 
        return view("valoration.success", compact('valoracion'));
    }

    public function show($id){
        $valoracion = Valoration::findOrFail($id);
        return $valoracion;
    }

    public function showValoration($id){
        // $valoracion = Valoration::findOrFail($id);
        $anuncio = Advertisement::findOrFail($id);
        return view("valoration.create", compact('anuncio'));
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $valoracion = Valoration::findOrFail($id);
        $valoracion->Titulo = $request->Titulo;
        $valoracion->Estrellas = $request->Estrellas;
        $valoracion->Comentario = $request->Comentario;
        $valoracion->RUTUsuario = $request->RUTUsuario;
        $valoracion->IDAnuncio = $request->IDAnuncio;
        $valoracion->save();
        return Valoration::findOrFail($id);
    }

    public function destroy($id){
        $valoracion = Valoration::findOrFail($id);
        $valoracion->delete();
        return Valoration::all();
    }
}
