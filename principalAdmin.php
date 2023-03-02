
    <?php
 include ("conexion.php");
 include ("cabeceraAdmin.php");
$consulta="select * from discos";
$paquete=mysqli_query($conexion, $consulta);

echo "<h2>Listado de Discos</h2>";

while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> <b>Nombre</b>   : ' . $fila["titulo"] . ' <br>  <b>Descripcion</b>   : ' . $fila["descripcion"] . '  <br> <b>Discos disponibles:</b>'. $fila["DiscosDisponibles"] .'
  <a href="incEliminarDisco.php?id=' .$fila['id']  . ' "   >Eliminar</a>
  <a href="modificarDiscos.php?id=' .$fila['id']  . ' " >Modificar</a>

</div><hr>' ;
}
  ?>

