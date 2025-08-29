<?php
require_once 'livro.php';

class livrodigital extends livro {
    public $formato;
    public $tamanhoarq;

    public function __construct($titulo, $autor, $isbn, $formato, $tamanhoarq) {
        parent::__construct($titulo, $autor, $isbn);
        $this->formato = $formato;
        $this->tamanhoarq = $tamanhoarq;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . "\nFormato: $this->formato\nTamanho do Arquivo: $this->tamanhoarq MB";
    }
}
