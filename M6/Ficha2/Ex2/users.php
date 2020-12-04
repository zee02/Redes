<?php

session_start();
$_SESSION['Users'] = array("anasantos" => "Collaborator", "ruialmeida" => "Administrator", "tiagogomes" => "Collaborator");


function imprime()
{
    echo    "<table class='table table-striped'>

                <tr>
                      <th>User</th>
                      <th>Authority</th>
                      <th>Remove User</th>
                 </tr>";

    foreach ($_SESSION['Users'] as $user => $authority) {
        echo "  <tr>

                    <td>$user</td>
                    <td>$authority</td>
                    <td><a href='users.php?user=$user'> <img width=30 src='lixo.png' alt='lixo'></a></td>

                         </tr>";

    }
    echo "</table>";
}
if(isset($_GET["user"])) {

    $nome = $_GET["user"];
    unset($_SESSION['Users'][$nome]);

}
else {
    $_SESSION['Users'] = array("anasantos" => "Collaborator", "ruialmeida" => "Administrator", "tiagogomes" => "Collaborator");

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>

<body>
<?php 
imprime();
?>
</body>

</html>