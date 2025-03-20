<?php
require_once('../Database/config.php');

$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);

if($id){
    $sql = $conn->prepare("DELETE FROM itens WHERE id = ?");

    $sql->bind_param("i", $id);

    $sql->execute();

    header("Location: ../index.php");
}  
else{
    die("Erro: Nenhum dado enviado");
}