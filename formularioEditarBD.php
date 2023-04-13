<?php

require('mysql.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulário </title>
</head>

<body>

    <form action="editarDadosBD.php" method="POST">

        <label for="codigo"> Cod: </label>
        <input type="text" name="codigo">

        <label for="login"> Login: </label>
        <input type="text" name="login" id="login">

        <label for="senha"> Senha: </label>
        <input type="text" name="senha" id="senha">

        <input type="submit" value="Alterar">

    </form>

</body>

</html>