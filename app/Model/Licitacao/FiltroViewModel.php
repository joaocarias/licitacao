<?php

namespace App\Model\Licitacao;

class FiltroViewModel
{
    private $uf;
    private $municipio;
    private $tipo;
    private $palavra_chave;
    private $data_inicio;
    private $data_final;
    private $listaTipos;

    function __construct($uf = null, $municipio = null, $palavra_chave = null, $tipo = null, $data_inicio = null
                , $data_final = null)
    {
        $this->uf = is_null($uf) ? "RN" : $uf;
        $this->municipio = $municipio;
        $this->palavra_chave = $palavra_chave;
        $this->data_inicio = is_null($data_inicio) ? "2019-01-01" : $data_inicio;
        $this->data_final = is_null($data_final) ? "2019-12-31" : $data_final;
        $this->tipo = $tipo;
    }

    public function getUf(){
        return $this->uf;
    }

    public function getMunicipio(){
        return $this->municipio;
    }

    public function getData_inicio(){
        return $this->data_inicio;
    }

    public function getData_final(){
        return $this->data_final;
    }

    public function getPalavra_chave(){
        return $this->palavra_chave;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }

    public function setMunicipio($municipio){
        $this->municipio = $municipio;
    }

    public function setData_inicio($data_inicio){
        $this->data_inicio= $data_inicio;
    }

    public function setData_final($data_final){
        $this->data_final = $data_final;
    }

    public function setPalavra_chave($palavra_chave){
        $this->palavra_chave = $palavra_chave;
    }

    public function setListaTipos($lista){
        $this->listaTipos = $lista;
    }

    public function getListaTipos(){
        return $this->listaTipos;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }
}
