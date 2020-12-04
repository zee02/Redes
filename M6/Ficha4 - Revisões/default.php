<?php
include 'funcoes.php';
session_start();
$nome = '';
$morada = '';
$pais = '';
$genero = '';
$fem = '';
$masc = 'checked';
$color = 'btn-primary';
$text = 'Adicionar';


if (isset($_POST['btnAdicionar'])) {
    if ($_POST['btnAdicionar'] == 'Adicionar') {
        adicionar();
    } else {
        $id = $_GET['edit'];
        $_SESSION['pessoas'][$id][0] = $_POST['inputNome'];
        $_SESSION['pessoas'][$id][1] = $_POST['inputMorada'];
        $_SESSION['pessoas'][$id][2] = $_POST['selectPais'];
        $_SESSION['pessoas'][$id][3] = $_POST['inputGenero'];
    }
} else if (isset($_GET['rem'])) {
    remover($_GET['rem']);
} else if (isset($_GET['edit'])) {
    editar($_GET['edit']);
} else {
    $_SESSION['pessoas'] = array(1 => array('Afonso', 'Braga', 'Portugal', 'M'), 2 => array('Rute', 'Roma', 'Itália', 'F'), 3 => array('Alexandre', 'Londres', 'Inglaterra', 'M'));
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <br>
        <form action="" method="post">
            <div class="form-group row">
                <label for="inputNome" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="inputNome" id="inputNome" value="<?php echo $nome; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMorada" class="col-sm-2 col-form-label">Morada:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputMorada" id="inputMorada" value="<?php echo $morada; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="selectPais" class="col-sm-2 col-form-label">País:</label>
                <div class="col-sm-6">
                    <select class="form-control" id="selectPais" name="selectPais" required>
                        <option value="OP" selected="selected" disabled>Selecione um país</option>
                        <?php
                        $paises = array('Portugal', 'França', 'Itália', 'Inglaterra');
                        foreach ($paises as $value) {
                            if ($pais == $value) {
                                echo "<option selected='$value'>$value</option>";
                            } else {
                                echo "<option value='$value'>$value</option>";
                            }
                        }


                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Género:</label>
                <div class="col-sm-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inputGenero" id="inputGenero1" value="M" <?php echo $masc; ?>>
                        <label class="form-check-label" for="inputGenero1">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inputGenero" id="inputGenero2" value="F" <?php echo $fem; ?>>
                        <label class="form-check-label" for="inputGenero2">F</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="submit" class="btn <?php echo $color ?>" id="btnAdicionar" name="btnAdicionar" value="<?php echo $text ?>">
                </div>
            </div>

        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Morada</th>
                    <th scope="col">País</th>
                    <th scope="col">Género</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php imprime(); ?>
            </tbody>
        </table>
    </div>

    <?php


    ?>

</body>


</html>