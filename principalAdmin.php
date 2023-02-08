
    <?php
 include ("conexion.php");
 include ("cabeceraAdmin.php");
$consulta="select * from discos";
$paquete=mysqli_query($conexion, $consulta);

echo "<h2>Listado de Peliculas</h2>";

while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> <b>Nombre</b>   : ' . $fila["titulo"] . ' <br>  <b>Descripcion</b>   : ' . $fila["descripcion"] . '  <br> <b>Peliculas disponibles:</b>'. $fila["alquilada"] .'

</div><hr>' ;
}
  ?>

