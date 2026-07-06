<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php' ;
$id_usu = $_POST['id_usu'];
$stmt = "DELETE FROM usuarios WHERE id_usu='$id_usu' ";
    $resultado = mysqli_query($connection,$stmt);
    if(!empty($resultado)){
  echo "<script>window.location.href='usuariobt.php';</script>";
    }else {

   echo "<script>alert('Usuario no autorizado'); window.location.href='index.php';</script>";
}
}
?>