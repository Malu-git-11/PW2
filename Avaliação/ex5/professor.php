<?php
require_once 'usuario.php';

class professor extends usuario {
    public $departamento;

    public function __construct($nome, $id, $departamento) {
        parent::__construct($nome, $id);
        $this->departamento = $departamento;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . "Departamento: $this->departamento";
    }
}
