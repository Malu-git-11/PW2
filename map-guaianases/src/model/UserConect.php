<?php

require_once 'SistemaMain.php';

class UserConect extends SistemaMain{

    //Construtor
    public function __construct($nomeUser, $senha, $email){
        parent::__construct ($nomeUser, $senha, $email);
    }

    

    //Métodos
    public function favoritar(){
        echo "O {$this->getNomeUser()} favoritou equipamento.";
    }

    public function cadastrarEquipamento(){
        echo "{$this->getNomeUser()} cadastrou um equipamento";
    }

    public function atualizarEquipamento(){
        echo "{$this->getNomeUser()} atualizou o equipamento";
    }

    public function deletarEquipamento(): void{
        echo "{$this->getNomeUser()} deletou o equipamento";
    }

    public function pesquisarEquipamento(){
        echo 'Pesquisou';
    }
    
    public function verMapa(){
        echo 'O usuário visualizou o mapa';
    }
    public function tracarRota(){
        echo 'O usuário traçou a rota';
    }


}