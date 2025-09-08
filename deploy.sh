#!/bin/bash

# Nombre de la base de datos
DB_NAME="taller_software_web_1_grupo1"
# URL de la aplicación para Laragon
APP_URL="http://nexuscompendium.test"

echo "Iniciando la configuración del proyecto..."

# 1. Instalar dependencias de PHP con Composer
echo "Instalando dependencias de PHP..."
composer install

# 2. Instalar dependencias de JavaScript con NPM
echo "Instalando dependencias de Node.js..."
npm install

# 3. Configurar el archivo de entorno .env
if [ ! -f .env ]; then
    echo "Creando y configurando el archivo .env..."
    cp .env.example .env

    # Usamos sed para modificar el archivo .env en el sitio.
    # La opción -i modifica el archivo directamente.
    sed -i "s/APP_NAME=Laravel/APP_NAME=\"Nexus Compendium\"/" .env
    sed -i "s#APP_URL=http://localhost#APP_URL=${APP_URL}#" .env
    sed -i "s/DB_CONNECTION=sqlite/DB_CONNECTION=mysql/" .env
    sed -i "s/# DB_HOST=127.0.0.1/DB_HOST=127.0.0.1/" .env
    sed -i "s/# DB_PORT=3306/DB_PORT=3306/" .env
    sed -i "s/# DB_DATABASE=laravel/DB_DATABASE=${DB_NAME}/" .env
    sed -i "s/# DB_USERNAME=root/DB_USERNAME=root/" .env
    sed -i "s/# DB_PASSWORD=/DB_PASSWORD=/" .env
else
    echo "El archivo .env ya existe. Omitiendo la configuración automática."
fi 

# 4. Generar la clave de la aplicación Laravel
echo "Generando la clave de la aplicación..."
php artisan key:generate

# 5. Crear la base de datos en MySQL si no existe
echo "Intentando crear la base de datos '${DB_NAME}' (si no existe)..."
# Este comando asume que estás ejecutando el script desde la terminal de Laragon
# y que el usuario 'root' de MySQL no tiene contraseña.
mysql -u root -e "CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

echo "------------------------------------------------------------------"
echo "¡La configuración del proyecto ha finalizado!"
echo "Tu aplicación debería estar disponible en: ${APP_URL}"
echo "Asegúrate de que Laragon esté en ejecución y haz clic en 'Reload'."
echo "Para compilar los assets para desarrollo, ejecuta: npm run dev"
# 6. Ejecutar las migraciones y los seeders de la base de datos
echo "Ejecutando migraciones y seeders..."
php artisan migrate --seed

echo "------------------------------------------------------------------"
echo "¡La configuración del proyecto ha finalizado!"
echo "Tu aplicación debería estar disponible en: ${APP_URL}"
echo "Asegúrate de que Laragon esté en ejecución y haz clic en 'Reload'."
echo "Para compilar los assets para desarrollo, ejecuta: npm run dev"
