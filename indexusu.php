<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fulldirve - Repuestos Automotrices</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
        <header> <?php include 'menuusu.php'?> </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="main-content">
        <section id="inicio" class="hero">
            <div class="hero-content">
            </div>
        </section><br>

        <!-- Carrusel de imágenes -->
    <div class="carousel">
            <button class="carousel-arrow left">&#10094;</button>
            <div class="carousel-images">
                <img src="img/fachada.jpg" class="carousel-img active" alt="Imagen 1">
                <img src="img/jiji.png" class="carousel-img" alt="Imagen 2">
                <img src="img/pineda.png" class="carousel-img" alt="Imagen 3">
                <img src="img/moto.png" class="carousel-img" alt="Imagen 4">
                <img src="img/llante.png" class="carousel-img" alt="Imagen 5">
            </div>
            <button class="carousel-arrow right">&#10095;</button>
            <div class="carousel-indicators">
                <span class="indicator active"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <!-- INFORMACIÓN DE LA EMPRESA -->
            <div class="footer-section">
                <h3>🔧 fulldrive</h3>
                <div class="company-info">
                    <p>Somos líderes en repuestos automotrices desde 2025. Ofrecemos partes originales y compatibles para todas las marcas con garantía de calidad.</p>
                    <div class="certifications">
                        <span class="cert-badge"> ISO 9001</span>
                        <span class="cert-badge"> Garantía</span>
                        <span class="cert-badge"> Envío Gratis</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" title="Facebook">📘</a>
                    <a href="#" title="Instagram">📸</a>
                    <a href="#" title="WhatsApp">💬</a>
                    <a href="#" title="YouTube">▶️</a>
                </div>
            </div>
            
            <!-- CATEGORÍAS -->
            <div class="footer-section">
                <h3> Categorías</h3>
                <ul>
                    <li><a href="#motor"> Motor y Transmisión</a></li>
                    <li><a href="#frenos"> Sistema de Frenos</a></li>
                    <li><a href="#suspension"> Suspensión</a></li>
                    <li><a href="#electrico"> Sistema Eléctrico</a></li>
                    <li><a href="#carroceria"> Carrocería</a></li>
                    <li><a href="#aire"> Aire Acondicionado</a></li>
                    <li><a href="#llantas"> Llantas y Aros</a></li>
                </ul>
            </div>
            
            <!-- MARCAS Y NEWSLETTER -->
            <div class="footer-section">
                <h3> Marcas</h3>
                <ul>
                    <li><a href="#toyota"> Toyota</a></li>
                    <li><a href="#honda"> Honda</a></li>
                    <li><a href="#ford"> Ford</a></li>
                    <li><a href="#chevrolet"> Chevrolet</a></li>
                    <li><a href="#nissan"> Nissan</a></li>
                    <li><a href="#hyundai"> Hyundai</a></li>
                </ul>
                
                <div class="newsletter">
                    <h4> Newsletter</h4>
                    <p>Recibe ofertas exclusivas</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Tu email..." required>
                        <button type="button">Suscribirse</button>
                    </div>
                </div>
            </div>
            
            <!-- CONTACTO -->
            <div class="footer-section">
                <h3> Contacto</h3>
                <div class="contact-info">
                    <span> Calle 50 #23-45, Medellín</span>
                    <span> +57 (4) 456-7890</span>
                    <span> info@fulldrive.com</span>
                    <span> Lun-Sáb: 8:00-18:00</span>
                </div>
                
                <div class="payment-methods">
                    <span> Visa</span>
                    <span> Mastercard</span>
                    <span> Efectivo</span>
                    <span> Transferencia</span>
                    <span> nequi</span>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 fulldrive. Todos los derechos reservados.</p>
            <div class="footer-bottom-links">
                <a href="#">Términos y Condiciones</a>
                <a href="#">Política de Privacidad</a>
                <a href="#">Política de Devoluciones</a>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // Menú móvil
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Cerrar menú al hacer clic fuera
        document.addEventListener('click', (e) => {
            if (!e.target.closest('nav')) {
                navLinks.classList.remove('active');
            }
        });

        // Scroll effect en header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Buscador
        const searchBox = document.querySelector('.search-box');
        searchBox.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                const searchTerm = e.target.value.trim();
                if (searchTerm) {
                    alert(`Buscando: "${searchTerm}"`);
                } else {
                    alert('Por favor ingresa un término de búsqueda');
                }
            }
        });

        // Newsletter
        const newsletterBtn = document.querySelector('.newsletter-form button');
        newsletterBtn.addEventListener('click', () => {
            const email = document.querySelector('.newsletter-form input').value;
            if (email) {
                alert(`¡Gracias por suscribirte con el email: ${email}!`);
                document.querySelector('.newsletter-form input').value = '';
            } else {
                alert('Por favor ingresa tu email');
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const target = document.getElementById(targetId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Carrusel automático con flechas funcionales
        const carouselImages = document.querySelectorAll('.carousel-img');
        const indicators = document.querySelectorAll('.indicator');
        const leftArrow = document.querySelector('.carousel-arrow.left');
        const rightArrow = document.querySelector('.carousel-arrow.right');
        let currentIndex = 0;
        const totalImages = carouselImages.length;
        let carouselInterval;

        function showImage(index) {
            carouselImages.forEach((img, i) => {
                img.classList.toggle('active', i === index);
                indicators[i].classList.toggle('active', i === index);
            });
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % totalImages;
            showImage(currentIndex);
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            showImage(currentIndex);
        }

        function resetInterval() {
            clearInterval(carouselInterval);
            carouselInterval = setInterval(nextImage, 10000);
        }

        carouselInterval = setInterval(nextImage, 10000);

        rightArrow.addEventListener('click', () => {
            nextImage();
            resetInterval();
        });

        leftArrow.addEventListener('click', () => {
            prevImage();
            resetInterval();
        });

        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', () => {
                currentIndex = i;
                showImage(currentIndex);
                resetInterval();
            });
        });
    </script>
</body>
</html>