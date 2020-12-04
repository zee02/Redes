<?php
$nome = "";
$sobnome = "";
$idade = "";


if (isset($_POST['info'])) {
    $nome = $_POST['nome'];
    $sobnome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="coiso.php">
        <p>
            <label class='col-sm-2' for='aasdasdadsd'>Nome:</label>
        </p>
        <input type="text" name="nome">
        <p>
            <label class='col-sm-2' for='sasdasd'>Sobrenome:</label>
        </p>

        <input type="text" name="sobrenome">
        <p>
            <label class='col-sm-2' for='asd'>Idade:</label>
        </p>

        <input type="text" name="idade">
        <p>
            <input type="submit" name='info'>
        </p>

        <p>
            <div class='form-group row'>
                <label class="col-sm-10"><?php echo "O meu nome é " . $nome . " " . $sobnome . "    e tenho " . $idade . " anos" ?></label>
            </div>
        </p>
    </form>

    <?php ?>
</body>

</html>