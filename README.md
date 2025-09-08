# Nexus Compendium

Proyecto académico desarrollado para el **Instituto Profesional San Sebastián** como parte de la evaluación del curso de Desarrollo Web. Nexus Compendium es una plataforma de gestión de proyectos de vinculación con el medio, diseñada para conectar el conocimiento académico con el impacto social comunitario.

## Equipo de Desarrollo


## Descripción del Proyecto

Nexus Compendium es una plataforma web especializada en la gestión y coordinación de proyectos de vinculación con el medio para instituciones educativas. La empresa NexusCompendium se dedica a facilitar la conexión entre el ámbito académico y las necesidades sociales comunitarias, proporcionando herramientas para la planificación, seguimiento y evaluación de proyectos de impacto social.

### Misión de NexusCompendium
Facilitar la vinculación efectiva entre instituciones educativas y comunidades, mediante una plataforma tecnológica que optimiza la gestión de proyectos sociales y maximiza el impacto positivo en la sociedad.

### Enfoque en Vinculación con el Medio

## Características Implementadas

### Identidad Visual Corporativa
  - Azul Principal: #6290C3
  - Verde Claro: #C2E7DA 
  - Azul Marino: #1A1B41
  - Verde Brillante: #BAFF29

### Sistema de Vistas y Funcionalidades

### Arquitectura Técnica

## Credenciales de Acceso

Para probar el sistema de autenticación:

## Estructura del Proyecto

```
NexusCompendiumEva1/
├── app/
│   ├── Factories/UserFactory.php      # Generador de usuarios institucionales
│   ├── Models/                        # Modelos: User, Role, Institute, Project
│   └── Support/Facades/Route.php      # Sistema de routing personalizado
├── database/
│   ├── migrations/                    # Estructura de BD (4 tablas principales)
│   └── seeders/                       # Datos iniciales institucionales
├── public/
│   ├── index.php                      # Punto de entrada principal con routing
│   ├── images/logo.png                # Logo corporativo del proyecto
│   └── css/styles.css                 # Estilos CSS principales
├── resources/views/                   # Sistema de vistas Blade
│   ├── layouts/app.blade.php          # Layout maestro con navegación
│   ├── welcome.blade.php              # Página principal de bienvenida
│   ├── auth/                          # Sistema de autenticación
│   │   ├── login.blade.php            # Vista de login
│   │   └── registro.blade.php         # Vista de registro
│   ├── dashboard/dashboard.blade.php  # Panel de control
│   ├── proyectos/                     # Gestión de proyectos de vinculación
│   │   ├── index.blade.php            # Listado de proyectos
│   │   ├── create.blade.php           # Formulario de creación
│   │   └── show.blade.php             # Detalle de proyecto
│   ├── usuarios/index.blade.php       # Gestión de usuarios
│   ├── institutos/index.blade.php     # Gestión de institutos
│   └── reportes/index.blade.php       # Sistema de reportes
├── routes/web.php                     # Helper functions y lógica de vistas
├── index.php                          # Redireccionador a public/
├── BRANDING.md                        # Justificación de identidad visual
└── README.md                          # Esta documentación
```

## Instalación y Uso

### Requisitos del Sistema

### Pasos de Instalación
1. Clonar el repositorio:
   ```bash
   git clone https://github.com/CesarRubilar0/NexusCompendiumEva1.git
   cd NexusCompendiumEva1
   ```

2. **Opción A - Con Laragon (Recomendado):**
   - Copiar proyecto a `C:\laragon\www\`
   - Configurar virtual host: `nexuscompendiumeva1.test`
   - Abrir: `http://nexuscompendiumeva1.test`

3. **Opción B - Servidor PHP integrado:**
   ```bash
   php -S localhost:8000 -t public/
   ```
   - Abrir: `http://localhost:8000`

### Navegación por el Sistema

## Enfoque en Vinculación con el Medio

### Objetivo Principal
NexusCompendium facilita la gestión integral de proyectos que conectan la academia con necesidades sociales reales, promoviendo el impacto positivo en las comunidades.

### Características Específicas

## Datos de Prueba y Autenticación

El sistema incluye usuarios institucionales con diferentes roles:

Para acceder al sistema utilizar las credenciales mencionadas anteriormente.

## Contexto Académico

### Información del Curso

### Cumplimiento de Rúbrica Académica
El proyecto cumple con todos los requisitos especificados:


## Detalles Técnicos de Implementación

### Sistema de Routing Personalizado
El proyecto utiliza un sistema de routing en `public/index.php` que:

### Procesamiento de Vistas Blade
Las funciones helper en `routes/web.php` permiten:

### Estructura de Base de Datos
Migraciones preparadas para:

## Documentación Adicional


## Notas de Desarrollo

Este proyecto académico demuestra competencias en:

## 📞 Contacto

Para consultas sobre este proyecto académico, contactar a cualquier miembro del equipo de desarrollo a través de los canales institucionales del Instituto Profesional San Sebastián.


**© 2025 Nexus Compendium - Proyecto Académico Instituto Profesional San Sebastián**
=======
=======
>>>>>>> origin/Cambios__Sofia
=======
>>>>>>> origin/Integracion_ia_eduardo
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/CAMBIOS_CRUD_PROYECTOS_CESAR_FRANK
=======
>>>>>>> origin/Cambios__Sofia
=======
>>>>>>> origin/Integracion_ia_eduardo
