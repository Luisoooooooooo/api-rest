# Proyecto Angular + Laravel

Este es un proyecto de práctica cuyo objetivo es crear una aplicación web básica que permita realizar búsquedas de libros almacenados en una base de datos. El backend está desarrollado con **Laravel**, el cual expone una API para interactuar con la base de datos. El frontend está desarrollado con **Angular**, que consume la API y proporciona una interfaz para que los usuarios realicen búsquedas de libros.

## Estructura del proyecto

- **Backend (Laravel):**
  - API RESTful para gestionar los libros en la base de datos.
  - Base de datos con información sobre libros (título, autor, etc.).
  
- **Frontend (Angular):**
  - Formulario de búsqueda que interactúa con la API del backend.
  - Visualización de resultados en tiempo real desde la base de datos.

## Requisitos previos

Para ejecutar este proyecto, necesitarás tener instalados los siguientes programas:

- **Node.js** y **npm** (para Angular)
- **PHP** y **Composer** (para Laravel)
- **MySQL** o cualquier base de datos compatible con Laravel
- **Git** (para la gestión de versiones)

## Instalación

### 1. Clonar el repositorio

Clona este repositorio en tu máquina local:

```bash
git clone https://github.com/Luisoooooooooo/api-rest.git
``` 

### 2. Backend (Laravel)

Navega al directorio del backend e instala las dependencias:

```bash
cd backend
composer install
```

Configura el archivo `.env` para tu base de datos y ejecuta las migraciones:

```bash
cp .env.example .env
php artisan key
php artisan migrate
php artisan serve
```

### 3. Frontend (Angular)

Navega al directorio del frontend e instala las dependencias:

```bash
cd frontend
npm install
ng serve
```

### 4. Acceso a la aplicación

- **Backend**: Acceder a `http://localhost:8000/api/books`.
- **Frontend**: Acceder a `http://localhost:4200`.

## Características

- **Laravel API**: Endpoints para interactuar con la base de datos de libros.
- **Angular Frontend**: Formulario para realizar búsquedas en la base de datos de libros.

## Contribuir

Este proyecto está abierto a mejoras. Si deseas contribuir, por favor, abre un pull request o sugiere cambios mediante issues.

---

¡Gracias por tu interés en este proyecto!
