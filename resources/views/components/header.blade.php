<header>
    <div class="header-container d-flex align-items-center">
        <img src="{{ asset('imagenes/logo.png') }}" alt="Nexus Compendium Logo" class="logo-image">
        <span class="logo-text">Nexus Compendium</span>
    
  <nav class="navbar navbar-expand-lg navbar-dark" style="width:100%;">
    <div class="container-fluid p-0">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Menú">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">🏠 Bienvenidos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/proyectos') }}">📁 Proyectos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/usuarios') }}">👥 Usuarios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">📊 Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">🚪 Iniciar Sesión</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>
            
</header>
