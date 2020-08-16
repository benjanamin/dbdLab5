<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;

class AdvertisementController extends Controller
{
    public function index(){
        $advertisements = Advertisement::all();
        return $advertisements; 
    }

    public function create(){

    }

    public function store(Request $request){
        $anuncio = new Advertisement;
        $anuncio->Titulo = $request->Titulo;
        $anuncio->Cantidad = $request->Cantidad;
        $anuncio->Descripcion = $request->Descripcion;
        $anuncio->PrecioUnitario = $request->PrecioUnitario;
        $anuncio->RUTUsuario = $request->RUTUsuario;
        $anuncio->IDCategoria = $anuncio->IDCategoria;
        $anuncio->save();
        return Advertisement::all(); 
    }

    public function show($id){
        $anuncio = Advertisement::findOrFail($id);
        return $anuncio;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $anuncio = Advertisement::findOrFail($id);
        $anuncio = new Advertisement;
        $anuncio->Titulo = $request->Titulo;
        $anuncio->Cantidad = $request->Cantidad;
        $anuncio->Descripcion = $request->Descripcion;
        $anuncio->PrecioUnitario = $request->PrecioUnitario;
        $anuncio->RUTUsuario = $request->RUTUsuario;
        $anuncio->IDCategoria = $anuncio->IDCategoria;
        $anuncio->save();
        return Advertisement::findOrFail($id);
    }

    public function destroy($id){
        $anuncio = Advertisement::findOrFail($id);
        $anuncio->delete();
        return Advertisement::all();
    }
}
