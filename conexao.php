<?php
$hostname = "localhost";
$bancodedados = "banco3_crud";
$usuario = "root";
$senha = "";

$mysqli = new mysqli("$hostname", "$usuario", "$senha", "$bancodedados");
if ($mysqli-> connect_error) {
    die("Falha ao conectarao Banco de Dados: " . $mysqli->error);
}
?>