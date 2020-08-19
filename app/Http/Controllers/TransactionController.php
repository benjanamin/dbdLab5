<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
class TransactionController extends Controller
{
    public function index(){
        $categories = Transaction::all();
        return $categories; 
    }

    public function create(){

    }

    public function store(Request $request){
        $transaccion = new Transaction;
        $transaccion->Estado = $request->Estado;
        $transaccion->Monto = $request->Monto;
        $transaccion->Cuotas = $request->Cuotas;
        $transaccion->IDFormaDePago = $request->IDFormaDePago;
        $transaccion->IDOrden = $request->IDOrden;
        $transaccion->save();
        return Transaction::all(); 
    }

    public function show($id){
        $transaccion = Transaction::findOrFail($id);
        return $transaccion;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $transaccion = Transaction::findOrFail($id);
        $transaccion->Estado = $request->Estado;
        $transaccion->Monto = $request->Monto;
        $transaccion->Cuotas = $request->Cuotas;
        $transaccion->IDFormaDePago = $request->IDFormaDePago;
        $transaccion->IDOrden = $request->IDOrden;
        $transaccion->save();
        return Transaction::findOrFail($id);
    }

    public function destroy($id){
        $transaccion = Transaction::findOrFail($id);
        $transaccion->delete();
        return Transaction::all();
    }
}
