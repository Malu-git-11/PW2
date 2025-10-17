<?php
class Produto{
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->setNome=($nome);
        $this->setPreco=($preco);
        $this->setEstoque=($estoque);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getEstoque(){
        return $this->estoque;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function vender(){
        if ($this->estoque >1) {
            $this->estoque--;

            echo "Venda realizada";
        }else {
            echo "Estoque insuficiente </br> ";
        }
    }

}