<?php

declare(strict_types=1); //Força o PHP a receber somente o tipo de valor definido
require __DIR__ . '/../framework/config.php';
PHPClassName('Classes, propriedades e objetos');

/*
*
*/
PHPClassSession('Classes e objetos', __LINE__);
require_once __DIR__ . "/classes/User.php";

$user1 = new User;
$user2 = new User;
$user3 = new User;
var_dump($user1, $user2, $user3);
PHPClassSession('Propriedades', __LINE__);

$user1->setFirstName("Iury");
$user1->setLastName("Oliveira");
$user1->setEmail("kkkddd");

var_dump($user1, $user1->getFirstName());

PHPClassSession('Métodos', __LINE__);

if (!$user1->setEmail("iury.oliveira@ifto.edu.br")) {
    echo "<p class='trigger error'> O email {$user1->getEmail()} não é válido !</p>";
}

var_dump($user1);