<?php

declare(strict_types=1);

use classes\Address;
use classes\Company;

require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('2.16 - Relacionamento entre objetos');

/*
*
*/
PHPClassSession('Associacao', __LINE__);


$Empresa = new Company;

$Empresa->bootCompany("IFTO", "Tocantins");

var_dump($Empresa);

$Endereço = new Address("Rua Agnaldo de Carvalho Soares", 48, "Periquito");

$Empresa->boot("IFTO", $Endereço);

var_dump($Empresa);