<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Licitacao\Licitacao;
use App\Model\Licitacao\FiltroViewModel;
use DateTime;
use Exception;
use Illuminate\Support\Facades\DB;

class LicitacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('licitacao.index');
    }

    public function atualize(Request $request){
        $msg = $request->input('msg'); 
        $filtro = new FiltroViewModel('RN');
        return View('licitacao.atualize', [ 'filtro' => $filtro, 'msg' => $msg ]);
    }

    public function store(Request $request){      
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
                    $url = "https://alertalicitacao.com.br/api/v1/licitacoesAbertas/?uf=".$uf."&pagina=". $paginaAtual;            
                    $file_json = file_get_contents($url);
                    $array = json_decode($file_json, true);
                    $arrayLicitacoes = $array['licitacoes'];
                }

                try{
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
                        $licitacao->abertura = $this->converterDataParaUSA($l['abertura']);
                        $licitacao->aberturaComHora = $this->converterDataTimeUSA($l['aberturaComHora']);
                        $licitacao->id_tipo = $l['id_tipo'];
                        $licitacao->tipo = $l['tipo'];
            
                        $query = Licitacao::where('id_licitacao', $licitacao->id_licitacao)->get();

                        if(count($query) == 0){                       
                            $licitacao->save();
                        }
                    }
                }catch(Exception $e){}
                 $paginaAtual++;
            }

            return redirect('/licitacao/atualize/?msg=200&uf='.$uf);    
        }
    }

    public function converterDataParaUSA($data_BRA){                        
        $d = explode('/', $data_BRA);
        $dOK = $d[2].'-'.$d[1].'-'.$d[0];
        return $dOK;     
    }

    public static function converterDataTimeUSA($data_BRA){                
        $d = explode('/', $data_BRA);
        $ano_hora = explode(" ", $d[2]);        
        $dOK = $ano_hora[0].'-'.$d[1].'-'.$d[0] . ' '.$ano_hora[1];
        return $dOK;      
    }

    public function licitacoes(Request $request){
        
        $filtro = new FiltroViewModel($request->input('uf')
                                    , $request->input('municipio')
                                    , $request->input('palavra_chave')
                                    , $request->input('tipo')
                                    , $request->input('data_inicio')
                                    , $request->input('data_final')
                );

        $subQuery = "";

        if( !is_null($filtro->getPalavra_chave()) && $filtro->getPalavra_chave() != ""){
             $subQuery = $subQuery . " and (municipio LIKE '%".$filtro->getPalavra_chave()."%'
                                            or objeto like '%".$filtro->getPalavra_chave()."%'
                                            or tipo LIKE '%".$filtro->getPalavra_chave()."%'
                                        )";   
        }

        if( !is_null($filtro->getMunicipio()) && $filtro->getMunicipio() != ""){
            $subQuery = $subQuery . " and (municipio LIKE '%".$filtro->getMunicipio()."%')";   
        }

        if( !is_null($filtro->getTipo()) && $filtro->getTipo() != "" ){
            $subQuery = $subQuery . " and (tipo LIKE '%".$filtro->getTipo()."%')";
        }

        if( !is_null($filtro->getData_inicio()) && $filtro->getData_inicio() != "" && !is_null($filtro->getData_final()) && $filtro->getData_final() != "" ){
            $subQuery = $subQuery . " and ( abertura_datetime between '".$filtro->getData_inicio()."' AND '".$filtro->getData_final()."')";
        }
            
        $licitacoes = DB::select(' select * from licitacaos 
                                    WHERE uf = ? 
                                    ' . $subQuery . '
                                    ORDER BY aberturaComHora desc'
                                , [$filtro->getUf()] );     
                                
        $listaTipo = DB::select(' select tipo from licitacaos
                                     group by tipo
                                     order by tipo asc ');
                                    
        $filtro->setListaTipos($listaTipo);

        return view('licitacao.licitacoes', ['licitacoes' => $licitacoes, 'filtro' => $filtro ] );
    }

    public function create()
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
