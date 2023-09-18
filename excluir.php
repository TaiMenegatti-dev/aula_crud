<?php
include 'conexao.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Preparar e executar a consulta SQL para excluir o item
    $sql = "DELETE FROM paciente WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Item excluído com sucesso!";
    } else {
        echo "Erro ao excluir o item: " . $stmt->error;
    }
    
    // Fechar a consulta e a conexão
    $stmt->close();
} else {
    echo "ID inválido para exclusão.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>