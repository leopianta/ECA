<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=eca', 'root', '');

    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    $pdo->exec("set names utf8");
} catch ( PDOException $e ) {
    trigger_error('Erro ao conectar com o Banco: ' . $e->getMessage(),E_USER_ERROR);
    exit(1);
}