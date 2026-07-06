<?php
include 'conexi.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['telefono'];
$gmail = $_POST['gmail'];

$query0 = "SELECT * FROM contacto WHERE gmail='$gmail'";
$resultado0 = mysqli_query($connection,$query0);
if(mysqli_num_rows($resultado0)>0){
    echo "<script>alert('El email ya existe');</script>";
    echo "<script>window.location.href='index.php';</script>";
    exit;
}

$query = "INSERT INTO contacto(nombre, apellido, celular, gmail)
    VALUES('$nombre', '$apellido','$celular', '$gmail');";
$resultado = mysqli_query($connection,$query);

if(!empty($resultado)){
    echo "<script>alert('¡Contacto guardado exitosamente!');</script>";
    echo "<script>window.location.href='index.php';</script>";
}else{
    echo "<script>alert('No se guardó');</script>";
    echo "<script>window.location.href='index.php';</script>";
}

$connection -> close();
?>