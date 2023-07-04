<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Oficina;
use App\Models\Manutencao;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function index(){
        $manutencoes = Manutencao::with('veiculo', 'oficina')->get();
        return view ('admin.management.index', compact('manutencoes'));
    }

    public function create(){
        $veiculos = Veiculo::all();
        $oficinas = Oficina::all();
        return view ('admin.management.create', compact('veiculos'), compact('oficinas'));
    }

    public function store(Request $request){
        Manutencao::create($request->all());
        return redirect()->route('manutencao-create')->with('success', 'Seu cadastro foi realizado com sucesso!');
        
    }

    public function edit($id){
        $veiculos = Veiculo::all();
        $oficinas = Oficina::all();
        $manutencoes = Manutencao::all()->where('id',$id)->first();
        if(!empty($manutencoes)){
            return view ('admin.management.edit', compact('manutencoes','oficinas','veiculos'));
        }else{
            return redirect()->route('manutencao');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'id_oficina' => $request-> id_oficina,
            'id_veiculo' => $request-> id_veiculo,
            'servico' => $request-> servico,
            'comentario' => $request-> comentario,
        ];
        Manutencao::where('id',$id)->update($data);
        return redirect()->route('manutencao');
    }

    public function destroy($id){
        Manutencao::where('id',$id)->delete();
        return redirect()->route('manutencao');
    }
}
