<?php
  include ("conexion.php");
$id=$_GET['id'];

$consulta="DELETE FROM discos WHERE id='$id'";

$query=mysqli_query($conexion,$consulta);


   header("Location:principalAdmin.php");


 ?>