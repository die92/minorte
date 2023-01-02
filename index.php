
<?php

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
$consulta = $dbh->prepare("SELECT * FROM comentarios LIMIT 4");
$consulta->execute();
$comentarios=$consulta->fetchAll();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi norte travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,400&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    
    
</head>
<body>
    <nav class="nav-bar">
        <div class="lista">
            <ul>
            <li> <a href="index.php" class="barrita">Inicio</a></li>
            <li><a href="contacto.php" class="barrita">Contacto</a></li>
            <li><a href="quienes-somos.php" class="barrita" target="blank">Nosotros</a></li>
            </ul>
        </div>
    </nav>
    <div class="inicio">
        <div class="titulos-izquierda">
            <h1 class="titulo">
                Visita <br>
                el norte <br> 
                argentino
            </h1>
            <h4>Nosotros te guiamos!</h4>
        </div>
        <div class="mi-norte">
            <h2>mi norte</h2>
            <h3>Empresa de turismo</h3>
            <h3>Mas de 10 años de experiencia nos avalan</h3>
        </div>
    </div>
    
    <button class="desplegar desplegar-1"><span>Mira nuestras excursiones</span></button>
    <section class="tarjetas">
        <div class="excur tar-1">
            <h3>El hornocal</h3>
            <img src="imagenes/hornocal2.jpg" alt="">
            <p>Visita el imponente hornocal ubicado en la localidad de Humahuaca</p>
        </div>
        <div class="excur tar-2">
            <h3>Cerro 7 colores</h3>
            <img src="imagenes/cerrp 7 colores.jpg" alt="">
            <p>Conoce el hermoso cerro de los 7 colores ubicado en Purmamarca</p>
        </div>
        <div class="excur tar-3">
            <h3>Tren de las nubes</h3>
            <img src="imagenes/tren-a-las-nubes1.jpg"alt="">
            <p>Disfruta de un recorrido unico arriba del tren mas asombroso del mundo</p>
        </div>
        <div class="excur tar-4">
            <h3>Quebrada de las señoritas</h3>
            <img src="imagenes/Quebrada-de-las-Senoritas2.jpg"alt="">
            <p>Recorre esta imponente quebrada ubicada en el hermoso pueblo de Uquia</p>
        </div>
        <div class="excur tar-5">
            <h3>Cafayate</h3>
            <img src="imagenes/cafayate.jpg"alt="">
            <p>Conoce este hermoso pueblo ubicado en la probincia de Salta y disfruta sus panoramicas rutas</p>
        </div>
        <div class="excur tar-6">
            <h3>Iruya</h3>
            <img src="imagenes/iruya.jpg"alt="">
            <p>Un pueblo perdido entre las montañas , detenido en el tiempo , con una belleza unica , descubrilo</p>
        </div>
    </section>
    <div class="nuestros-clientes">
        <div>
        <h2>Nuestros clientes</h2>
        </div>
        <?php  foreach($comentarios as $comentario)  {?>
        <div class="primer-comentario">
            <h3><?php echo $comentario['nombre']?>, <?php echo $comentario['edad']?> años</h3>
            <p><?php echo $comentario['comentario']?></p>
        </div>
        <?php }?>
        <div class="segundo-comentario">
            <h3></h3>
            <p></p>
        </div>
        <div class="tercer-comentario">
            <h3></h3>
            <p></p>
        </div>
        
    </div>
    <h2 class="titulo-comentario">Que opinas de nosotros ?</h2>
    <button class="enlace-coment coment-1"><a href="form-coment.php"><span>Dejanos tu comentario</span></a></button>
    <section class="nosotros">
        <h2>Mi norte</h2>
        <h3>Empresa de turismo</h3>
    </section>
    <footer class="info">
        <div class="redes">
                <div class=" icon">
                    <img src="svg/instagram.svg" alt=""> 
                    <p>mi-norte.ok</p>
                </div>
                <div class=" icon">
                    <img src="svg/face.svg" alt="">
                    <p>Mi norte</p>
                </div>
                <div class=" icon">
                    <img src="svg/gmail.svg" alt="">
                    <p>minorte.contacto@gmail.com</p>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>