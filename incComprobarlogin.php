<?php
  session_start();
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $password = $_POST['pass'];
   
  // Datos para conectar a la base de datos.
  include ("conexion.php");

  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf('SELECT * FROM usuarios WHERE usuario="%s" AND pass ="%s"', $usuario, $password);
  $resultado = $conexion->query($sql);
   

  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['usuario'] = $usuario;
    $_SESSION['pass'] = $pass;
    // Redirecciono al usuario a la página principal del sitio.
    header('Location:principaluser.php'); 
   // header("Location: principal.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>