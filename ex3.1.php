<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Digite um número:
        <input type="text" name="n1">
        Digite outro número:
        <input type="text" name="n2">
        <input type="submit" value="Enviar">

        <?php

            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $soma = $n1 + $n2;

            echo"<br>A soma dos números é : ".$soma;

        ?>
    </form>
</body>
</html>