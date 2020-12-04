<?php
function imprime()
{


    foreach ($_SESSION['notasAluno'] as $aluno => $nota) {
        echo "  <tr>

                    <td>$aluno</td>
                    <td>$nota</td>
                    <td><a href='notas.php?aluno=$aluno'> <img width=30 src='lixo.png' alt='lixo'></a></td>

                         </tr>";
    }
}

function adicionar()
{
    $aluno = $_POST['aluno'];
    $nota = $_POST['nota'];
    $_SESSION['notasAluno'][$aluno] = $nota;
}

function media()
{
    if (count($_SESSION['notasAluno']) != 0)
        return array_sum($_SESSION['notasAluno']) / count($_SESSION['notasAluno']);
    else
        return 0;
}

function minNota()
{
    if (count($_SESSION['notasAluno']) != 0)
        return min($_SESSION['notasAluno']);
    else
        return 0;
}


function maxNota()
{
    if (count($_SESSION['notasAluno']) != 0)
        return max($_SESSION['notasAluno']);
    else
        return 0;
}
