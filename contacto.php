<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="login-container">
        <header> <?php include 'menu.php'?> </header>
        <form class="login" method="POST" action="procesar_contacto.php">
            <h2>Formulario de Contacto</h2>
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required class="login-input" maxlength="100">
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required class="login-input" maxlength="100">
            
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required class="login-input" 
                   placeholder="Ej: 3001234567" pattern="[0-9]{7,15}">
            
            <label for="gmail">Email:</label>
            <input type="email" id="gmail" name="gmail" required class="login-input" maxlength="150">

            <center>
                <input type="submit" value="Enviar Contacto" class="login-submit">
            </center>
        </form>
    </div>

   
</body>
</html>