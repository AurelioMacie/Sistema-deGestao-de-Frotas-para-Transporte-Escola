<?php

namespace App\Http\Controllers;

use App\Models\Rota;
use Illuminate\Http\Request;

class RotaController extends Controller
{
    public function index(){
        $rotas = Rota::all();
        return view('admin.rota.index', compact('rotas'));
    }

    public function create(){
        return view('admin.rota.create');
    }

    public function store(Request $request){
        Rota::create($request->all());
        return redirect()->route('rota');
    }

    public function edit($id){
        $rotas = Rota::where('id',$id)->first();
        if(!empty($rotas)){
            return view ('admin.rota.edit', compact('rotas'));
        }else{
            return redirect()->route('rota');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'partida' => $request-> partida,
            'destino' => $request-> destino,
            'descricao' => $request-> descricao,
        ];
        Rota::where('id',$id)->update($data);
        return redirect()->route('rota');
    }

    public function destroy($id){
        Rota::where('id',$id)->delete();
        return redirect()->route('rota');
    }
}
