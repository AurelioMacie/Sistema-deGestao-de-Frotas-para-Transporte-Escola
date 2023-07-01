<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function index(){
        $escolas = Escola::all();
        return view('admin.schools.index', compact('escolas'));
    }

    public function create(){
        return view('admin.schools.create');
    }

    public function store(Request $request){
        Escola::create($request->all());
        return redirect()->route('escola');
    }

    public function edit($id){
        $escolas = Escola::where('id',$id)->first();
        if(!empty($escolas)){
            return view ('admin.schools.edit', compact('escolas'));
        }else{
            return redirect()->route('escola');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'nome' => $request-> nome,
            'localizacao' => $request-> localizacao,
        ];
        Escola::where('id',$id)->update($data);
        return redirect()->route('escola');
    }

    public function destroy($id){
        Escola::where('id',$id)->delete();
        return redirect()->route('escola');
    }
}
