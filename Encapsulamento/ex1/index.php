<?php
require_once 'Pedido.php';

$pedido = new Pedido;
$pedido->setValorUni(valorUni:15);
$pedido->setSaborDoBolo(saborDoBolo: "Cenoura");
$pedido->setQuant(quant: 2);
$pedido->valorTotal();