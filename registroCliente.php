<?php
  include ("conexion.php");
if (isset($_POST["submit"])){


  $N=$_POST["nombre"];
  $P=$_POST["apellidos"];
  $user=$_POST["usuario"];
  $pass=$_POST["pass"];
  $consulta="INSERT INTO usuarios (id,nombre,apellidos,usuario,pass) VALUES (' ','$N','$P','$user' ,'$pass') " ;
  $paquete=mysqli_query($conexion, $consulta);
  
  //header("Location: ../index.php");
  echo "usuario creado con exito inicia sesion";
  echo '<br><button><a href="login.php">INICIAR SESION</a></button>';

}else{
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
    <form method="post" action="">
    Nombre:<input type="text" name="nombre">
    Apellidos:<input type="text" name="apellidos">
    
    Usuario:<input type="text" name="usuario">
    Contraseña<input type="password" name="pass">
    <input type="submit" name="submit" value="guardar">
    </body>
    </html>
    <?php
} 
?>
