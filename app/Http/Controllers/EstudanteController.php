<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\Escola;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function index(){
        $estudantes = Estudante::all();
        return view('admin.estudants.index', compact('estudantes'));
    }

    public function create(){
        $escolas = Escola::all();
        return view('admin.estudants.create', compact('escolas'));
    }

    public function store(Request $request){
        Estudante::create($request->all());
        return redirect()->route('estudante');
    }

    public function edit($id){
        $estudantes = Estudante::where('id',$id)->first();
        if(!empty($estudantes)){
            return view ('admin.estudants.edit', compact('estudantes'));
        }else{
            return redirect()->route('estudante');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'responsavel' => $request-> nome,
        ];
        Estudante::where('id',$id)->update($data);
        return redirect()->route('estudante');
    }

    public function destroy($id){
        Estudante::where('id',$id)->delete();
        return redirect()->route('estudante');
    }
}
