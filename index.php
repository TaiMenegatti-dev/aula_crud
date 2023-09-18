<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Cadastro de Pacientes</h1>
        <form class="formulario" action="cadastrar.php" method="post">

        <label for="id_paciente">Id:</label>
        <input type="text" name="id_paciente" id="id_paciente" required>

        <label for="nome_paciente">Nome:</label>
        <input type="text" name="nome_paciente" id="nome_paciente" required>
        
        <label for="cpf_paciente">Cpf:</label>
        <input type="number" name="cpf_paciente" id="cpf_paciente" required>
        
        <label for="convenio_paciente">Convenio:</label>
        <input type="text" name="convenio_paciente" id="convenio_paciente" required>
        
        <input class="btn" type="submit" value="Cadastrar">
    </form>
    <button class="btn-voltar" type="button"><a href="consultar.php">Lista de Pacientes</a></button>

    </div>
</body>
</html>