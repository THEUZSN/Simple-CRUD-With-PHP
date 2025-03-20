<?php
require_once("../Database/config.php"); // Certifique-se de que o caminho está correto!

// Verifica se o campo description foi enviado
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

if ($description) {
    // Prepara a query para inserir no banco
    $sql = $conn->prepare("INSERT INTO itens (name,description) VALUES (?, false)");

    $sql->bind_param("s", $description); // "s" indica string
    $executou = $sql->execute();
    
    // Redireciona para a página principal
    header("Location: ../index.php");
    exit;
} else {
    die("Erro: Nenhum dado enviado.");
}
?>
