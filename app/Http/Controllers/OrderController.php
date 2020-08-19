<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return $orders; 
    }

    public function create(){

    }

    public function store(Request $request){
        $orden = new Order;
        $orden->Estado = $request->Estado;
        $orden->Cantidad = $request->Cantidad;
        $orden->RUTUsuario = $request->RUTUsuario;
        $orden->IDAnuncio = $request->IDAnuncio;
        $orden->save();
        return Order::all(); 
    }

    public function show($id){
        $orden = Order::findOrFail($id);
        return $orden;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $orden = Order::findOrFail($id);
        $orden->Estado = $request->Estado;
        $orden->Cantidad = $request->Cantidad;
        $orden->RUTUsuario = $request->RUTUsuario;
        $orden->IDAnuncio = $request->IDAnuncio;
        $orden->save();
        return Order::findOrFail($id);
    }

    public function destroy($id){
        $orden = Order::findOrFail($id);
        $orden->delete();
        return Order::all();
    }
}
