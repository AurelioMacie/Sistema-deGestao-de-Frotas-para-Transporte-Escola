<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

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
