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
        apoiadores_projeto::create($request->all());
        $projetos = projeto::where('status_projeto', 1)->get();
        return view('main.index')->with(['projetos' => $projetos]);
       
    }

    public function show($id){
        $projeto = projeto::find($id);
        return view('apoiadores.show')->with(['projeto' => $projeto]);
    }
}
