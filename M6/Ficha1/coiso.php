<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $nome = "";
    $sobnome = "";
    $idade = "";
    if (isset($_POST['info'])) {
        $nome = $_POST['nome'];
        $sobnome = $_POST['sobrenome'];
        $idade = $_POST['idade'];
    }


    echo "O meu nome é " . $nome . " " . $sobnome . "    e tenho " . $idade . " anos"
    ?>
</body>

</html>