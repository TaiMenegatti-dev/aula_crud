<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_paciente = $_POST['nome_paciente'];
    $cpf_paciente = $_POST['cpf_paciente'];
    $convenio_paciente = $_POST['convenio_paciente'];

    $sql = "UPDATE paciente SET nome_paciente = ?, idade_paciente = ?";
    $stmt = $conexao->prepare($sql);
    $stmt = bind_param("sii", $nome_paciente, $cpf_paciente, $convenio_paciente);

    if ($stmt->execute()) {

        header("Location: consultar.php");
    } else {
        echo "Erro ao atualizar o paciente" . $conexao->error;
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
        <form action="consultar.php" class="formulario" method="post">

        <input type="HIDDEN" name="id_pacientes" id="status" value="<?php echo $paciente ['id_paciente']; ?>" required>

            <label for="nome_paciente">Nome do Cliente:</label>
            <input type="text" name="nome_paciente" id="nome_produto" value="<?php echo $paciente ['nome_paciente']; ?>" required>

            <label for="cpf_paciente">CPF:</label>
            <input type="number" name="cpf_paciente" id="quantidade" value="<?php echo $paciente ['cpf_paciente']; ?>" required>

            <label for="convenio_paciente">Convênio Médico:</label>
            <input type="text" name="convenio_paciente" id="valor" required>
          

            <button class="btn" type="submit">Atualizar</button>
        </form>
</body>
</html>