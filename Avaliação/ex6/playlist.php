<?php

class playlist {
    public array $musica;

    public function __construct() {
        $this->musica = [];
    }

    public function adicionarMusica(musica $musica): void {
        $this->musica[] = $musica;
    }

    public function exibirPlaylist(): void {
        echo "playlist:";
        foreach ($this->musica as $musica) {
            echo $musica->exibirInfo();
        }
    }
}
