<?php

require_once 'SistemaMain.php';

class Usuario extends SistemaMain{
    public function pesquisarEquipamento(){
        echo 'Pesquisou';
    }
    public function logar(){
        echo 'Logou';
    }
    public function verMapa(){
        echo 'O usuário visualizou o mapa';
    }
    public function tracarRota(){
        echo 'O usuário traçou a rota';
    }
}