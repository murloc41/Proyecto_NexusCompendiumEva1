# Cambios realizados en el CRUD de Proyectos (agosto 2025)

**Autores:** Cesar Rubilar

## Resumen
Se realizaron mejoras y correcciones en la lógica y seguridad del CRUD de Proyectos para cumplir con los requisitos del enunciado y las mejores prácticas de Laravel.

## Cambios principales

1. **Asociación automática del usuario autenticado**
   - Al crear un proyecto, ahora se asocia automáticamente el `user_id` del usuario autenticado.
   - Se agregó el campo `user_id` a la migración y al modelo `Project`.

2. **Protección de acciones por propietario**
   - Solo el usuario propietario puede editar o eliminar su proyecto.
   - Se agregó la verificación en los métodos `update` y `destroy` del `ProjectController`.

3. **Middleware de autenticación**
   - Todas las rutas del controlador de proyectos ahora requieren usuario autenticado (`auth`).

4. **Modelo Project**
   - Se corrigió la relación `user()` para que sea una relación Eloquent estándar.
   - Se agregó `user_id` a `$fillable`.

5. **Migración de proyectos**
   - Se agregó el campo `user_id` como clave foránea a la tabla `proyectos`.
   - Se corrigió un error de columna duplicada (`institute_id`) en la migración de proyectos.
   - Estas correcciones a las migraciones fueron realizadas por Cesar y Frank en conjunto.

6. **Redirecciones y mensajes**
   - Al actualizar un proyecto, se redirige a la vista de detalle con mensaje de éxito.

7. **Adaptación de vistas**
   - Las vistas de detalle de proyecto ahora muestran los botones de edición y eliminación solo al propietario autenticado, cumpliendo con la seguridad y el enunciado.

## Notas
- Se uso de manera reitera el siguiente comando para verificar eerrores en las migraciones

```bash
php artisan migrate:fresh
```


---

**Cambios realizados según requerimiento de revisión y mejora del CRUD de Proyectos.**
