<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\apoiadores_projeto;

use App\projeto;

class ApoiadoresProjetoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id){
        $projeto = projeto::find($id);
        return view('apoiadores.create')->with(['projeto' => $projeto]);
    }

    public function store(Request $request){
        $data = $request->all();
        $apoio = apoiadores_projeto::create($data);
        //dd($apoio->id_projeto);
        //dd($apoio->valor_doado);
        $id = $apoio->id_projeto;
        $projeto = projeto::find($id);
        $valor = $apoio->valor_doado;
        $valor_final = ($valor + $projeto->custo_atual_projeto);
        $projeto = projeto::find($id)->update(['custo_atual_projeto' => $valor_final]);
        return redirect()->route('projeto.index');
   
    }

    public function show($id){
        $projeto = projeto::find($id);
        return view('apoiadores.show')->with(['projeto' => $projeto]);
    }
}
