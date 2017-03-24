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
        $num_tabla=8;
         echo "La tabla es $num_tabla<br>";
        
        for ($i=1;$i<=10;$i++){
            echo "$num_tabla*$i=".($num_tabla*$i);
            echo"<br>";
            
        }
        ?>
    </body>
</html>
