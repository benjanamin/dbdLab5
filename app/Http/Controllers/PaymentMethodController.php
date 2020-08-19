<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentMethod;
class PaymentMethodController extends Controller
{
    public function index(){
        $metods = PaymentMethod::all();
        return $metods; 
    }

    public function create(){

    }

    public function store(Request $request){
        $metodo = new PaymentMethod;
        $metodo->Descripcion = $request->Descripcion;
        $metodo->save();
        return PaymentMethod::all(); 
    }

    public function show($id){
        $metodo = PaymentMethod::findOrFail($id);
        return $metodo;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $metodo = PaymentMethod::findOrFail($id);
        $metodo->Descripcion = $request->Descripcion;
        $metodo->save();
        return PaymentMethod::findOrFail($id);
    }

    public function destroy($id){
        $metodo = PaymentMethod::findOrFail($id);
        $metodo->delete();
        return PaymentMethod::all();
    }
}
