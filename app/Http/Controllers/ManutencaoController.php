<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function index(){
        // $manutencoes = Manutencao::all();
        // return view ('admin.management.index', compact('manutencoes'));
        return view ('admin.management.index');
    }

    public function create(){
        return view ('admin.management.create');
    }

    public function store(Request $request){
        // Manutencao::create($request->all());
        // return redirect()->route('manutencao');
        
    }

    public function update(){

    }

    public function destroy(){

    }
}
