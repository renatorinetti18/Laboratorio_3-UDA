<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

   <table class="tabla_multiplicar">
       <tr>
           <td>Tabla de Multiplicar</td>
       </tr>
       <tr>
           <td>
                <?php
                    $multiplicando;
                    $multiplicador;
                    
                    echo "<table text-align:center;>";
                    echo "<tr>";
                    
                    for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
                        for ($multiplicando=01; $multiplicando <=2 ; $multiplicando++) { 
                            echo "<td>$multiplicando X $multiplicador";               
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";                    
                
                ?>

           </td>
       </tr>

       <tr>

       </tr>

       <tr>
           <td>Multiplicacion</td>
           <td>Resultado</td>
       </tr>
   </table>

</body>
</html>