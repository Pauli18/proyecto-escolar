<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php' ;
$id="";
$id2="";
$ida="";
$ida3="";
$rutaqr="";
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$apellido = $_POST['ape'];
$usuario = $_POST['usuario'];
$activo = true;
$id_usu = $_POST['id_usu'];
 $stmt = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', tipo='$tipo' WHERE id_usu='$id_usu'";
 
    $resultado = mysqli_query($connection,$stmt);
    if(!empty($resultado)){
      echo "<script>window.location.href='usuariobt.php';</script>";
    }else{
        echo "<script> alert('No se guardaron los cambios');window.history.go(-1);</script>";
    }
}
else{
   echo "<script>alert('Usuario no autorizado'); window.location.href='index.php';</script>";
}  
?>