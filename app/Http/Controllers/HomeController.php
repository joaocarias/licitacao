<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Licitacao;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $file_json = file_get_contents('https://alertalicitacao.com.br/api/v1/licitacoesAbertas/?uf=RN');
        $array = json_decode($file_json, true);
        
        $arrayLicitacoes = $array['licitacoes'];
        $licitacoes = array();
        
        foreach($arrayLicitacoes as $l){
            $licitacao = new Licitacao();
            
            $licitacao->id_licitacao = $l['id_licitacao'];
            $licitacao->titulo = $l['titulo'];
            $licitacao->municipio_IBGE = $l['municipio_IBGE'];
            $licitacao->uf = $l['uf'];
            $licitacao->orgao = $l['orgao'];
            $licitacao->abertura_datetime = $l['abertura_datetime'];
            $licitacao->objeto = $l['objeto'];
            $licitacao->link = $l['link'];
            $licitacao->municipio = $l['municipio'];
            $licitacao->abertura = $l['abertura'];
            $licitacao->aberturaComHora = $l['aberturaComHora'];
            $licitacao->id_tipo = $l['id_tipo'];
            $licitacao->tipo = $l['tipo'];

            array_push($licitacoes, $licitacao);
        }

        return view('home', ['licitacoes' => $licitacoes, 'array' => $array]);
    }
}
