<?php

namespace App\Model\Licitacao;

class FiltroViewModel
{
    private $uf;
    private $palavra_chave;

    function __construct($uf = null, $palavra_chave = null)
    {
        $this->uf = is_null($uf) ? "RN" : $uf;
        $this->palavra_chave = $palavra_chave;
    }

    public function getUf(){
        return $this->uf;
    }

    public function getPalavra_chave(){
        return $this->palavra_chave;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }

    public function setPalavra_chave($palavra_chave){
        $this->palavra_chave = $palavra_chave;
    }
}
