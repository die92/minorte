


<?php

if(count($_POST) > 0){    //$_SERVER['REQUEST_METHOD']== "POST"
    try {
        $dbname='mi-norte-clientes';
        $user='root';
        $password='';
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    } 
    
    // Prepare
    
    $consulta = $dbh->prepare("INSERT INTO clientes(nombre, apellido, localidad, correo, excursion) 
    VALUES (:nombre, :apellido, :localidad, :correo, :excursion)");
      // Bind
    $consulta->bindValue(':nombre', $_POST['nombre']);
    $consulta->bindValue(':apellido', $_POST['apellido']);
    $consulta->bindValue(':localidad', $_POST['localidad']);
    $consulta->bindValue(':correo', $_POST['correo']);
    $consulta->bindValue(':excursion', $_POST['excursion']);
      // Excecute
    $consulta->execute();
    header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link rel="stylesheet" href="contacto.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,400&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="nav-bar">
        <div class="lista">
            <ul>
            <li><a href="index.php" class="barrita">Inicio</a></li>
            <li><a href="contacto.php" class="barrita">Contacto</a></li>
            <li><a href="quienes-somos.php" class="barrita" target="blank">Nosotros</a></li>
            </ul>
        </div>
    </nav>
        </div>
    <div class="principal">
        <div class="titulo">
            <h1 >Mi norte</h1>
        </div>
        <div class="subtitulo">
            <h2 >Empresa de turismo</h2>
        </div>
    </div>
    <h2 class="titulo-comentario">Dejanos tu consulta<br>
        Enseguida nos pondremos en contacto</h2>
        <form action="" class="comentario-cliente" method="post">
            <label for="nombre">Nombre</label>
            <input type="text"  required class="datos" name="nombre" id="nombre" placeholder="Ingrese su nombre">
            <label for="apellido">Apellido</label>
            <input type="text" required class="datos" name="apellido" id="apellido" placeholder="Ingrese su apellido">
            <label for="localidad">Localidad</label>
            <input type="text" required class="datos" name="localidad" id="localidad" placeholder="Ingrese su localidad">
            <label for="correo">Correo</label>
            <input type="email" required class="datos" name="correo" id="correo" placeholder="Ingrese su correo">
            <label for="excurcion">Excursion</label>
            <input type="text" class="datos" name="excursion" id="excursion" placeholder="Que excursion te interesa ? contanos">
            <input type="submit" class="boton">
        </form>
    
</body>
</html>