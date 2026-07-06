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
    
    <header>
        <nav>
            <a href="#" class="logo">fulldrive</a>
            
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php"> Inicio</a></li>
                
                <li class="dropdown">
                    <a href="#repuestos">Repuestos</a>
                    <div class="dropdown-content">
                        <a href="#motor"> Motor</a>
                        <a href="#frenos"> Frenos</a>
                        <a href="#suspension"> Suspensión</a>
                        <a href="#transmision"> Transmisión</a>
                        <a href="#electrico"> Sistema Eléctrico</a>
                        <a href="#carroceria"> Carrocería</a>
                        <a href="#aire">Aire Acondicionado</a>
                        <a href="#llantas"> Llantas y Aros</a>
                    </div>
                </li>
                
                <li class="dropdown">
                    <a href="#marcas">Marcas</a>
                    <div class="dropdown-content">
                        <a href="#toyota">Toyota</a>
                        <a href="#honda">Honda</a>
                        <a href="#ford">Ford</a>
                        <a href="#chevrolet">Chevrolet</a>
                        <a href="#nissan">Nissan</a>
                        <a href="#hyundai">Hyundai</a>
                        <a href="#mazda">Mazda</a>
                        <a href="#volkswagen">Volkswagen</a>
                    </div>
                </li>
                
                <li><a href="#servicios"> Servicios</a></li>
                <li><a href="#ofertas"> Ofertas</a></li>
                <li><a class="min" href="contacto.php">Contacto</a></li> 
                
                
                <li class="search-container">
                    <input type="text" class="search-box" placeholder="Buscar repuestos...">
                </li>
                
                <li>
                    <a href="#carrito" class="cart-icon">
                        🛒 Carrito
                        <span class="cart-count">3</span>
                    </a>
                </li>
                 <li>
                    <a class="min" href="cerrarsesion.php">cerrar sesion</a>
                </li>
            </ul>
            
            <button class="menu-toggle" id="menuToggle">☰</button>
        </nav>
    </header>>
    </header>

    <!-- JAVASCRIPT -->
    <script src="script.js"></script>
    <script>
        // Funcionalidad especifica del menu
        
        // Menu movil toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Cerrar menu al hacer clic fuera
        document.addEventListener('click', (e) => {
            if (!e.target.closest('nav')) {
                navLinks.classList.remove('active');
            }
        });

        // Efecto de scroll en el header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.background = 'rgba(44, 62, 80, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'linear-gradient(135deg, #2c3e50 0%, #34495e 100%)';
                header.style.backdropFilter = 'none';
            }
        });

        // Funcionalidad del buscador
        const searchBox = document.querySelector('.search-box');
        searchBox.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                const searchTerm = e.target.value.trim();
                if (searchTerm) {
                    alert(`Buscando: "${searchTerm}"`);
                    // Aqui iria la logica de busqueda real
                } else {
                    alert('Por favor ingresa un termino de busqueda');
                }
            }
        });

        // Animacion del contador del carrito
        const cartCount = document.querySelector('.cart-count');
        setInterval(() => {
            cartCount.style.transform = 'scale(1.2)';
            setTimeout(() => {
                cartCount.style.transform = 'scale(1)';
            }, 200);
        }, 5000);

        // Smooth scroll para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
 >
    </header>