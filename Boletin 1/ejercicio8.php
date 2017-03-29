<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero1=1;
        $numero2=2;
        $suma=$numero1+$numero2;
        print "Introduce la suma:$suma";
        echo "<br>";
        if($numero1+$numero2>$numero1*$numero2){
            echo "La suma es mayor al producto";
        }
        else{
            echo "El producto es mayor a la suma";
        }
        
        ?>
    </body>
</html>
