<?php
require_once 'PI.php';
require_once 'PN.php';

$pi = new PI("Notebook", 3000.00, 450.00);
echo "Produto Importado: " . $pi->getNome() . "\n";
echo "Preço Final: R$ " . number_format($pi->calcularPrecoFinal(), 2, ',', '.') . "\n\n";

$pn = new PN("Smartphone", 2000.00, 150.00);
echo "Produto Nacional: " . $pn->getNome() . "\n";
echo "Preço Final: R$ " . number_format($pn->calcularPrecoFinal(), 2, ',', '.') . "\n";
?>