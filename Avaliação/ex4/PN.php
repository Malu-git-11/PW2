<?php
require_once 'Produto.php';
class PN extends Produto {
    public $descontoEspecial;

    public function __construct($nome, $preco, $descontoEspecial) {
        parent::__construct($nome, $preco);
        $this->descontoEspecial = $descontoEspecial;
    }

    public function calcularPrecoFinal() {
        return $this->preco - $this->descontoEspecial;
    }
}
?>