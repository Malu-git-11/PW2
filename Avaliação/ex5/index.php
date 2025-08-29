<?php
require_once 'estudante.php';
require_once 'professor.php';
require_once 'livrodigital.php';
require_once 'livrofisico.php';
$estudante = new estudante("Maria Luiza", 101, "Engenharia");
$professor = new professor("Paloma", 202, "Matemática");

$livroDigital = new livrodigital("Teoricamente Amor", "Ali Hazelwood", "123456789", "PDF", 2.5);

$livroFisico = new livrofisico("A Hipotese do Amor", "Ali Hazelwood", "987654321", 368, 648);

echo " estudante ";
echo "</br>";
echo $estudante->exibirInformacoes();
echo "</br>";
echo " professor ";
echo "</br>";
echo $professor->exibirInformacoes();
echo "</br>";
echo " Livro Digital ";
echo "</br>";
echo $livroDigital->exibirInformacoes();
echo "</br>";
echo " Livro Físico ";
echo $livroFisico->exibirInformacoes();
