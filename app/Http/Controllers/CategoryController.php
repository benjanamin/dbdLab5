<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return $categories; 
    }

    public function create(){

    }

    public function store(Request $request){
        $categoria = new Category;
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return Category::all(); 
    }

    public function show($id){
        $categoria = Category::findOrFail($id);
        return $categoria;
    }

    public function edit($id){

    }

    public function update(Request $request, $id){
        $categoria = Category::findOrFail($id);
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return Category::findOrFail($id);
    }

    public function destroy($id){
        $categoria = Category::findOrFail($id);
        $categoria->delete();
        return Category::all();
    }
}
