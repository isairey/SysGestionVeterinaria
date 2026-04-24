<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🐾 Sistema de Gestión Veterinaria

Aplicación web desarrollada con **Laravel (PHP)** para la administración integral de una clínica veterinaria, integrando tecnologías como **Blade, JavaScript, CSS, HTML y Go Templates** para una interfaz dinámica y eficiente.

---

## 📋 Descripción

Este sistema permite gestionar de forma centralizada la información de una clínica veterinaria, incluyendo pacientes (mascotas), dueños, citas médicas y registros clínicos.

La aplicación está diseñada para mejorar la organización, optimizar procesos y brindar una mejor atención a los clientes.

---

## 🎯 Objetivo

* Digitalizar la gestión veterinaria
* Automatizar procesos administrativos
* Mejorar el control de pacientes
* Facilitar la consulta de información

---

## 🚀 Características

* 🐾 Gestión de mascotas (CRUD)
* 👤 Registro de dueños
* 📅 Administración de citas
* 🩺 Historial clínico
* 💊 Registro de tratamientos
* 💰 Control de servicios
* 🔐 Sistema de autenticación
* 📊 Panel administrativo

---

## 🛠️ Tecnologías Utilizadas

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/Laravel-F9322C?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
  <img src="https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
  <img src="https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
  <img src="https://img.shields.io/badge/Go%20Template-00ADD8?style=for-the-badge&logo=go&logoColor=white"/>
</p>

---

## 📦 Instalación

### 1️⃣ Clonar el repositorio

```bash id="g7k2p4"
git clone https://github.com/isairey/tu-repo.git
cd tu-repo
```

---

### 2️⃣ Instalar dependencias

```bash id="n5v8q1"
composer install
npm install
```

---

### 3️⃣ Configurar entorno

```bash id="p3k9x6"
cp .env.example .env
```

Editar `.env`:

```env id="r8m2z4"
DB_DATABASE=clinica_veterinaria
DB_USERNAME=root
DB_PASSWORD=
```

---

### 4️⃣ Generar clave

```bash id="c6t1n9"
php artisan key:generate
```

---

### 5️⃣ Ejecutar migraciones

```bash id="x4q7w2"
php artisan migrate
```

---

### 6️⃣ Ejecutar el servidor

```bash id="z9p2k5"
php artisan serve
```

👉 Accede en:
http://localhost:8000

---

## 📁 Estructura del Proyecto

```id="u2m8r7"
app/
 ┣ 📂 Models/
 ┣ 📂 Http/
 ┃ ┗ 📂 Controllers/
resources/
 ┣ 📂 views/ (Blade)
 ┣ 📂 css/
 ┣ 📂 js/
 ┗ 📂 templates/ (Go Templates)
routes/
 ┗ 📄 web.php
database/
 ┗ 📂 migrations/
```

---

## 🔌 Funcionalidades

### 🐾 Mascotas

* Registro de pacientes
* Asociación con dueños
* Edición y eliminación

---

### 👤 Dueños

* Gestión de clientes
* Historial de mascotas

---

### 📅 Citas

* Programación de consultas
* Control de fechas

---

### 🩺 Historial Clínico

* Diagnósticos
* Tratamientos
* Medicamentos

---

## 🔐 Seguridad

* Autenticación de usuarios
* Protección CSRF
* Validación de formularios
* Control de acceso por roles

---

## 🧪 Pruebas

```bash id="y1k6m3"
php artisan test
```

---

## 🤝 Contribuciones

1. Fork del proyecto
2. Crear una rama (`git checkout -b feature/nueva-funcionalidad`)
3. Commit (`git commit -m 'Nueva funcionalidad'`)
4. Push (`git push origin feature/nueva-funcionalidad`)
5. Crear Pull Request

---

## 📜 Licencia

Este proyecto está bajo la licencia MIT.

---

## 👨‍💻 Autor

Desarrollado por **Isai Reyes**

