<?php
require_once 'connection.php';

$sql = "SELECT * FROM pacientes";
$resultado = $conexao->query($sql)->fetchAll();

print_r($resultado);
echo '<br><a href="index.php"> home </a>';
?>
