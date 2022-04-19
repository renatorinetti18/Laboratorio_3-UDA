<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
    <?php 
        echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
        echo "Apellido: "; echo $_POST['apellido']; echo "<br/>";
        echo "DNI: "; echo $_POST['dni']; echo "<br/>";
        echo "Email: "; echo $_POST['email']; echo "<br/>";
        echo "Sexo: "; echo $_POST['sexo']; echo "<br/>";
        echo "Calle: "; echo $_POST['calle']; echo "<br/>";
        echo "Numero: "; echo $_POST['numero']; echo "<br/>";
        echo "Torre: "; echo $_POST['torre']; echo "<br/>";
        echo "Piso: "; echo $_POST['piso']; echo "<br/>";
        echo "Departamento: "; echo $_POST['depto']; echo "<br/>";
        echo "País: "; echo $_POST['pais']; echo "<br/>";
        echo "Provincia: "; echo $_POST['provincia']; echo "<br/>";
        echo "Localidad: "; echo $_POST['localidad']; echo "<br/>";
        echo "Edad: "; echo $_POST['edad']; echo "<br/>";
        
        $mayor_edad = 18;
        $edad_ingresada = $_POST['edad'];

        if($edad_ingresada > $mayor_edad){
        } else{
            echo "Es menor de edad";
        }

        echo "Estado civil: "; echo $_POST['estado_civil']; echo "<br/>";
        echo "Hijos: "; echo $_POST['hijos']; echo "<br/>";
        echo "Hobbies: "; echo $_POST['hobbies']; echo "<br/>";
    ?>




</body>
</html>