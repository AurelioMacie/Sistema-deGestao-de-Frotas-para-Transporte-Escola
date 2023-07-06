<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\Escola;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

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
        
        $validator = Validator::make($request->all(), [
            'nascimento' => 'required|date|before_or_equal:today',
        ]);

        if ($validator->fails()) {
            return redirect('motorista/create')->withErrors($validator)->withInput();
        }

        $dataNascimento = Carbon::parse($request->input('nascimento'));
        $idade = $dataNascimento->diffInYears(Carbon::now());

            if ($idade < 10) {
            //   return redirect()->route('estudante-create')->with('success', 'OPS!!!!!');
            return redirect('estudante/create')
            ->withErrors(['nascimento' =>
             'Apenas transportamos alunos com idade igual ou superior a 10 anos!'])
            ->withInput();
        }

        Estudante::create($request->all());
        return redirect()->route('estudante-create')->with('success', 'Seu cadastro foi realizado com sucesso!');
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
