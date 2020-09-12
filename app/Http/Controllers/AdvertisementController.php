<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use App\Category;
use App\User;

class AdvertisementController extends Controller
{
    public function index(){
        $ads = Advertisement::all();
        return view('advertisement.index', compact('ads')); 
    }

    public function create(){
        return view('advertisement.create');

    }

    public function store(Request $request){
        $request->validate([
            'Titulo' => 'required',
            'Cantidad' => 'required|numeric|min:1',
            'Descripcion' => 'required|max:255',
            'PrecioUnitario' => 'required|numeric|min:1'
        ]);

        $anuncio = new Advertisement;
        $anuncio->Titulo = $request->Titulo;
        $anuncio->Cantidad = $request->Cantidad;
        $anuncio->Descripcion = $request->Descripcion;
        $anuncio->PrecioUnitario = $request->PrecioUnitario;
        $anuncio->IDUsuario = 1; 
        $anuncio->IDCategoria = Category::where('nombre', $request->Categoria)->firstOrFail()->id; //obtendrá el id de la categoría seleccionada
        $anuncio->save();

        $ads = Advertisement::all();
        return view('advertisement.index', compact('ads'));
    }

    public function show($id){
        $ad = Advertisement::findOrFail($id);
        return view('advertisement.show', compact('ad'));
    }

    public function edit($id){
        $ad = Advertisement::findOrFail($id);        
        return view('advertisement.edit', compact('ad'));

    }

    public function update(Request $request, $id){
        $request->validate([
            'Titulo' => 'required',
            'Cantidad' => 'required|numeric|min:1',
            'Descripcion' => 'required|max:255',
            'PrecioUnitario' => 'required|numeric|min:1'
        ]);

        $anuncio = Advertisement::findOrFail($id);
        $anuncio = new Advertisement;
        $anuncio->Titulo = $request->Titulo;
        $anuncio->Cantidad = $request->Cantidad;
        $anuncio->Descripcion = $request->Descripcion;
        $anuncio->PrecioUnitario = $request->PrecioUnitario;
        $anuncio->IDUsuario = 1; 
        $anuncio->IDCategoria = Category::where('nombre', $request->Categoria)->firstOrFail()->id; //obtendrá el id de la categoría seleccionada
        $anuncio->save();

        $ads = Advertisement::all();
        return view('advertisement.index', compact('ads'));
    }

    public function destroy($id){
        $anuncio = Advertisement::findOrFail($id);
        $anuncio->delete();

        $ads = Advertisement::all();
        return view('advertisement.index', compact('ads'));
    }















    
    
    
    
    //Borrar estas funciones
    public function showForm(){
        return view('itemForm');
    }

    public function postAd(Request $request){
        $anuncio = new Advertisement;
        $anuncio->Titulo = $valid->Titulo;
        $anuncio->Cantidad = $valid->Cantidad;
        $anuncio->Descripcion = $valid->Descripcion;
        $anuncio->PrecioUnitario = $valid->PrecioUnitario;
        $anuncio->IDUsuario = 1; 
        $anuncio->IDCategoria = Category::where('nombre', $request->Categoria)->firstOrFail()->id; //obtendrá el id de la categoría seleccionada
        $anuncio->save();
        $ads = Advertisement::all();
        $last = Advertisement::latest()->first();
        return view('showAds', compact('ads'), compact('last'));
    }

    public function showAd(){
        return Advertisement::latest()->first();
    }

    public function validateAdvertisement(){
        return request()->validate([
            'Titulo' => 'required',
            'Cantidad' => 'required|numeric',
            'Descripcion' => 'required|max:255',
            'PrecioUnitario' => 'required|numeric',
            'Categoria' => 'required'
        ]);
        
    }

}
