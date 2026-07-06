<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fulldrive - Menu</title>
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- MENÚ DE NAVEGACIÓN -->
    <header>
        <nav>
            <a href="#" class="logo">fulldrive</a>
            
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php"> Inicio</a></li>
                
                <li class="dropdown">
                    <a href="accsmenu.php">Repuestos</a>
                    
                </li>
                
                <li class="dropdown">
                    <a href="accsmenu.php">Marcas</a>

                </li>
                
                <li><a href="accsmenu.php"> Servicios</a></li>
                <li><a href="accsmenu.php"> Ofertas</a></li>
                <li><a class="min" href="contacto.php">Contacto</a></li> 
                
                
                <li class="search-container">
                    <input type="text" class="search-box" placeholder="Buscar repuestos...">
                </li>
                
                <li>
                    <a href="carro.php" class="cart-icon">
                        🛒 Carrito
                        <span class="cart-count">3</span>
                    </a>
                </li>
                <li>
                    <a class="min" href="registrarse.php">Registrarse</a>
                    <a class="min" href="inisesion.php">iniciar sesion</a>       
                </li>
            </ul>
            
            <button class="menu-toggle" id="menuToggle">☰</button>
        </nav>
    </header>
</body>