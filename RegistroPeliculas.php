<?php


    include ("conexion.php");
    if (!isset($_POST["submit"])){
    echo '<html><body>
    <form method="post" action="">
    Nombre:<input type="text" name="titulo">
    Descripcion<textarea name="descripcion" id="" cols="30" rows="10"></textarea>


    <input type="submit" name="submit" value="guardar">
    </body></html>';
    }else{
    $titulo=$_POST["titulo"];
    $descripcion=$_POST["descripcion"];

    $consulta="INSERT INTO discos (id,titulo,descripcion) VALUES (' ','$titulo','$descripcion') " ;
    $paquete=mysqli_query($conexion, $consulta);

    header("Location: principalAdmin.php");

    }


 ?>

