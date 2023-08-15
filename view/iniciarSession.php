<?php
session_start();
$nombre=$_POST["nombre"];
$password=$_POST["password"];
$_SESSION['usuario']=$nombre;

if (isset($_SESSION["usuario"])){
    header('location:index.php');
} else {
    header('location:login.php');
}
?>