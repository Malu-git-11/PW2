<?php
require_once 'musica.php';

class musicn extends musica {
    public string $estadoDeOrigem;

    public function __construct(string $titulo, string $artista, string $estadoDeOrigem) {
        parent::__construct($titulo, $artista);
        $this->estadoDeOrigem = $estadoDeOrigem;
    }

    public function exibirInfo(): string {
        return parent::exibirInfo() . ", Estado de Origem: {$this->estadoDeOrigem}";
    }
}
?>