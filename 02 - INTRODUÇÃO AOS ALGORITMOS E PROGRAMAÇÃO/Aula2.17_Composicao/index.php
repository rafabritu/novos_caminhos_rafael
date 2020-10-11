<?php

declare(strict_types=1);

use classes\User;
use classes\Company;

require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('2.17 - Relacionamento entre objetos');

/*
*Em composição temos um objeto base que é responsável por instanciar o 
*objeto parte, que só existe enquanto o base existir.
Objetos criados dentro de outro objeto. Em associação um
*não depende do outro. 
*/
PHPClassSession('Composicao', __LINE__);

$IFTO = new Company;

$IFTO->addTeamMember("Docente", "Iury", "Oliveira");
$IFTO->addTeamMember("Tutor1", "Fernando", "Arantes");
$IFTO->addTeamMember("Tutor2", "Daniel", "Canoli");
$IFTO->addTeamMember("Tutor3", "Luciano", "Ribeiro");
$IFTO->addTeamMember("Supervisor", "José", "Roberto");

var_dump($IFTO);

/**
 * Mostra cada objeto que está dentro do vetor Team que está 
 * na classe Company
 * 
 */
foreach ($IFTO->getTeam() as $member) {
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}