<?php

class AlunoAcademia{
    private $nome;
    private $peso;
    private $altura;

    public function getNome(){
        return $this->nome;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function imc(){
        $imc = $this->peso / ($this->altura * $this->altura);
        if ($this->peso >= 30) {
            echo "O seu IMC é: {$imc}";
        } else {
            echo "Erro";
        }
    }
}