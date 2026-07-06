<?php include_once 'conex.php';
$objeto = new conex();
$conex = $objeto -> Conectar();
$consulta= "SELECT * FROM usuarios";
$resultado = $conex->prepare(query: $consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(mode: PDO::FETCH_ASSOC);
?>

 <!-- Control de acceso -->
<?php session_start();
if($_SESSION["tipo"]===0 || $_SESSION["tipo"]===2){
        echo"<script>alert('Acceso no válido');window.location.href='index.php';</script>";
  exit();}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'head.php' ?>
</head>
<body>  
<header>
    <?php include 'menuusu.php' ?>
    <link rel="stylesheet" href="css/stylesbt.css">
</header>                            

            <div class="row">
                <!-- Opciones del Dashboard -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="usuariobt.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">usuario</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-newspaper fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                    
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                        <a href="carritobt.php"> <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">carrito</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comment fa-2x text-blue-300"></i>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="almacenbt.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">almacen</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="productosbt.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">producto</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
    <!-- Fin contenedor principal -->
    <br><br>
    <br><br>
    <br><br>
</div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>
   
