<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>tp1_backend.php</h1>

    <?php
    echo "Hola Mundo"
    ?>

    <br>
    <hr>

    <?php
    $mensaje = "Hola Mundo";
    echo $mensaje;

    ?>

    <br>
    <hr>

    <?php
    $variable = 100;
    $variable2 = 20;

    $suma = $variable + $variable2;
    echo $suma;
    
    ?>

    <br>
    <hr>

    <?php
    $resta = $variable - $variable2;
    echo $resta;

    ?>

    <br>
    <hr>

    <?php
    $multiplicacion = $variable * $variable2;
    echo $multiplicacion;

    ?>

    <br>
    <hr>

    <?php
    $division = $variable / $variable2;
    echo $division;

    ?>

    <br>
    <hr>

    <?php
    $resto = $variable % $variable2;
    echo $resto;

    ?>
    
    <br>
    <hr>

    <?php
    $celsius = 20;
    $fahrenheit = $celsius * 1.8 + 32;
    echo $fahrenheit;

    ?>

    <br>
    <hr>

    <?php
    $base = 18;
    $altura = 12;

    $perimetrorectangulo = $base + $altura;

    echo $perimetrorectangulo;
    ?>

    <br>
    <hr>

    <?php
    $arearectangulo = $base * $altura;
    echo $arearectangulo;

    ?>

    <br>
    <hr>

    <?php
    $radio = 30;

    $perimetrocirculo = 2* 3.14 * $radio;

    echo $perimetrocirculo;
    ?>

    <br>
    <hr>

    <?php
    $areacirculo = 3.14 * $radio * $radio;
    echo $areacirculo;

    ?>



</body>
</html>