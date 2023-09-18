<?php
include 'conexao.php';

if (isset($_GET["id_paciente"])) {
    $id_paciente = $_GET["id_paciente"];

    $sql = "SELECT * FROM paciente WHERE id_paciente = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt-> bind_param("i", $id_paciente);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
    } else {
        die ("Paciente não encontrado.");
    }

} else {
    die ("Id do paciente não especificado");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_paciente = $_POST['nome_paciente'];
    $cpf_paciente = $_POST['cpf_paciente'];
    $convenio_paciente = $_POST['convenio_paciente'];

    $sql = "UPDATE paciente SET nome_paciente = ?, cpf_paciente = ?, convenio_paciente = ? WHERE id_paciente = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt-> bind_param("siss", $nome_paciente, $cpf_paciente, $convenio_paciente, $id_paciente);

    if ($stmt->execute()) {

        header("Location: consultar.php");
    } else {
        echo "Erro ao atualizar o paciente" . $mysqli->error;
    }

    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/style.css">
    <title>Editar Paciente</title>
</head>
<body>
<h2>Editar Pacientes</h2>
        <form action="" class="formulario" method="post">

            <input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $row['id_paciente']; ?>" required>

            <label for="nome_paciente">Nome do Cliente:</label>
            <input type="text" name="nome_paciente" id="nome_paciente" value="<?php echo $row['nome_paciente']; ?>" required>

            <label for="cpf_paciente">CPF:</label>
            <input type="number" name="cpf_paciente" id="cpf_paciente" value="<?php echo $row['cpf_paciente']; ?>" required>

            <label for="convenio_paciente">Convênio Médico:</label>
            <input type="text" name="convenio_paciente" id="convenio_paciente" value="<?php echo $row['convenio_paciente']; ?>" required>
          

            <button class="btn" type="submit">Atualizar</button>
        </form>
</body>
</html>