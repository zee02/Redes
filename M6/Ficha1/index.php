<?php
$muda=array("yellow","pink","black","magenta");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 


</head>
<body style="background-color: <?php echo $muda[1]; ?>">
    <?php

     //Execicio 1
     $portugal ="Portugal";
     echo "O caracter 4 é: ".$portugal[3]." e o 5 e: ".$portugal[4];
     echo "</br>";
     echo "O número de caracteres são: ".strlen($portugal);
     echo "</br>";
     echo strtoupper($portugal);

    //Exercicio 2
    echo "</br>";
    $string = 'Estou a frequentar o curso de PHP na Associação';
 
    echo str_replace("Associação", "Escola", $string);

    //Exercicio 3
    //echo "<body style=background-color:".$muda[1].">";


    //Exercicio 4

        $a = array("a" => "maçã", "b" => "banana");
        $b = array("a" =>"kiwi", "b" => "ananás", "c" =>"morango");
        
        $c = array_merge($a, $b);
        echo "</br>";

        foreach ($c as  $value) {
            echo $value . " ";
        }


        $a = array("a" => "maçã", "b" => "banana");
        $b = array("a" =>"kiwi", "b" => "ananás", "c" =>"morango");
        
        $c = array_merge($b, $a);
        echo "</br>";

        foreach ($c as  $value) {
            echo $value . " ";
        }

    //Exercicio 5
        echo "
        <table border = '1' >
        <tr>
           <th>Nome</th>
           <th>Cotação</th>
        </tr>
        <tr>";

     $lista=array("WoW"=>3,"GTA"=>4,"DOOM"=>5,"UFO"=>4,"Crysis"=>2);
     foreach ($lista as $key => $value) {
         echo "<tr><td>" . $key. " </td> <td>".$value."</td></tr>";
     }

     echo "</table>";


     //Exercicio 6

     echo "
     <table border = '1' >
     <tr>
        <th>Nome</th>
        <th>Cotação</th>
        </tr>
     <tr>";

  $lista=array("WoW"=>3,"GTA"=>4,"DOOM"=>5,"UFO"=>4,"Crysis"=>2);
  foreach ($lista as $key => $value) {

    $imagens = "";
    for ($i=0; $i < $value; $i++) { 
        $imagens .= "<img src='./images/Estrela.ico' alt='' width = '20px'>";
    }
      echo "<tr><td>" . $key. " </td> <td>".$imagens."</td></tr>";

  }
  
  echo "</table>";


  //Exercicio 7

?>

        
      

</body>
</html>