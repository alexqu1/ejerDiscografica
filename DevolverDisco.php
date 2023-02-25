<?php
  include ("conexion.php");


  $value = $_GET["value"];
  $id=$_GET['id'];


  $consulta="UPDATE discos SET DiscosDisponibles = DiscosDisponibles + 1 , alquilada = '$value' WHERE id='$id'";
  //$consulta2="UPDATE discos SET DiscosDisponibles = DiscosDisponibles + 1 WHERE id='$id'";

    $query=mysqli_query($conexion,$consulta);
    //$query=mysqli_query($conexion,$consulta2);
  header("Location: principaluser.php");


 ?>