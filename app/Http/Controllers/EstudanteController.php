<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\Escola;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function index(){
        $estudantes = Estudante::with('escola')->get();
        return view('admin.estudants.index', compact('estudantes'));
    }

    public function create(){
        $escolas = Escola::all();
        return view('admin.estudants.create', compact('escolas'));
    }

    public function store(Request $request){
        Estudante::create($request->all());
        return redirect()->route('estudante-create')->with('success', 'Seu cadastro foi realizado com sucesso!');;
    }

    public function edit($id){
        $escolas = Escola::all();
        $estudantes = Estudante::where('id',$id)->first();
        if(!empty($estudantes)){
            return view ('admin.estudants.edit', compact('estudantes'), compact('escolas'));
        }else{
            return redirect()->route('estudante');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'responsavel' => $request-> responsavel,
            'cresponsavel' => $request-> cresponsavel,
            'aluno' => $request-> aluno,
            'nascimento' => $request-> nascimento,
            'sexo' => $request-> sexo,
            'turno' => $request-> turno,
            'paragem' => $request-> paragem,
            'escola_id' => $request-> escola_id,
        ];
        Estudante::where('id',$id)->update($data);
        return redirect()->route('estudante');
    }

    public function destroy($id){
        Estudante::where('id',$id)->delete();
        return redirect()->route('estudante');
    }
}
