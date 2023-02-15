<?php
  session_start();
  // Datos para conectar a la base de datos.
  include ("conexion.php");

//Comprobamos la llamada a index, después de enviar datos por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuarioInsertado = $_POST['usuario'];
  $contrasenaInsertada = $_POST['pass'];
//Creamos una variable para verificar si el usuario con ese nombre y contraseña existe. 
  $existe = false;
//Buscamos en el array, si el usuario y contraseña se encuentra la variable $existe se pone a true y rompe el bucle para no seguir buscando. 
$consulta="select * from usuarios";
$paquete=mysqli_query($conexion, $consulta);
while($fila=mysqli_fetch_array($paquete)){

  if ($usuarioInsertado == $fila['usuario'] and  $contrasenaInsertada == $fila['pass']) {
                  $existe = true;  
              }
}
//Comprueba si existe es true. En ese caso se crean las variables de sesión logueado y nombre y se abre la página usuario.php ya con las variables de sesión creadas
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