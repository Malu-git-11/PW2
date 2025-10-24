<?php

require_once 'SistemaMain.php';

class Equipamento extends SistemaMain{
    private $secretaria;
    private $tipo;
    private $nome;
    private $cood;

     function __construct($secretaria, $tipo, $nome,$cood){
        $this->secretaria = $secretaria;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->$cood= $cood;
    }

    //Secretaria
    public function getSecretaria (){
        return $this->secretaria;
    }
    public function setSecretaria($secretaria){
        $this->secretaria = $secretaria;
    }

    //Tipo
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    //Nome
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    //Cood
    public function getCood(){
        return $this->cood;
    }
    public function setCood($cood){
        $this->cood = $cood;
    }
}