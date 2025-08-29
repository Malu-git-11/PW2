<?php
require_once 'livro.php';

class livrofisico extends livro {
    public $numpag;
    public $peso;

    public function __construct($titulo, $autor, $isbn, $numpag, $peso) {
        parent::__construct($titulo, $autor, $isbn);
        $this->numpag = $numpag;
        $this->peso = $peso;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . "Número de Páginas: $this->numpag Peso: $this->peso kg";
    }
}
