<?php
include 'conexao.php';

$sql = "SELECT id_paciente, nome_paciente, cpf_paciente, convenio_paciente FROM paciente";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Lista de Pacientes</h1>";
    echo "<table border='1'>
            <tr>
                <th>Id</th>
                <th>Nome:</th>
                <th>Cpf</th>
                <th>Convenio</th>
                <th>Ações</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_paciente"] . "</td>
                <td>" . $row["nome_paciente"] . "</td>
                <td>" . $row["cpf_paciente"] . "</td>
                <td>" . $row["convenio_paciente"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$mysqli->close();
?>