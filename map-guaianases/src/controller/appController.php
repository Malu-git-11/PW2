<?php
require_once '../model/SistemaMain.php';
require_once '../model/Usuario.php';
require_once '../model/UserConect.php';
require_once '../model/Equipamento.php';

$user1 = new UserConect('Maria',1234,'email@gmail.com');
$user2 = new UserConect('Giovanna', 5678, 'gi@gmail.com');
$user3 = new UserConect('Sarah', 9273, 'sarah@gmail.com');
