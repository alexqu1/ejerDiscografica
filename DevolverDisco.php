<?php
  include ("conexion.php");


  $value = $_GET["value"];
  $id=$_GET['id'];


  $consulta="UPDATE discos SET DiscosDisponibles = DiscosDisponibles + 1 , alquilada = '$value' WHERE id='$id'";

    $query=mysqli_query($conexion,$consulta);
  header("Location: principaluser.php");


 ?>