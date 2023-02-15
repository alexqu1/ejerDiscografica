<?php
  include ("conexion.php");
$id=$_GET['id'];

$consulta="DELETE FROM usuarios WHERE id='$id'";

$query=mysqli_query($conexion,$consulta);


   header("Location:ListadoClientes.php");


 ?>