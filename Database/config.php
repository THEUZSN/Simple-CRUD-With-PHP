<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname ="todo_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Erro de cenexão: ". $conn->connect_error);
}else{
    echo "";
}

?>