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
        Digite um Número: <input type="text" name="num"><br>
        <button type="submit">Entrar</button>
    </form>
    <?php

    if (isset($_GET['num'])) {
    $num = $_GET['num'];

    if($num > 0)
{
    for($i = 0; $i <11; $i++)
    {
        echo "$i x $num = " . $i * $num ."<br>";
    }
}
    }
    ?>
</body>
</html>