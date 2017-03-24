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
        $i=0;
        $a=0;
        for($i=1;$i<=6;$i++){
            if($i<=$a){
             echo "*";
             $a++;
            }
            $a=0;
            echo"<br>";
            $i++;
        }
        ?>
    </body>
</html>
