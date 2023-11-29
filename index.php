<?php

?>
<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <style>
        fieldset{
            width: 64%;
            margin-left: 20%;
            background: bisque;
        }
    </style>
    <meta name="viewport"
    <title>Adivina n&uacutemero</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
<body>


<fieldset>
    <legend><h1>Juego adivina n&uacutemero</h1></legend>
    <h2> Selecciona un intervalo del men&uacute de abajo</h2>
    <fieldset>
        <legend>Esteblece interfalo</legend>
        <form action="jugar.php" method="POST">
            <input type="radio" name="intentos" value=10 checked>Entre  1 y 1.024 <strong>10 intentos</strong><br/>
            <input type="radio" name="intentos" value=15> Entre 1 y 32.268 <strong>15 intentos</strong><br/>
            <input type="radio" name="intentos" value=20>Entre 1 y1.048.536 <strong>20 intentos</strong><br/>
            <input type="submit" value="Empezar" name="submit">
        </form>
    </fieldset>
    <br/>
    <h2> Piensa un número de ese intervalo</h2>
    <h2> La aplicación lo acertará en el número de intentos establecidos seg&uacuten el intervalo</h2>
    <hr/>

    <h2> Cada vez que la aplicaci&oacuten te especifique un n&uacutemero deber&aacutes de indicar</h2>
    <ul>
        <ol>Si el n&uacutemero buscado es mayor</ol>
        <ol>Si el n&uacutemero buscado es menor</ol>
        <ol>Si has aceertado el n&uacutemero</ol>
    </ul>


</fieldset>
</body>
</html>
