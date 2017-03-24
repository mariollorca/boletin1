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
        $nota=8;
        switch ($nota) {
            case ($nota<5);
            echo "Suspendido";
            break;
            case ($nota>=5 & $nota<6);
                echo "Aprobado";
            break;
            case ($nota>=6 & $nota<7);
                echo "Bien";
                break;
            case ($nota>=7 & $nota<8);
                echo "Notable";
                break;
            case ($nota>=8);
                echo "Sobresaliente";
                break;
        }
        ?>
    </body>
</html>
