<?php

class Usuario {
    public $nome;
    public $id;

    public function __construct($nome, $id) {
        $this->nome = $nome;
        $this->id = $id;
    }

    public function exibirInformacoes() {
        return "Nome: $this->nome\nID: $this->id";
    }
}
?>