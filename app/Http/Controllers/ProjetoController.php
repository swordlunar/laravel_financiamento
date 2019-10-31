<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\projeto;

class ProjetoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $projetos = projeto::all();
        //$total = projeto::all()->count();
        return view('main.index')->with(['projetos' => $projetos]);
    }

    public function create(){
        return view('main.create');
    }

    public function store(Request $request){
        projeto::create($request->all());
        
        return view('main.create');
       
    }

    public function show($id){
        $projeto = projeto::find($id);
       return view('main.show')->with(['projeto' => $projeto]);
    }

    public function edit($id){
        $projeto = projeto::find($id);
       return view('main.edit')->with(['projeto' => $projeto]);
    }

    public function update(Request $request, $id){
        $projeto = projeto::find($id)->update($request->all());
        return redirect()->route('projeto.index');
    }

    public function destroy($id){
        $projeto = projeto::find($id)->delete();
        return redirect()->route('projeto.index');
    }
}
