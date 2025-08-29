<?php

class musica {
    public string $titulo;
    public string $artista;

    public function __construct(string $titulo, string $artista) {
        $this->titulo = $titulo;
        $this->artista = $artista;
    }

    public function exibirInfo(): string {
        return "Título: {$this->titulo}, Artista: {$this->artista}";
    }
}
?>