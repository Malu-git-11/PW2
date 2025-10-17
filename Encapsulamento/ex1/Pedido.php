<?php
class Pedido{
    private $saborDoBolo;
    private $quant;
    private $valorUni;

    public function getSaborDoBolo(){
        return $this->saborDoBolo;
    }

    public function getQuant(){
        return $this->quant;
    }

    public function getValorUni(){
        return $this->valorUni;
    }

    public function setSaborDoBolo($saborDoBolo){
        $this->saborDoBolo=$saborDoBolo;
    }

    public function setQuant($quant){
        $this->quant=$quant;
    }

    public function setValorUni($valorUni){
        $this->valorUni=$valorUni;
    }

    public function valorTotal(){
        $total = $this->getQuant() * $this->getValorUni();

        echo "Valor total do bolo: R$ {$total}";

        echo "</br>";

        echo "O sabor do bolo é: {$this->saborDoBolo}";
    }
    
}