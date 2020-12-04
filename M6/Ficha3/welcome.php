
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

    $email = "aluno@aerp.pt";
    $pass = "1234";

    if($_POST['inputEmail'] == $email && $_POST['inputPassword'] == $pass) {

        if(isset($_POST['chkRemember'])){
            setcookie('mail', $email, time()+60);
            setcookie('pass', $pass, time()+60);

            $str = "Welcome, $email <br/> Cookies Set Successfully <br/> <a href='login.php'>Go to Login</a>";

            echo $str;
        }

        else {
            setcookie('mail', $email, time()-1);
            setcookie('pass', $pass, time()-1);

            
            $str = "Welcome, $email <br/> Cookies Not Set<br/> <a href='login.php'>Go to Login</a>";

            echo $str;

        }

    }

    else {

        $str = "Wrong Email or Password, $email <br/> Cookies Not Set<br/> <a href='login.php'>Go to Login</a>";

        echo $str;

    }


?>
</body>
</html>
