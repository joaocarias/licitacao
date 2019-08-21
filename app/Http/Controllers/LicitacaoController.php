<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Licitacao\Licitacao;
use App\Model\Licitacao\FiltroViewModel;

class LicitacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $filtro = new FiltroViewModel($request->input('uf'), $request->input('palavra_chave'));

        $_string_uf = ($filtro->getUf() != null && $filtro->getUf() != "") 
            ? "uf=" . $filtro->getUf() 
            : $_string_uf = "uf=RN";
        
        $_string_palavra_chave = ($filtro->getPalavra_chave() != null && $filtro->getPalavra_chave() != ""  ) 
            ? "&palavra_chave=" . $filtro->getPalavra_chave()
            : ""; 

        $file_json = file_get_contents("https://alertalicitacao.com.br/api/v1/licitacoesAbertas/?".$_string_uf."".$_string_palavra_chave);
        $array = json_decode($file_json, true);
       
        $totalDePaginas = $array['paginas'];
        
        $arrayLicitacoes = $array['licitacoes'];
        $licitacoes = array();
                 
        $paginaAtual = 1;
        while ($paginaAtual <= $totalDePaginas){

            if($paginaAtual > 1){
                $file_json = file_get_contents("https://alertalicitacao.com.br/api/v1/licitacoesAbertas/?".$_string_uf."".$_string_palavra_chave."&pagina=". $paginaAtual);
            }

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

            $paginaAtual++;
        }   

    //    var_dump($array);
       return view('licitacao.index', ['licitacoes' => $licitacoes, 'array' => $array, 'filtro' => $filtro ] );
     //return view('licitacao/index', ['licitacoes' => $array, 'filtro' => $filtro ] );
    }

    public function atualize(Request $request){
        $msg = $request->input('msg'); 
        $filtro = new FiltroViewModel('RN');
        return View('licitacao.atualize', [ 'filtro' => $filtro, 'msg' => $msg ]);
    }

    public function atualizarBaseDeDado(Request $request){      
        $uf = $request->input('uf');

        $file_json = file_get_contents("https://alertalicitacao.com.br/api/v1/licitacoesAbertas/?uf=".$uf);
        $array = json_decode($file_json, true);

        if($array['totalErros'] > 0){
            return redirect('/licitacao/atualize/?msg=404'); 
        }else{
            
            $totalDePaginas = $array['paginas'];
            $arrayLicitacoes = $array['licitacoes'];
            
            $licitacoes = array();
            $paginaAtual = 1;
            while ($paginaAtual <= $totalDePaginas){

                if($paginaAtual > 1){
                    $file_json = file_get_contents("https://alertalicitacao.com.br/api/v1/licitacoesAbertas/?uf=".$uf."&pagina=". $paginaAtual);
                }

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
                 //   $licitacao->abertura = $l['abertura'];
                  //  $licitacao->aberturaComHora = $l['aberturaComHora'];
                    $licitacao->id_tipo = $l['id_tipo'];
                    $licitacao->tipo = $l['tipo'];
        
                    $query = Licitacao::where('id_licitacao', $licitacao->id_licitacao)->get();

                    if(count($query) == 0){                       
                        $licitacao->save();
                    }
                }

                $paginaAtual++;
            }

            return redirect('/licitacao/atualize/?msg=200');    
        }
    }

    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
