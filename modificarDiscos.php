
<?php
include("conexion.php");
include ("cabeceraAdmin.php");
if (!isset($_POST['submit'])) {
$consulta= "select * from discos";
$datos=mysqli_query($conexion,$consulta) ;
echo '<h2>MODIFICAR DISCOS</h2> <table width=300>
<tr>
<td>id</td><td>nombre</td><td>apellido</td><td>descripcion</td><td>alquilada</td>
</tr>';
while ($fila=mysqli_fetch_array($datos)) {
echo "<form method='POST' action='ListadoClientes.php' >";
echo "<tr>";
echo "<td> <input type='text' name='id' value='".$fila['id']."'> </td>";
echo "<td><input type='text' name='titulo' value='".$fila['titulo']."'></td>";
echo "<td><input type='text' name='descripcion' value='".$fila['descripcion']."'></td>";
echo "<td><input type='text' name='alquilada' value='".$fila['alquilada']."'></td> ";

echo "<td>"," <input type='submit' name='submit' value='Actualizar'>"," </td>";
echo "</tr>";
echo "</form>"; }
echo "</table>";
}else {
$Id=$_POST["id"];
$nombre=$_POST["titulo"];
$apellidos=$_POST["descripcion"];
$usuario=$_POST["alquilada"];
$pass=$_POST["pass"];
$consulta="UPDATE discos SET id='$Id' , titulo='$titulo', descripcion='$descripcion', alquilada='$alquilada' WHERE id='$Id' ";
$datos=mysqli_query($conexion,$consulta) ; }
?>
