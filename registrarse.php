<head>    
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <header> <?php include 'menu.php'?> </header>
<img src="img/images.jpg" alt="" class="bg">
<form class="login" method="POST" action="creeusu.php">
    <div class="r">Registrarse</div><br>
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario"  class="login-input" placeholder="USUARIO" autofocus required>
    <div class="img">
    </div>
    <label for="nomusu">nombre</label>
    <input type="text" name="nomusu" id="nomusu" class="login-input" placeholder="Nombre">
    <div class="imga">
         <label for="tipo">tipo</label>
         <input type="number" name="tipo" id="tipo" class="login-input" placeholder="TIPO: 1 ADMIN, 2 USUARIO">
         <label for="apellido">apellido</label>
         <input type="text" name="apeusu" id="apeusu" class="login-input" placeholder="Apellido">
         <label for="clave">clave</label>
         <input type="password" name="clave" id="clave" class="login-input" placeholder="CLAVE">
         <label for="clave2">confirmar clave</label>
         <input type="password" name="clave2" id="clave2" class="login-input" placeholder="CONFIRMAR CLAVE">
    
         
    </div>
</body>
    <center><input type="submit" value="Registrar" class="login-submit"></center>
    <p class="login-help"><a href="#">¿Olvido su Contraseña?</a></p>
    <button type="reset" id="limpiari" hidden=""></button>
</form>

