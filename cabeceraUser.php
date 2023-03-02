<?php
session_start();

    $usuario = $_SESSION['usuario'];

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
<h1>Shop ALEX</h1> 
</div>
<aside>
<button> <a href="principaluser.php">INICIO LISTADO DE DISCOS</a> </button>
<button> <a href="ListadoDiscosAlquiladas.php">Listar DISCOS Alquilados</a> </button>

</aside>

<div>
    <p>
        BIENVENIDO :  
        <?php
           echo $usuario;
        ?>
    </p>

</div>

</header>
  

</body>
</html>