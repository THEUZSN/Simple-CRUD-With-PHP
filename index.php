<?php
require_once("Database/config.php");
$tasks = [];

$sql = $conn->query("SELECT * FROM itens ORDER BY id ASC");

if ($sql->num_rows > 0) {
    while ($row = $sql->fetch_assoc()) {
        $tasks[] = $row;   
    }
}
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <hr>

    <div class="box-tasks" >
            <h1>To Do List PHP</h1>
            <form action="php/create.php" method="POST" class="to-do-form">
                <input type="text" name="description" placeholder="Escreva o que quer fazer" required>
                <button type="submit" class="form-button"><i class="fa-solid fa-plus"></i></button>
            </form>
            <div id="tasks">
                <?php foreach($tasks as $task):?>
                <div class="task">
                    <input 
                        type="checkbox"
                        name="progress" 
                        data-task-id="<?= $task['id']?>"
                        class="progress <?= $task['description'] ? 'done' : ''?>"
                        <?= ($task['description'] == "true" || $task['description'] == 1) ? 'checked' : ''; ?>   
                    >

                    <p class="task-description">
                        <?= $task['name']?>
                    </p>

                    <div class="task-action">
                        <a  class="action-button edit-button"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="php/delete.php?id=<?= $task['id']?>" class="action-button delete-button"><i class="fa-solid  fa-trash"></i></a>
                    </div>
                    <form action="php/update.php" method="POST" class="to-do-form edit-task hidden">
                        <input type="text" class="hidden"  name="id" value="<?= $task['id']?>">
                        <input 
                            type="text"  
                            name="description" 
                            placeholder="Edit Sua Task"  
                            value="<?= $task['name']?>"
                        >
                        <button type="submit" class="form-button confirm-button"><i class="fa-solid fa-check"></i></button>
                    </form>
                </div>
                <?php endforeach ?>
            </div> 
    </div>
    <script src="main.js"></script>
</body>
</html>