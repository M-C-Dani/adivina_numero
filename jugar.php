<?php
//Declaro las variables
$min = 0; //numero minimo
$max = 0; //numero maximo
$numero_propuesto = 0; //numero que aparece
$jugada = 0; //numero de la jugada
$intentos = 0; //numero del intento
$rtdo = 0; //almacena el valor que hemos señalado uno de los 3 valores de mayor, menor o igual

$opcion = $_POST['submit'] ?? "Por url";
switch ($opcion) {
    //si queremos que ambos casos se haga lo mismo
    //podemos enganchar un caso con otro sin break
    case "Reiniciar":
    case "Empezar":
        //input
        $min = 0;
        $intentos = $_POST['intentos'];
        $max = 2 ** $intentos;
        $numero_propuesto = ($min + $max) / 2;
        $jugada = 1;
        break;
    case "Jugar":
        //obtener valores de variables
        $min = $_POST['min'];
        $max = $_POST['max'];
        $intentos = $_POST['intentos'];
        $numero_propuesto = $_POST['numero_propuesto'];
        $jugada = $_POST['jugada'];
        //leer resultado
        $rtdo = $_POST['rtdo'];
        //leemos el resultado
        switch ($rtdo) {
            //caso de que el resultado
            case">":
                $min = $numero_propuesto;
                break;
            case"<":
                $max = $numero_propuesto;
                break;
            case"=":
                $rtdo == $numero_propuesto;
                header("Location:fin.php?msj=Has acertado");
                //TODO falta implementar esta situación que será fin de juego
                exit();
        };
        //actualizar min o max en funcion del resultado
        $numero_propuesto = ($min + $max) / 2;
        //como hemos comprobado que el resultado sea = al numero propuesto
        //no hace falta volverlo a comprobar en el if
        ++$jugada;
        if ($jugada > $intentos) {
            header("Location:fin.php?msj=Me has engañado");
            //ponemos el exit para terminar con el programa en caso de que
            //se cumpla esa condicion
            //porque ya hemos terminado y al cliente vamos a entregarle
            //otra pagina
            exit();
        }
        //actualizar las variables  $numero_propuesto y $jugada
        break;
    case "Volver":
        header("location:index.php");
        break;
    //default, cuando hemos puesto ya un caso para cada boton
    //seria cuando intentamos acceder por url
    //por lo que hacemos que vuelva a la pagina principal
    default:
        header("location:index.php");
        break;
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de adivina un número</title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">
<fieldset style="width:40%;background:bisque ">
    <legend>Empieza el juego</legend>
    <form action="jugar.php" method="POST">
        <h2>El n&uacutemero es <span style="color: blue"> <?= $numero_propuesto ?></span></h2>
        <h5>Jugada <span style="color: blue"> <?= $jugada ?> </span></h5>
        <h5>Actualmente te quedan <span style="color: blue"> <?= $intentos - $jugada ?></span>intentos</h5>

        <input type="hidden" value="" name="intentos">
        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="rtdo" checked value='>'> Mayor<br/>
            <input type="radio" name="rtdo" value='<'> Menor<br/>
            <input type="radio" name="rtdo" value='='> Igual<br/>
        </fieldset>
        <hr>
        <input type="submit" value="Jugar" name="submit">
        <input type="submit" value="Reiniciar" name="submit">
        <input type="submit" value="Volver" name="submit">
        <!--guardamos las variables para usarlas luego-->
        <input type="hidden" name="max" value="<?= $max ?>">
        <input type="hidden" name="min" value="<?= $min ?>">
        <input type="hidden" name="numero_propuesto" value="<?= $numero_propuesto ?>">
        <input type="hidden" name="intentos" value="<?= $intentos ?>">
        <input type="hidden" name="jugada" value="<?= $jugada ?>">
    </form>
</fieldset>
</body>
</html>