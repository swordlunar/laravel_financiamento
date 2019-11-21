<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;

use GuzzleHttp\Exception\GuzzleException;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

//use Request;

use App\Http\Requests;

use App\projeto;

use Illuminate\Support\Facades\Input;

use DB;

class ProjetoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $projetos = projeto::where('status_projeto', 1)->get();
        //$total = projeto::all()->count();
        return view('main.index')->with(['projetos' => $projetos]);
    }

    public function create(){
        return view('main.create');
    }

    public function store(Request $request){
        
        $data = $request->all();

        $projeto = projeto::create($data);

        $criadoem = $projeto->created_at;

        $projetocriado = projeto::where('created_at', $criadoem)->get();

        $file1 = $request->hasFile('foto1_projeto');

        if ($file1) {
        
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.imgur.com/3/image', [
            'headers' => [
                'authorization' => 'Client-ID ' . 'f5fe64a1d26152c',
                'content-type' => 'application/x-www-form-urlencoded',
            ],'form_params' => [
                'image' => base64_encode(file_get_contents($request->file('foto1_projeto')->path()))
            ],
        ]);
        $a = response()->json(json_decode(($response->getBody()->getContents())));

        $url1 = ($a->getData()->data->link);

        } else {
            $url1 = "https://blog.viasul.com/wp-content/uploads/2017/09/118255-diferenca-entre-simulacao-de-financiamento-e-analise-de-credito-1000x640.jpg";
        }

        $file2 = $request->hasFile('foto2_projeto');        

        if ($file2) {
        
            $client = new \GuzzleHttp\Client();
    
            $response = $client->request('POST', 'https://api.imgur.com/3/image', [
                'headers' => [
                    'authorization' => 'Client-ID ' . 'f5fe64a1d26152c',
                    'content-type' => 'application/x-www-form-urlencoded',
                ],'form_params' => [
                    'image' => base64_encode(file_get_contents($request->file('foto2_projeto')->path()))
                ],
            ]);
            $a = response()->json(json_decode(($response->getBody()->getContents())));
    
            $url2 = ($a->getData()->data->link);
    
            } else {
                $url2 = "https://blog.viasul.com/wp-content/uploads/2017/09/118255-diferenca-entre-simulacao-de-financiamento-e-analise-de-credito-1000x640.jpg";
            }

        DB::table('projeto')
            ->where('created_at', $criadoem)
            ->update(['foto1_projeto' => $url1,'foto2_projeto' => $url2]);

            return redirect()->route('projeto.mostrar', [auth()->user()->id]);
            //return view('main.create');
       
    }

    public function show($id){
        $projeto = projeto::find($id);
       return view('main.show')->with(['projeto' => $projeto]);
    }

    public function mostrar_especifico($id){
        $projeto = projeto::where('id_criador', $id)->get();
       return view('main.projetoscriados')->with(['projeto' => $projeto]);
    }

    public function edit($id){
        $projeto = projeto::find($id);
       return view('main.edit')->with(['projeto' => $projeto]);
    }

    public function update(Request $request, $id){
        //$projeto = projeto::find($id)->update($request->all());
        //return redirect()->route('projeto.index');

        $data = $request->all();

        $projetocriado = projeto::where('id_projeto', $id)->get()->first();
        $titulo = Input::get('nome_projeto');
        $descr = Input::get('descricao_projeto');
        $custo = Input::get('custo_projeto');
        $tempo = Input::get('tempo_de_desenvolvimento');
        $status = Input::get('status_projeto');
        
        $file1 = $request->hasFile('foto1_projeto');

        if ($file1) {
        
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.imgur.com/3/image', [
            'headers' => [
                'authorization' => 'Client-ID ' . 'f5fe64a1d26152c',
                'content-type' => 'application/x-www-form-urlencoded',
            ],'form_params' => [
                'image' => base64_encode(file_get_contents($request->file('foto1_projeto')->path()))
            ],
        ]);
        $a = response()->json(json_decode(($response->getBody()->getContents())));

        $url1 = ($a->getData()->data->link);

        } else {
            $url1 = $projetocriado->foto1_projeto;
        }

        $file2 = $request->hasFile('foto2_projeto');        

        if ($file2) {
        
            $client = new \GuzzleHttp\Client();
    
            $response = $client->request('POST', 'https://api.imgur.com/3/image', [
                'headers' => [
                    'authorization' => 'Client-ID ' . 'f5fe64a1d26152c',
                    'content-type' => 'application/x-www-form-urlencoded',
                ],'form_params' => [
                    'image' => base64_encode(file_get_contents($request->file('foto2_projeto')->path()))
                ],
            ]);
            $a = response()->json(json_decode(($response->getBody()->getContents())));
    
            $url2 = ($a->getData()->data->link);
    
            } else {
                $url2 = $projetocriado->foto2_projeto;
            }

        DB::table('projeto')
            ->where('id_projeto', $id)
            ->update(['nome_projeto'=> $titulo, 'descricao_projeto' => $descr, 'custo_projeto' => $custo, 'tempo_de_desenvolvimento' => $tempo, 'status_projeto' => $status, 'foto1_projeto' => $url1,'foto2_projeto' => $url2]);

            $projeto = projeto::find($id);
            return view('main.edit')->with(['projeto' => $projeto]);
       

    }

    public function destroy($id){
        $projeto = projeto::find($id)->delete();
        return redirect()->route('projeto.mostrar', [auth()->user()->id]);
    }
}
