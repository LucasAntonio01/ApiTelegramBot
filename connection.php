<?php

// function novaConexao($db = 'luthadel') {
    $db = 'telegram_api';
    $servidor = 'localhost';
    $usuario = 'postgres';
    $senha = 'root';
    $dsn = sprintf( 'pgsql:dbname=%s;host=%s;port=5432', $db, $servidor );

try {
    $conexao = new PDO($dsn, $usuario, $senha );
    echo 'Conectado<br>';

} catch (PDOException $e) {
    die($e->getMessage());
    echo 'f';
}
//    return $conexao;
//} 