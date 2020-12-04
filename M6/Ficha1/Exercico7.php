<?php

    $res = "";
    function somar($num1, $num2) {
        return $num1 + $num2;


    }

    if(isset($_POST['submit'])) {
        $res = somar($_POST['num1'] , $_POST['num2']);

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
    echo "</br>"
    
    ?>
 

 <div class='container'>
         <form action='' method='post'>
             <div class='form-group row'>
                 <label class='col-sm-2' for='op1'>Operando 1:</label>
                 <div class='col-sm-3'>
                     <input type='text' class='form-control' required name='num1' id='num1'   placeholder=''>
                 </div>
                 <label class='col-sm-2' for='op2'>Operando 2:</label>
                 <div class='col-sm-3'>
                     <input type='text' class='form-control' required name='num2' id='num2' placeholder=''>
                 </div>
             </div>


             <input type='submit' name='submit' id='soma' value='soma' class='btn btn-primary'>


             <div class='form-group row'>
             <label class="col-sm-2"><?php echo $res;?></label>
             </div>
         </form>
 
         </div>
    
         
</body>
</html>