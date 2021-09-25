<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <!-- Retorna al mismo archivo -->
    <form class="caja" action="calculadora.php" method="get">
        <h1>Calculadara en php</h1>
        <input type="text" name="n1" value="" placeholder="Ingrese número">
        <input type="text" name="n2" value="" placeholder="Ingrese número">
        <input type="submit" name="" value="RESPUESTA">
        <output type="number" name="">
    </form>
</body>
</html>
<?php
     //isset, permite trabajar con variables, para transmitir información en el lugar que se desee
     //En php se necesita precisar la información
     if (
         isset($_GET['n1']) && 
         isset($_GET['n1']) && 
         is_numeric($_GET['n1']) &&
         is_numeric($_GET['n2']) 
        );
        {
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            echo $n1+$n2;
        }
?>