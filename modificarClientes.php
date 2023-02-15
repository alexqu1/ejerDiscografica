

<?php
include("conexion.php");
include ("cabeceraAdmin.php");
if (!isset($_POST['submit'])) {
$consulta= "select * from usuarios";
$datos=mysqli_query($conexion,$consulta) ;
echo '<h2>MODIFICAR Clientes</h2> <table width=300>
<tr>
<td>id</td><td>nombre</td><td>apellido</td><td>usuario</td><td>contrasena</td>
</tr>';
while ($fila=mysqli_fetch_array($datos)) {
echo "<form method='POST' action='ListadoClientes.php' >";
echo "<tr>";
echo "<td> <input type='text' name='id' value='".$fila['id']."'> </td>";
echo "<td><input type='text' name='nombre' value='".$fila['nombre']."'></td>";
echo "<td><input type='text' name='apellidos' value='".$fila['apellidos']."'></td>";
echo "<td><input type='text' name='usuario' value='".$fila['usuario']."'></td> ";
echo "<td><input type='text' name='pass' value='".$fila['pass']."'></td> ";

echo "<td>"," <input type='submit' name='submit' value='Actualizar'>"," </td>";
echo "</tr>";
echo "</form>"; }
echo "</table>";
}else {
$Id=$_POST["id"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$usuario=$_POST["usuario"];
$pass=$_POST["pass"];
$consulta="UPDATE usuarios SET id='$Id' , nombre='$nombre', apellidos='$apellidos', usuario='$usuario',pass='$pass' WHERE id='$Id' ";
$datos=mysqli_query($conexion,$consulta) ; }
?>
