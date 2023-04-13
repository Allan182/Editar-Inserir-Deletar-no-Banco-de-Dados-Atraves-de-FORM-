<?php

require('mysql.php');


$nome = "Allan Furlani";
$senha = "batatinha";

$inserir = $mysqli->prepare("INSERT INTO `usuarios` (`codUsuarios`, `nome`, `senha`) VALUES (NULL, ?, ?);");
$inserir->bind_param("ss",  $nome, $senha);
$inserir->execute();

echo "Cod Inserido na Base de Dados " .$mysqli->insert_id . ".";


?>