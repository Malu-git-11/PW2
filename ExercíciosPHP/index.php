<?php
require_once "./Produto.php";
require_once "./Eletronico.php";

$produto1 = new Produto("Camiseta", 59.90);
$produto1->exibirInfo();

echo "<br>";

$eletronico1 = new Eletronico("Notebook", 3500, 12);
$eletronico1->exibirInfo();