<?php
require_once 'Produto.php';
class PI extends Produto {
    public $taxaImportacao;

    public function __construct($nome, $preco, $taxaImportacao) {
        parent::__construct($nome, $preco);
        $this->taxaImportacao = $taxaImportacao;
    }

    public function calcularPrecoFinal() {
        return $this->preco + $this->taxaImportacao;
    }
}
?>