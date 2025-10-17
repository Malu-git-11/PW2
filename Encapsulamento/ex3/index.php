<?php
require_once 'Produto.php';

$produto = new Produto("Celular", 2.000, 5);
$produto->vender();
$produto->vender();
$produto->vender();