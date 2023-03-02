<?php
  session_start();

  include ("conexion.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuarioInsertado = $_POST['usuario'];
  $contrasenaInsertada = $_POST['pass'];


  $existe = false;

$consulta="select * from usuarios";
$paquete=mysqli_query($conexion, $consulta);
while($fila=mysqli_fetch_array($paquete)){

  if ($usuarioInsertado == $fila['usuario'] and  $contrasenaInsertada == $fila['pass']) {
                  $existe = true;  
              }
}

if ($existe) {
$paquete2=mysqli_query($conexion, $consulta);
  while($fila=mysqli_fetch_array($paquete2)){
      $_SESSION['logueado'] = true;
      $_SESSION['usuario'] = $usuarioInsertado;
      if ($usuarioInsertado == $fila['usuario'] and $fila['rol']=="admin") {
          header('Location:principalAdmin.php');
        
      }else{
          header('Location:principaluser.php');
      }
  }
  
  } else {
      echo "usuario o contraseña incorrectos";
  }
}
 
?>