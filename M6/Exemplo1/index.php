<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h1>Olá Mundo<h1/>";
        $num = 10;
        echo "<br/>" . $num;

        $num = "AERP";
        echo "<br/>" . $num;

        echo "<br/>";


        $aleatorio = rand(0,1);
        if ($aleatorio) {
            echo "<img src='./images/HappyFace.png' alt='happy' width = '100px'>";
        } else {
            echo "<img src='./images/SadFace.png' alt='sad' width = '100px'>";
        }

        echo "<br/>";

        $listIdades = array(3,15,25,65);
        #var_dump($listIdades);
        $index = rand(0, count($listIdades)-1);

    
       switch ($listIdades[$index]) {
            case '3':
                echo "</br>És um bebé"; 
                break;
            case '15':
                echo "</br>És um adolescete"; 
                break;
            case '25':
                echo "</br>És um adulto"; 
                break;
            case '65':
                echo "</br>És um idoso";   
            break;

            
        }

        echo "<br/>";


        for ($i=0; $i < 11; $i++) { 
                
                echo "<br/> 5 * " .$i. " = " . 5 * $i;
                echo "<br/>";
        }

        $pesIdade = array("Francisco" => 17, "José" => 18, "Maria" => 20);

        foreach ($pesIdade as $key => $value) {
            echo "<br/>Nome: " . $key . "Idade: " .$value;
        }

        echo "</br>";

        $num=0;
        while($num <= 10) {
            echo $num." ";
            $num++;
        }
        echo "</br>";

        do{
            echo $num." ";
            $num--;
        } while ($num >= 1);

       //Funções
        function mult($num1,$num2){
            return $num1 * $num2;
        }

        function helloworld(){
            echo "</br> Olá Mundo!!";
        }
        echo "</br>";
        echo "A multiplicação entre 5 e 10 é: ".mult(5,10);
        echo "</br>";
        helloworld();


        //Variáveis globais

        $GLOBALS['var'] = 35;

        function calcula() {
            echo "<br/> Resultado: ".$GLOBALS['var'] * 10;

        }
        calcula();

        //Arrays
        echo "</br>";
        $listaVal = array(12,"João", true);
        var_dump ($listaVal);
        echo "</br> Array";
        $listaVal[] = "Ricardo";
        array_push($listaVal);

        foreach ($listaVal as  $value) {
            echo $value . " ";
        }


        //strings
        echo "</br>";
        echo "C:\\xampp\\htdocs";
        echo "</br>";
        echo "Ola 'Mundo!!'";
        echo "</br>";
        echo 'Ola "AERP!!"';

    ?>

</body>
</html>