<?php

class livro {
    public $titulo;
    public $autor;
    public $isbn;

    public function __construct($titulo, $autor, $isbn) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
    }

    public function exibirInformacoes() {
        return "Título: $this->titulo Autor: $this->autor ISBN: $this->isbn";
    }
}
