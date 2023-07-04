<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index(){
        $veiculos = Veiculo::all();
        return view ('admin.drive.index', compact('veiculos'));
    }

    public function create(){
        return view ('admin.drive.create');
    }

    public function store(Request $request){
        Veiculo::create($request->all());
        return redirect()->route('veiculo-create')->with('success', 'Seu cadastro foi realizado com sucesso!');

    }

    public function edit($id){
        $veiculos = Veiculo::where('id',$id)->first();
        if(!empty($veiculos)){
            return view ('admin.drive.edit', compact('veiculos'));
        }else{
            return redirect()->route('veiculo');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'modelo' => $request-> modelo,
            'placa' => $request-> placa,
            'ano' => $request-> ano,
            'capacidade' => $request-> capacidade,
            'combustivel' => $request-> combustivel,
            'estado' => $request-> estado,
        ];
        Veiculo::where('id',$id)->update($data);
        return redirect()->route('veiculo');
    }


    public function destroy($id){
        Veiculo::where('id',$id)->delete();
        return redirect()->route('veiculo');
    }
}
