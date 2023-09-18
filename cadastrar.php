<?php
include 'conexao.php';
$id_paciente = $_POST["id_paciente"];
$nome_paciente = $_POST["nome_paciente"];
$cpf_paciente = $_POST["cpf_paciente"];
$convenio_paciente = $_POST["convenio_paciente"];



$sql = "INSERT INTO paciente (id_paciente, nome_paciente, cpf_paciente, convenio_paciente)
        VALUES ('$id_paciente', '$nome_paciente', $cpf_paciente, '$convenio_paciente')";

if ($mysqli->query($sql) === TRUE) {
    header("Location: index.php");

} else {
    echo "Erro ao inserir dados: " . $mysqli->error;
}

$mysqli->close();
?>