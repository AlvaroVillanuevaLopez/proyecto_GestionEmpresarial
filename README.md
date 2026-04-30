🏢 Symfony Company & PDF Manager
PHP 8.1+
Symfony 6.x
PDF Management
Aplicación web desarrollada con Symfony para la gestión de empresas y sus documentos PDF. Permite crear y eliminar empresas, así como subir y eliminar archivos PDF almacenados en el servidor.

Características
🏢
Gestión de empresas
Crear y eliminar empresas desde el panel principal
📄
Subida de PDFs
Adjunta documentos PDF a cada empresa en el servidor
🗑️
Eliminación de archivos
Borra PDFs del servidor de forma segura y controlada
🔒
Almacenamiento local
Los archivos se gestionan directamente en el servidor
Requisitos previos
PHP 8.1 o superior
Composer instalado globalmente
Symfony CLI (recomendado)
Base de datos compatible: MySQL / PostgreSQL / SQLite
Extensión PHP: fileinfo, pdo
Instalación
1. Clonar el repositorio
git clone https://github.com/tu-usuario/symfony-company-pdf-manager.git
cd symfony-company-pdf-manager
2. Instalar dependencias
composer install
3. Configurar el entorno
cp .env .env.local
Edita el archivo .env.local con tus credenciales de base de datos:

DATABASE_URL="mysql://usuario:contraseña@127.0.0.1:3306/nombre_bd"
4. Crear la base de datos y ejecutar migraciones
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
5. Crear el directorio de almacenamiento de PDFs
mkdir -p public/uploads/pdfs
chmod 775 public/uploads/pdfs
6. Iniciar el servidor
symfony server:start
# o bien
php -S localhost:8000 -t public/
Rutas principales
Método	Ruta	Descripción
GET	/companies	Listado de todas las empresas
POST	/companies/new	Crear una nueva empresa
DELETE	/companies/{id}	Eliminar una empresa y sus archivos
POST	/companies/{id}/upload	Subir un archivo PDF a una empresa
DELETE	/companies/{id}/pdf/{filename}	Eliminar un PDF del servidor
Estructura del proyecto
├── src/
│   ├── Controller/
│   │   └── CompanyController.php
│   ├── Entity/
│   │   └── Company.php
│   ├── Form/
│   │   └── CompanyType.php
│   └── Service/
│       └── PdfUploader.php
├── templates/
│   └── company/
│       ├── index.html.twig
│       ├── new.html.twig
│       └── show.html.twig
├── public/
│   └── uploads/
│       └── pdfs/
├── migrations/
├── .env
└── composer.json

Tecnologías utilizadas
Symfony 6.x — Framework PHP
Doctrine ORM — Gestión de base de datos
Twig — Motor de plantillas
DockerDesktop — Servicio FTP de subida archivos PDF
