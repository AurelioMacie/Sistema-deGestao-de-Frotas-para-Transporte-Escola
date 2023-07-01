<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    public function index(){
        $oficinas = Oficina::all();
        return view ('admin.officine.index', compact('oficinas'));
    }

    public function create(){
        return view ('admin.officine.create');
    }

    public function store(Request $request){
        Oficina::create($request->all());
        return redirect()->route('oficina');

    }

    public function edit($id){
        $oficinas = Oficina::where('id',$id)->first();
        if(!empty($oficinas)){
            return view ('admin.officine.edit', compact('oficinas'));
        }else{
            return redirect()->route('oficina');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'nome' => $request-> nome,
            'telefone' => $request-> telefone,
            'endereco' => $request-> endereco,
            'especializacao' => $request-> especializacao,
        ];
        Oficina::where('id',$id)->update($data);
        return redirect()->route('oficina');
    }


    public function destroy($id){
        Oficina::where('id',$id)->delete();
        return redirect()->route('oficina');
    }
}
