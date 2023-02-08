<?php
session_start();
if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
    $_SESSION['logueado'] = false;
    session_destroy(); 
}
header('Location:index.html');

?>