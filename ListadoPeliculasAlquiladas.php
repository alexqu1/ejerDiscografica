


<?php



  include ("conexion.php");
  include ("cabeceraUser.php");

 $usuario= $_SESSION['usuario']; 
 

 


$consulta="select * from discos where alquilada='si' ";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> Nombre  : ' . $fila["titulo"] . 'Descripcion   : ' . $fila["descripcion"] . '  Alquilada :'. $fila["alquilada"] .'
  <a href="DevolverDisco.php?id=' .$fila['id']  . '&value=no">Devolver este Disco</a>
</div>' ;}



?>



