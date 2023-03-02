<?php
 include ("conexion.php");
 include ("cabeceraAdmin.php");
$consulta="select * from usuarios where usuario!='admin' ";
$paquete=mysqli_query($conexion, $consulta);

echo "<h2>Listado de Discos</h2>";

while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> <b>Nombre</b>   : ' . $fila["nombre"] . ' <br>  <b>apellidos</b>   : ' . $fila["apellidos"] . '  <br> <b>Usuario:</b>'. $fila["usuario"] .'
  <a href="incEliminarCliente.php?id=' .$fila['id']  . ' " >Eliminar</a>
  <a href="modificarClientes.php?id=' .$fila['id']  . ' " >Modificar</a>

</div><hr>' ;
}
  ?>
