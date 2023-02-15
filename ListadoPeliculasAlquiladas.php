


<?php



  include ("conexion.php");
  include ("cabeceraUser.php");

 $usuario= $_SESSION['usuario']; 
 

 
//  $consulta="SELECT p.título
// FROM discos p
// INNER JOIN talquileres a ON p.id = a.id_disco
// INNER JOIN usuarios u ON a.id_usuario = u.id
// WHERE u.usuario = '$usuario';
//  ";

//$consulta="select * from discos where alquilada='si' ";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> Nombre  : ' . $fila["titulo"] . 'Descripcion   : ' . $fila["descripcion"] . '  Alquilada :'. $fila["alquilada"] .'
  <a href="AlquilarDevolverPelicula.php?id=' .$fila['id']  . '&value=no">Devolver esta pelicula</a>
</div>' ;}



?>



