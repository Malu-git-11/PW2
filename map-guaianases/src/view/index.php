<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require_once '../controller/appController.php';

$user1->cadastrarEquipamento();
$user1->atualizarEquipamento();
$user1->deletarEquipamento();

echo "</br>";

$user2->cadastrarEquipamento();
$user2->atualizarEquipamento();
$user2->deletarEquipamento();

echo "</br>";

$user3->cadastrarEquipamento();
$user3->atualizarEquipamento();
$user3->deletarEquipamento();

echo "</br>";

?>

</body>
</html>