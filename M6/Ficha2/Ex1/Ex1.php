<?php session_start();
if (isset($_POST['Submit'])) {
    $logins = array('ze' => '1234', 'username1' => 'password1', 'username2' => 'password2');
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    if (isset($logins[$Username]) && $logins[$Username] == $Password) {
        $_SESSION['UserData']['Username'] = $logins[$Username];
        $_SESSION['user'] = $_POST['Username'];

        header("location:main.php");
        exit;
    } else {
        $msg = "<span style='color:red'>Login Inválido</span>";
        header("location:erro.html");
    }
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
    <form action="" method="post" name="Login_Form">
        <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
            <?php if (isset($msg)) { ?>
                <tr>
                    <td colspan="2" align="center" valign="top"><?php echo $msg; ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td align="right" valign="top">Username</td>
                <td><input name="Username" type="text" class="Input"></td>
            </tr>
            <tr>
                <td align="right">Password</td>
                <td><input name="Password" type="password" class="Input"></td>
            </tr>
            <tr>
                <td> </td>
                <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
            </tr>
        </table>
    </form>
</body>

</html>