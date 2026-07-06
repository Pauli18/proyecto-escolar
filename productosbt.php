<?php include_once 'conex.php';
$objeto = new conex();
$conex = $objeto -> conectar();
$consulta = "SELECT * FROM objetos_restantes";
$resultado = $conex->prepare($consulta);
$resultado->execute();
$objetos_restantes = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <meta charset="utf-8"> <!-- Conjunto de caracteres para el alfabeto castellano -->
    <title>fulldrive</title>
    <link rel="icon" href="img/favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="fulldrive" name="keywords">
    <meta content="taller" name="description"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
    <!-- Hojas de estilos y recursos de terceros -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Hoja de Estilos personalizada del proyecto JMRP -->
    <link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="page-top">  

    <header>
        <?php session_start(); include 'menu.php' ?>
    </header>
    <div id="wrapper">
        <br> <br>
        <br><br><br>
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Contenido Principal -->
                    <div id="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-">
                                            <div class="row">
                                               <DIV class="alinear">
                                                <div class="col-2">
                                                    <a href="admin.php" class="btn btn-secondary px-0" style="width: 45px; height: 45px;"><</a>
                                                </div>
                                                <div class="col-5">
                                                    <div class="w1"><strong>Productos</strong>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <button type="button" class="btn w-100 text-primary font-weight-bold" data-bs-toggle="modal" data-bs-target="#modalu" name="botonCrear" id="botonCrear"><i class="fas fa-user-plus fa-2x text-success"></i>
                                                    <div class="d-none d-sm-inline-block black">
                                                        <div class="w2">Nuevo Producto</div>
                                                    </div>
                                                    </button>
                                                </div>
                                                </DIV>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table name="usuarios" id="usuarios" class="table table-striped" style="width:95%">
                                                        <thead>
                                                            <tr>
                                                                <th>id_objeto</th>
                                                                <th>nombre</th>
                                                                <th>precio</th>
                                                                <th>cantidad_disponible</th>
                                                                <th><center>Editar</center></th>
                                                                <th><center>Eliminar</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($objetos_restantes as $producto) {?>
                                                            <tr>
                                                                    <td><?php echo $producto['id_objeto']; ?></td>
                                                                 <td><?php echo $producto['nombre']; ?></td>
                                                                 <td><?php echo $producto['precio']; ?></td>
                                                                 <td><?php echo $producto['cantidad_disponible']; ?></td>
                                                                    <td><center><button type="button" class="btn btn-md btn-warning" id="editaru" nombre="editaru" data-bs-toggle="modal" data-bs-target="#modaleditaru<?php echo $producto['id_objeto'];?>"><i class="fa-solid fa-pen-to-square"></i></button></center></td>
                                                                <td><center><button type="button" class="btn btn-md btn-danger" id="eliminau" nombre="eliminau" data-bs-toggle="modal" data-bs-target="#modaleliminaru<?php echo $producto['id_objeto'];?>"><i class="fa-solid fa-trash"></i></button></center></td>
                                                            </tr>
                                                                <?php include 'modaleliminaru.php'?>
                                                            <?php include 'modaleditaru.php';}?>
                                                        </tbody>
                                                     </table>    
                                                                                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
   
     <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
             
        

                <div class="modal fade" id="modalu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" >X</button>
                            </div>
                            <form method="POST" id="formulariom" action="creeusu.php" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <label for="nombre"><b>Nombre</b></label>
                                        <input type="text" name="nombre" id="nomusu" class="form-control">
                                        <label for="apellido"><b>Apellido</b></label>
                                        <input type="text" name="apellido" id="apeusu" class="form-control">
                                        <label for="usuario"><b>Usuario para inicio de sesión</b></label>
                                        <input type="text" name="usuario" id="usuario" class="form-control">
                                        <div class="row">
                                            <div class="col"><label for="password_hash"><b>Contraseña</b></label>
                                                <input type="text" name="password_hash" id="password_hash" class="form-control">
                                            </div>
                                            <div class="col"><label for="password_hash2"><b>Repetir Contraseña</b></label>
                                                <input type="text" name="password_hash2" id="password_hash2" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="tipo"><b>Tipo de usuario</b></label>
                                                <select type="text" name="tipo" id="tipo" class="form-select">
                                                    <option value="1"> Tipo 1</option>
                                                    <option value="2"> tipo 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                            <input type="hidden" name="rown" id="rown">
                                            <input type="hidden" name="operacion" id="operacion">
                                            <input type="submit" class="btn btn-success" name="btncrearu" id="btncrearu" value="Crear">
                                    </div>
                                </div>
                                <button type="reset" id="limpiar" hidden=""></button>
                            </form>
                        </div>
                    </div>
                </div> </div>
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript">

    $(document).ready(function() {
        $("#limpiar").click();
        $("#formulariom > input").html("");
    });

</script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- scripts para personalizar la página-->
    <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<script src="js/scriptusu.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>