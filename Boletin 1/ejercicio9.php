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
        $valor=5;
        $valor2=2;
        $nombre=Bernardo;
        $apellidos=LibroRamirez;
        $nombreCompleto=$nombre."".$apellidos;
        
        print"Introduce valor:$valor";
        
        if($valor>0&$valor2<$valor){
            echo "mostrara el nombre del alumno:$nombre";
        }
 elseif ($valor > 0 & $valor2 >= $valor) {
            echo "mostrara los apellidos del alumno:$apellidos";
        } else {
            ($valor<0);
                echo "Mostrara nombre y epellidos:$nombreCompleto";
        }
        
        
    
            
        
        ?>
    </body>
</html>
