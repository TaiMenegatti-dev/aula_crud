<?php
include 'conexao.php';

    $sql = 'SELECT * FROM paciente';
    $resultado = $mysqli->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h1>Lista de Pacientes</h1>";
    echo "<table border='1'>
            <tr>
                <th>Id</th>
                <th>Nome:</th>
                <th>Cpf</th>
                <th>Convenio</th>
                <th>Ações</th>
            </tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_paciente"] . "</td>
                <td>" . $row["nome_paciente"] . "</td>
                <td>" . $row["cpf_paciente"] . "</td>
                <td>" . $row["convenio_paciente"] . "</td>
                <td>
                <a href='editar.php?id_paciente=" . $row["id_paciente"] . "'>Editar</a>
                <a href='excluir.php?id_paciente=". $row["id_paciente"] . "'>Exlcuir</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$mysqli->close();
?>