<?php
session_start();
if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
    $usuario = $_SESSION['usuario'];
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    
<header style="background-color: aqua;">
    <div>
<h1>discografica ALEX</h1> 
</div>
<aside>
<button> <a href="principaluser.php">Todas las peliculas</a> </button>
<button> <a href="ListadoPeliculasAlquiladas.php">Listar Peliculas Alquiladas</a> </button>

</aside>

<div>
    <p>
        BIENVENIDO :  
        <?php
           echo $usuario;
        ?>
    <button> <a href="incCerrarsesion.php">Cerrar Sesiones</a> </button>
    </p>

</div>

</header>
  

</body>
</html>