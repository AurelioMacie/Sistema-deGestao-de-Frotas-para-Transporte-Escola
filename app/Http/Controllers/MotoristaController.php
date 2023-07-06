<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class MotoristaController extends Controller
{
    public function index(){
        $motoristas = Motorista::all();
        return view('admin.drivers.index', compact('motoristas'));
    }

    public function create(){
        return view('admin.drivers.create');
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

            if ($idade < 18) {
            return redirect('motorista/create')
            ->withErrors(['nascimento' =>
             'Apenas contratamos condutores com idade igual ou superior a 18 anos!'])
            ->withInput();
        }

        Motorista::create($request->all());
        return redirect()->route('motorista-create')->with('success', 'Seu cadastro foi realizado com sucesso!');
    }

    public function edit($id){
        $motoristas = Motorista::where('id',$id)->first();
        if(!empty($motoristas)){
            return view ('admin.drivers.edit', compact('motoristas'));
        }else{
            return redirect()->route('motorista');
        }
    }

    public function update(Request $request, $id){
        
        $data = [
            'nome' => $request-> nome,
            'telefone' => $request-> telefone,
            'documento' => $request-> documento,
            'endereco' => $request-> endereco,
            'nascimento' => $request-> nascimento,
            'sexo' => $request-> sexo,
        ];
        Motorista::where('id',$id)->update($data);
        return redirect()->route('motorista');
    }

    public function destroy($id){
        Motorista::where('id',$id)->delete();
        return redirect()->route('motorista');
    }
}
