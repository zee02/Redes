<?php 
function imprime()
{

    foreach ($_SESSION['pessoas'] as $id => $cats) {
        echo "  <tr>

                    <td>$cats[0]</td>
                    <td>$cats[1]</td>
                    <td>$cats[2]</td>
                    <td>$cats[3]</td>
                    <td><a href='default.php?rem=$id'> <img width=30 src='lixo.png' alt='lixo'></a>
                        <a href='default.php?edit=$id'> <img width=30 src='edit.png' alt='edit'></a>
                    </td>

                         </tr>";
    }
}

function remover($id) {
    unset($_SESSION['pessoas'][$id]);
}


function adicionar()
{
    $nome = $_POST['inputNome'];
    $morada = $_POST['inputMorada'];
    $pais = $_POST['selectPais'];
    $genero = $_POST['inputGenero'];
    if(count($_SESSION['pessoas']) == 0) {
        $id=1;
    }else {
        end($_SESSION['pessoas']);
        $id = key($_SESSION['pessoas']) +1;
    }
    $_SESSION['pessoas'][$id] = array($nome, $morada,$pais,$genero);
}


function editar($id) {
    
    global $nome, $morada, $pais, $genero ,$masc, $fem , $color, $text;
    $nome = $_SESSION['pessoas'] [$id][0];
    $morada = $_SESSION['pessoas'] [$id][1];
    $pais =$_SESSION['pessoas'] [$id][2];
    $genero = $_SESSION['pessoas'] [$id][3];

    if($genero == 'M') {
        $masc = 'checked';
        $fem = '';
    }else {
        $masc = '';
        $fem = 'checked';
    }

    $color = 'btn-warning';
    $text = 'Editar';
}
?>