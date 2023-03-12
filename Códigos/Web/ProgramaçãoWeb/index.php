<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página em PHP</title>
</head>

<body>

    <?php

    $nome = "Helo";
    $idade = 17;
    $altura = 1.58;


    echo "<p> Me chamo $nome </p>";
    echo "<p> Tenho $idade </p>";
    echo "<p> Tenho $altura de altura</p>";


    ?>

    <p>Meu nome é <?= $nome ?></p>

</body>

</html>