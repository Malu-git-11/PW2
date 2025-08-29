<?php
require_once 'musica.php';

class musici extends musica {
    public string $paisDeOrigem;

    public function __construct(string $titulo, string $artista, string $paisDeOrigem) {
        parent::__construct($titulo, $artista);
        $this->paisDeOrigem = $paisDeOrigem;
    }

    public function exibirInfo(): string {
        return parent::exibirInfo() . ", País de Origem: {$this->paisDeOrigem}";
    }
}
?>