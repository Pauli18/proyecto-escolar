<?php
//session_start();
//if ( $_SESSION['tipo']==1){
include 'conexi.php';
$activo=true;
$nombre = $_POST['nomusu'];
$apellido = $_POST['apeusu'];
$usuario = $_POST['usuario'];

$query0 = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado0 = mysqli_query($connection,$query0);
if(mysqli_num_rows($resultado0)>0){
    echo "<script>alert('El nombre de usuario ya existe');</script>";
    header("Location:index.php");

    exit;
}
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];
if (!$clave == $clave2){
    echo "<script>alert('Las contraseñas no coinciden');</script>";
    header("Location:index.php");
    exit;
}
$hash = password_hash( $clave, PASSWORD_DEFAULT);
$tipo = (Int)$_POST['tipo'];
$activo = true;
$query = "INSERT INTO usuarios(nombre, apellido, usuario, password_hash, tipo, activo)
    VALUES('$nombre', '$apellido','$usuario', '$hash', '$tipo', '$activo');";
    $resultado = mysqli_query($connection,$query);
    if(!empty($resultado)){
    header("Location:index.php");
          
    }else{
        echo "<script> alert('No se guardó');</script>";
    }
    $connection -> close();
//}
//else{
//   echo "<script> window.location.href='index.php';</script>";
//}  

