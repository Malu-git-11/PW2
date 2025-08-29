<?php
require_once 'usuario.php';

class estudante extends usuario {
    public $curso;

    public function __construct($nome, $id, $curso) {
        parent::__construct($nome, $id);
        $this->curso = $curso;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . "\nCurso: $this->curso";
    }
}
