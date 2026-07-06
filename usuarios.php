<?php include_once 'conex.php';
$objeto = new conex();
$conex = $objeto -> conectar(); 
$consulta = "SELECT * FROM usuario";
$resultado = $conex->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/head.php' ?>  
</head>
<body id="page-top">  
    <header>
        <?php session_start(); ?>
    </header>
 
    <div id="wrapper"> 
        <div class="row">
            <div class="col-2">
                <?php if($_SESSION['tipo']==1){
                include 'sidebar1.php'; }
                elseif($_SESSION['tipo']==2){
                include 'sidebar.php';
                 }elseif($_SESSION['tipo']==3){include 'sidebar3.php';}else{echo "<script> alert('Usuario no autorizado'); window.history.go(-1);</script>";}?>
            </div>
            <div class="col-10"><br>
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <!-- Circle Buttons <center> <div id="tablagru"></center> -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="w2">Usuarios
                                                    </div>
                                                </div>
                                                <div class="col-6" >
                                                            <button type="button" class="btn w-100 text-primary font-weight-bold" data-bs-toggle="modal" data-bs-target="#modalusr" name="botonCrear" id="botonCrear"><i class="fa fa-user-plus fa-2x text-success"></i>
                                                    <div class="d-none d-sm-inline-block">
                                                                Nuevo Usuario
                                                    </div></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table name="usuarios" id="usuarios" class="table table-striped" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nombre</th>
                                                                <th>Apellido</th>
                                                                <th>Tipo</th>                                                            
                                                                <th><center>Editar</center></th>
                                                                <th><center>Eliminar</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($usuarios as $usuario) {?>
                                                            <tr>
                                                                <td> <?php echo $usuario['id_usu'] ?> </td>
                                                                <td> <?php echo $usuario['nombre'] ?> </td>
                                                                <td> <?php echo $usuario['apellido'] ?> </td>
                                                                <td> <?php echo $usuario['tipo'] ?> </td>
                                                                <td><center><button type="button" class="btn btn-md btn-warning" id="editaru" name="editaru" data-bs-toggle="modal" data-bs-target="#modaleditaru<?php echo $usuario['id_usu'];?>"><i class="fa-solid fa-square-pen fa-lg"></i></button></center></td>
                                                                <td><center><button type="button" class="btn btn-md btn-danger" id="eliminaru" name="eliminaru" data-bs-toggle="modal" data-bs-target="#modaleliminaru<?php echo $usuario['id_usu'];?>"><i class="fa-solid fa-trash fa-lg"></i></button></center></td>
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
            </div>
        </div>
    </div>
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <!-- Logout Modal-->
                <?php include 'includes/logout.php' ?>
                <div class="modal fade" id="modalusr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" id="formulariom" action="crearu.php" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" name="apellido" id="apellido" class="form-control">
                                        <div class="row">
                                            <div class="col"><label for="clave">Contraseña</label>
                                                <input type="text" name="clave" id="clave" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                            <input type="hidden" name="id_usu" id="id_usu">
                                            <input type="hidden" name="operacion" id="operacion">
                                            <input type="submit" class="btn btn-success" name="btncrearu" id="btncrearu" value="Crear">
                                    </div>
                                </div>
                                <button type="reset" id="limpiar" hidden=""></button>
                            </form>
                        </div>
                    </div>
                </div>
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
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
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