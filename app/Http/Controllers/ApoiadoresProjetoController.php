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

    public function upload(Request $request)
    {

        /*
        * O campo do form com o arquivo tinha o atributo name="file".
        */
        $file = $request->file('imagem1');

        $image = Imgur::upload($file);

        dd($image->link());

        /*if (empty($file)) {
            abort(400, 'Nenhum arquivo foi enviado.');
        }

        $path = $file->store('uploads');

        // Faça qualquer coisa com o arquivo enviado...*/

    }

    public function update(Request $request)
    {


        //$file = $request->file('imagem1');

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.imgur.com/3/image', [
            'headers' => [
                'authorization' => 'Client-ID ' . 'f5fe64a1d26152c',
                'content-type' => 'application/x-www-form-urlencoded',
            ],'form_params' => [
                'image' => base64_encode(file_get_contents($request->file('imagem1')->path()))
            ],
        ]);
        $a = response()->json(json_decode(($response->getBody()->getContents())));
        $url = ($a->getData()->data->link);
        dd($a->getData()->data->link);
    }
}

