<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 include ("conexion.php");
 include ("cabeceraUser.php");
$consulta="select * from discos";
$paquete=mysqli_query($conexion, $consulta);



while($fila=mysqli_fetch_array($paquete)){
  echo '  <div>
  <p> Nombre  : ' . $fila["titulo"] . 'Descripcion   : ' . $fila["descripcion"] . '  Alquilada :'. $fila["alquilada"] .'

</div><hr>' ;}
  ?>

</body>
</html>