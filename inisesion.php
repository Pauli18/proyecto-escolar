<head>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header> <?php include 'menu.php'?> </header>
    <div class="login-container">
    <form class="login" method="POST" action="login.php" class="login-form">
        <label for="username">usuario:</label>
        <input type="text" id="username" name="username" required class="login-input">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required class="login-input"><br>

        <button type="submit" class="login-submit">iniciar sesión</button>
    </form>
    </div>
</body>
</html>