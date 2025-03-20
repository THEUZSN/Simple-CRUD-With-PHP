<?php

require_once "../Database/config.php";

$id = filter_input(INPUT_POST,"id", FILTER_SANITIZE_NUMBER_INT);
$description = filter_input(INPUT_POST,"description", );

if($id && $description){
    $sql = $conn->prepare('UPDATE itens SET description = ? WHERE id = ?');
    $sql->bind_param('si', $description, $id);

    $sql->execute();

    echo json_encode(['success'=> true ]);
    exit;
}else{
    echo json_encode(['success'=> false ]);
}