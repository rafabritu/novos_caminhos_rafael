<?php

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=novos_caminhos', 'root', 'root');

    $dados = $pdo->query("select* from Alunos");

    foreach ($dados as $alunos) {
        echo "O aluno: " . $alunos[1] . " tem " . $alunos[2] . " anos.<br>";
    }
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);