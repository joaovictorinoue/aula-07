<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Digite sua Idade: <input type="text" name="idade"><br>
        <button type="submit">Entrar</button>
    </form>
    <?php

    if (isset($_GET['idade'])) {
    $idade = $_GET['idade'];

    if ($idade < 18)
    echo "Entrada não Permitida";
    else
    echo "Entrada Permitida";
    }
    ?>
</body>
</html>