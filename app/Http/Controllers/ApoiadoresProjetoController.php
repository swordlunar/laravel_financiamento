<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\apoiadores_projeto;

class ApoiadoresProjetoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('apoiadores.create');
    }

    public function store(Request $request){
        apoiadores_projeto::create($request->all());
        
        return view('apoiadores.create');
       
    }
}
