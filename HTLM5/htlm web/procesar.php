<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style\capstyle.css">
</head>
<h1><strong> Has sido asociado al movimiento Hippie </strong></h1>
<body>
    <header>
       
    </header>
    <main>
<?php

$nombre = $_GET['nombres'];
$apellido = $_GET['apellidos'];
$email =  $_GET['correo'];
$pais = $_GET['pais'];
$comentarios = $_GET['comentarios'] ;

$mensaje = "esto es una demo <br>
<strong>Nombre : $nombre</strong> <br>
<strong>Apellido: $apellido </strong> <br>  <br> <strong>Tu descargo : $comentarios</strong> <br>" ;

echo  $mensaje;
?>


    </main>
</body>

</html>

/*     
