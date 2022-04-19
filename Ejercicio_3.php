<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_3</title>
</head>
<body>
    
    <table class="tabla_dias">
        <tr>
             <!-- En esta linea se muestra el dia de la semana ( se utiliza %A), el numero del dia (se utiliza %d), el mes (se utiliza %B) y el año actual (se utiliza %Y) --> 
            <?php echo strftime("%A, %d de %B de %Y").'<br/>';?>  </tr>
        
        <tr>
            <!-- En esta se muestra el numero de la semana (se utiliza d) seguido de /, luego el mes (m) seguido del /, y por ultimo el año (se utiliza y)-->
            <?php echo date("d/m/y").'<br/>';?>
        </tr>

        <tr>
            <!-- En esta linea se muestra el dia de la semana (se utiliza D), el numero (se utiliza d), y luego la hora (se utiliza g:i) y por ultimo el sist. horario (se utiliza a) -->
            <?php echo  date("D d g:i a").'<br/>';?>
        </tr>
        
    </table>


</body>
</html>