<?php
if (!isset($_GET['msj'])){
    header('Location:index.php');
    exit();
}
$msj = $_GET['msj'];
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Fin del juego</h1>
    <h2><?=$msj?></h2>
</body>
</html>
