<?php
require_once "Produto.php";

class Eletronico extends Produto {
    public $garantia;

    public function __construct($nome, $preco, $garantia) {
        parent::__construct($nome, $preco);
        $this->garantia = $garantia;
    }

    public function getGarantia() {
        return $this->garantia;
    }

    public function setGarantia($garantia) {
        $this->garantia = $garantia;
    }

    public function exibirInfo() {
        echo "Produto: {$this->getNome()} <br>";
        echo "Preço: R$ {$this->getPreco()} <br>";
        echo "Garantia: {$this->garantia} meses <br>";
    }
}