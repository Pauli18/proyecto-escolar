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
$ape = $_POST['apellido'];
$usuario = $_POST['usuario'];
$activo = true;
$tipo = $_POST['tipo'];
if(filesize($im)>0){
    if($revisar !== false){
        $stmt = "UPDATE usuario SET, nombre='$nombre', apellido='$ape', usuario='$usuario', tipo='$tipo', activo='$activo'";
    }else{
    }}else{    $stmt = "UPDATE usuario SET  nombre='$nombre', apellido='$ape', usuario='$usuario', tipo='$tipo', activo='$activo'";}
        echo "<script> window.history.go(-1); </script>";
    }else{
        echo "<script> alert('No se guardaron los cambios');window.history.go(-1);</script>";
    }
    else {
   echo "<script>alert('Usuario no autorizado'); window.location.href='index.php';</script>";
}  
?>