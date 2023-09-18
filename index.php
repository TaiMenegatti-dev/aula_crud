<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<!--Pedro Lucas n°28-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="css/style.css">
</head>

<body>
    <div class="content ">
        <h2>Cadastro de Produtos</h2>
        <form action="cadastrar.php" class="formulario" method="post">
            <label for="nome_paciente">Nome do Cliente:</label>
            <input type="text" name="nome_paciente" id="nome_produto" required>

            <label for="quantidade">CPF:</label>
            <input type="number" name="cpf_paciente" id="cpf_paciente" required>

            <label for="valor">Convênio Médico:</label>
            <input type="text" name=" convenio_paciente" id="convenio_paciente" required>

            <button class="btn" type="submit">Cadastrar</button>
        </form>

        <button class="btn-voltar" type="button"><a href="consultar.php">Lista de Pedidos</a></button>
</body>

</html>