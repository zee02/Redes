<?php 

function imprime()
{

    $str = "";
    foreach ($_SESSION['localidade'] as $mes => $temp) {
        $str = $str . "  <tr>

                    <td>$mes</td>
                    <td>$temp</td>";
if($temp != '') {
    $str = $str . "     <td><a href='default.php?mes=$mes&temp=$temp'> <img width=30 src='images/edit.png' alt='edit'></a>
                    </td>

                         </tr>";
} else {

}
    $str = $str . "</tr>";
}
}

function add_edit ($localidade, $mes,$temp) {

    
    $localidade[$mes] = $temp;


    return $localidade;
}

function remove($localidade, $mes) {
    $localidade[$mes] = "";

    return $localidade;
}

function exists($localidade, $mes) {
    if($localidade[$mes] == "") {
        $existe = false;
    }else {
      $existe =true;
    }
    
    
    return $existe;
}


function select($mes) {

                        foreach ($_SESSION['localidade'] as $mes => $value) {
                            if ($mes == $mes) {
                                echo "<option selected='$value'>$value</option>";
                            } else {
                                echo "<option value='$value'>$value</option>";
                            }
                        }
}
?>
