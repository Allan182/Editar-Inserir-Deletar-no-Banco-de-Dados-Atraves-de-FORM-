<?php

require('mysql.php');


$codigo = $_GET["codigo"];

$deletar = $mysqli->prepare("DELETE FROM usuarios WHERE `usuarios`.`codUsuarios` = ?");
$deletar -> bind_param("i", $codigo);
$deletar -> execute();

if($deletar-> affected_rows != 0){

    echo "Deletado com Sucesso!";

} else {
    echo "Codigo não encontrado na base de Dados!";
}


?>