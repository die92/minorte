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
    
    $consulta = $dbh->prepare("INSERT INTO comentarios(nombre, edad, comentario) 
    VALUES (:nombre, :edad, :comentario)");
      // Bind
    $consulta->bindValue(':nombre', $_POST['nombre']);
    $consulta->bindValue(':edad', $_POST['edad']);
    $consulta->bindValue(':comentario', $_POST['comentario']);
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
    <title>Comentarios</title>
    <link rel="stylesheet" href="coment.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,400&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap'); </style>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
</head>
<body>
    <div class="principal">
        <div class="titulo">
            <h1 >Mi norte</h1>
        </div>
        <div class="subtitulo">
            <h2 >Empresa de turismo</h2>
        </div>
    </div>
    <h2 class="titulo-comentario">Queremos saber que opinas de nosotros </h2>
    <form action="" class="comentario-cliente" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" required class="datos" name="nombre" id="nombre" placeholder="Ingrese su nombre">
        <label for="edad">Edad</label>
        <input type="text" required class="datos" name="edad" id="edad" placeholder="Ingrese su edad">
        <label for="comentario">Comentario</label>
        <textarea class="datos" required name="comentario" id="comentario" cols="20" rows="5" placeholder="dejanos tu comentario"></textarea>
        <input type="submit" class="boton">
    </form>
    <div class="volver">
        <a href="index.php">volver</a>
    </div>
</body>
</html>