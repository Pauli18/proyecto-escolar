<?php include_once 'conex.php';
$objeto = new conex();
$conex = $objeto -> Conectar();
$consulta= "SELECT * FROM usuarios";
$resultado = $conex->prepare(query: $consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(mode: PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
<thead>
    <tr>
        <th>id_usu</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>usuario</th>
        <th>tipo</th>
        <th><center>editar</center></th>
        <th><center>eliminar</center></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($usuarios as $usuario) {?>
    <tr>
        <td><?php echo $usuario['id_usu']; ?></td>
        <td><?php echo $usuario['nombre']; ?></td>
        <td><?php echo $usuario['apellido']; ?></td>
        <td><?php echo $usuario['usuario']; ?></td>
        <td><?php echo $usuario['tipo']; ?></td>
        <td><center><a href="editaru.php?id=<?php echo $usuario['id_usu']; ?>">Editar</a></center></td>
        <td><center><a href="eliminau.php?id=<?php echo $usuario['id_usu']; ?>">Eliminar</a></center></td>
    </tr>
    <?php  } ?>
     <?php include 'modaleliminaru.php';?>
    <?php include 'modaleditaru.php'; ?>
</tbody>

</body>