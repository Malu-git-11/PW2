<?php
require_once 'AlunoAcademia.php';

$aluno = new AlunoAcademia();
$aluno->setNome(nome: "Malu");
$aluno->setPeso(peso: 50);
$aluno->setAltura(altura: 1.60);
$aluno->imc();