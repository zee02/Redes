<?php

include 'funcoes.php';
session_start();
$text = 'Adicionar';
$mes = '';
$temp = '';
$erro = '';
$imagem = "<img width='30px' style='padding-top: 5px;' src='./images/warning.png' alt='alerta' class='align-text-bottom'  />&nbsp;";

// if (isset($_POST['btnAdicionar'])) {
//     if (isset($_POST['selectMes'])) {
//         if ($_POST['selectMes'] != 'SM') {
//             if (exists($_SESSION['localidade'],  $_POST['selectMes'])) {

//             }
//             $_SESSION['localidade'] = add_edit($_SESSION['localidade'], $_POST['selectMes'],  $_POST['inputTemp']);
//         }
//     } else {
//         $erro = $imagem . "Deves inserir um mês";
//     }
// } else if (isset($_POST['btnRemover'])) {
//     if (isset($_POST['selectMes'])) {
//         if ($_POST['selectMes'] != 'SM') {

//             $_SESSION['localidade'] = remove($_SESSION['localidade'], $_POST['selectMes']);
//         }
//     } else {
//         $erro = $imagem . "Selecione um mês";
//     }
// } else {
//     $_SESSION['localidade'] =  array('Janeiro' => '', 'Fevereiro' => '', 'Março' => '', 'Abril' => '', 'Maio' => '', 'Junho' => '', 'Julho' => '', 'Agosto' => '', 'Setembro' => '', 'Outubro' => '', 'Novembro' => '', 'Dezembro' => '');
// }

if (isset($_POST['btnAdicionar'])) {
    if (isset($_POST['selectMes'])) {
        if (exists($_SESSION['localidade'],  $_POST['selectMes'])) {
        }
        $_SESSION['localidade'] = add_edit($_SESSION['localidade'], $_POST['selectMes'],  $_POST['inputTemp']);
    } else {
        $erro = $imagem . "A temperatura já existe";
    }
} else if (isset($_POST['btnRemover'])) {
    if (isset($_POST['selectMes'])) {
        $_SESSION['localidade'] = remove($_SESSION['localidade'], $_POST['selectMes']);
    } else {
        $erro = $imagem . "Selecione um mês";
    }
} else if (isset($_POST['btnEditar'])) {
    if (isset($_POST['selectMes'])) {
        $_SESSION['localidade'] = add_edit($_SESSION['localidade'], $_POST['selectMes'],  $_POST['inputTemp']);
    }
} else if (isset($_GET['mes'], $_GET['temp'])) {
    $mes = $_GET['mes'];
    $temp = $_GET['temp'];
} else {
    $_SESSION['localidade'] =  array('Janeiro' => '', 'Fevereiro' => '', 'Março' => '', 'Abril' => '', 'Maio' => '', 'Junho' => '', 'Julho' => '', 'Agosto' => '', 'Setembro' => '', 'Outubro' => '', 'Novembro' => '', 'Dezembro' => '');
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
    <script src=".js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br />
        <form id="form" method="post">
            <div class="form-group row">
                <label for="mes" class="col-sm-2 col-form-label">Mês</label>
                <div class="col-sm-3">
                    <select class="form-control custom-select" name="selectMes">
                        <option selected value="SM" disabled>Selecione um mês</option>

                        <?php

                        select($mes);

                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="temp" class="col-sm-2 col-form-label">Temperatura Média</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="inputTemp" placeholder="Temperatura" value="<?php echo $temp; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <input type="submit" name="btnAdicionar" class="btn btn-primary" value="<?php echo $text ?>">
                    <input type="submit" name="btnRemover" class="btn btn-danger" value="&nbsp;Remover&nbsp;">
                    <input type="submit" name="btnEditar" class="btn btn-warning" value="&nbsp;Editar&nbsp;">
                </div>
                <label class="col-sm-6 form-label text-danger font-weight-bold">
                    <?php echo $erro; ?>
                </label>

            </div>
        </form>
        <div class="form-group row">
            <div class="col-sm-12">
                <table class="table table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th class='text-center'>Mês</th>
                            <th class='text-center'>Temperatura</th>
                            <th class='text-center'>Alterar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php imprime(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>