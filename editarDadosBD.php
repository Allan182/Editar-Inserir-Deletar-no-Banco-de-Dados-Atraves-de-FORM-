<?php

require('mysql.php');


$codigo = $_POST['codigo'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$alterar = $mysqli->prepare("UPDATE `usuarios` SET `nome` = ?, `senha` = ? WHERE `usuarios`.`codUsuarios` = ?;");
$alterar->bind_param("ssi", $login, $senha, $codigo);
$alterar->execute();

if($alterar->affected_rows != 0 ){
    echo "Dados Alterados com Sucesso!";
} else {
    echo "Código Não encontrado na Base de Dados!";
}

?>