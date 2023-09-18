<?php
include 'conexao.php';

if (isset($_GET['id_paciente'])) {
    $id_paciente = $_GET['id_paciente'];
    
    $sql = 'SELECT * FROM paciente WHERE id_paciente = ?'
    $stmt = $conexao->prepare($sql);
    $stmt = bind_param('i',$id_paciente);
    $stmt = execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $paciente = $resultado->fetch_assoc();
    } else {
        die ("Paciente não encontrado.");
    }
} else {
    die ("Id do pPaciente não especificado.");
}

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
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_paciente"] . "</td>
                <td>" . $row["nome_paciente"] . "</td>
                <td>" . $row["cpf_paciente"] . "</td>
                <td>" . $row["convenio_paciente"] . "</td>
                <td>
                <a href='editar.php?id=" . $row["id_paciente"] . "'>Editar</a>
                <a href='excluir.php?id=". $row["id_paciente"] . "'>Exlcuir</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$mysqli->close();
?>