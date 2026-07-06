<?php
session_start();
include 'conexi.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usu = $_POST['username'];
    $clave = $_POST['password'];

    $stmt = $connection->prepare("SELECT nombre, password_hash, tipo FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usu);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hash_password, $tipo);
        $stmt->fetch();

        if (password_verify($clave, $hash_password)) {
            $_SESSION['usuario_id'] = $user_id;
            $_SESSION['username'] = $usu;
            $_SESSION['tipo'] = $tipo;
            if ($tipo==1){
             header("Location: admin.php"); 
            exit;  
            }else {
             header("Location: indexusu.php");
            exit;
            }
        } else {
            $message = "Contraseña incorrecta.";
        }
    } else {
        $message = "Usuario no encontrado.";
    }
    $stmt->close();
}
$connection->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-4">Login</h3>
                <?php if ($message) echo "<div class='alert alert-danger'>$message</div>"; ?>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
                <p class="text-center mt-3"><a href="register.php">Registrarse</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>


   
    