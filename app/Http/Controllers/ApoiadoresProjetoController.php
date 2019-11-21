<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;

use GuzzleHttp\Exception\GuzzleException;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\apoiadores_projeto;

use App\projeto;

use Imgur;

use DB;

class ApoiadoresProjetoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $projetos = DB::table('projeto')
            ->join('apoiadores_projeto', 'projeto.id_projeto', '=', 'apoiadores_projeto.id_projeto')
            ->select('projeto.*', 'apoiadores_projeto.*')
            ->get();
            return view('apoiadores.projetosapoiados')->with(['projetos' => $projetos]);    
    }

    public function create(){
        return view('apoiadores.create');
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
        return redirect()->route('apoiadores_projeto.index');
        //return redirect()->route('projeto.index');
   
    }

    public function show($id){
        $projeto = projeto::find($id);
        return view('apoiadores.show')->with(['projeto' => $projeto]);
    }


}

