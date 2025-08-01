<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nexus Compendium - IPSS')</title>
    <link rel="stylesheet" href="css/styles.css">
   
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">
                    <img src="/images/logo.png?v=<?php echo time(); ?>" alt="Nexus Compendium Logo" />
                </div>
                <h1 class="site-title">Nexus Compendium</h1>
            </div>
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">☰</button>
            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="/" id="nav-bienvenidos">🏠 Bienvenidos</a></li>
                    <li><a href="/dashboard" id="nav-dashboard">📊 Dashboard</a></li>
                    <li><a href="/proyectos" id="nav-proyectos">📁 Proyectos</a></li>
                    <li><a href="/usuarios" id="nav-usuarios">👥 Usuarios</a></li>
                    <li><a href="/institutos" id="nav-institutos">🏢 Institutos</a></li>
                    <li><a href="/reportes" id="nav-reportes">📈 Reportes</a></li>
                    <li><a href="/login" id="nav-login" class="login-btn">🔑 Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>📚 Nexus Compendium</h3>
                <p>Sistema de Gestión de Proyectos de Vinculación con el Medio</p>
                <p>Instituto Profesional San Sebastián</p>
                <p style="margin-top: 1rem;">
                    <strong>Conectando conocimiento con impacto social</strong>
                </p>
            </div>
            <div class="footer-section">
                <h3>📞 Contacto</h3>
                <p>📍 Av. Principal 123, Santiago, Chile</p>
                <p>📧 contacto@nexuscompendium.cl</p>
                <p>☎️ +56 2 2234 5678</p>
                <p>🌐 www.nexuscompendium.cl</p>
            </div>
            <div class="footer-section">
                <h3>🔗 Enlaces Rápidos</h3>
                <p><a href="/proyectos">Ver Proyectos Activos</a></p>
                <p><a href="/usuarios">Gestión de Usuarios</a></p>
                <p><a href="/institutos">Instituciones Aliadas</a></p>
                <p><a href="/reportes">Reportes y Estadísticas</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Nexus Compendium - Instituto Profesional San Sebastián. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('show');
        }

        // Cerrar menú móvil al hacer clic en un enlace
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navMenu').classList.remove('show');
            });
        });

        // Cerrar menú móvil al hacer clic fuera
        document.addEventListener('click', (e) => {
            const navMenu = document.getElementById('navMenu');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            if (!navMenu.contains(e.target) && !toggle.contains(e.target)) {
                navMenu.classList.remove('show');
            }
        });

        // Solo manejar clases activas, SIN interceptar navegación
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            
            // Limpiar y setear clases activas
            document.querySelectorAll('.nav-menu a').forEach(link => {
                link.classList.remove('active');
                
                const href = link.getAttribute('href');
                if ((currentPath === '/' || currentPath === '/dashboard') && href === '/') {
                    link.classList.add('active');
                } else if (currentPath.startsWith(href) && href !== '/') {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
