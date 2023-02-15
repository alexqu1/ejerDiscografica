
    <?php
 include ("conexion.php");
 include ("cabeceraUser.php");
$consulta="select * from discos";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> <b>Nombre</b>   : ' . $fila["titulo"] . ' <br>  <b>Descripcion</b>   : ' . $fila["descripcion"] . '  <br> <b>Peliculas disponibles:</b>'. $fila["alquilada"] .'
  <a href="AlquilarDevolverPelicula.php?id=' .$fila['id']  . '&value=si">Alquilar esta pelicula</a>

</div><hr>' ;}
  ?>
