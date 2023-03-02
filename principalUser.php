
    <?php
 include ("conexion.php");
 include ("cabeceraUser.php");
$consulta="select * from discos";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> <b>Nombre</b>   : ' . $fila["titulo"] . ' <br>  <b>Descripcion</b>   : ' . $fila["descripcion"] . '  <br> <b>Discos disponibles:</b>'. $fila["DiscosDisponibles"] .'
  <a href="AlquilarDisco.php?id=' .$fila['id']  . '&value=si">Alquilar este disco</a>

</div><hr>' ;}
  ?>
