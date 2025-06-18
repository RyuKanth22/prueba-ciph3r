<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🧪 prueba-ciph3r - Laravel 12

API RESTful para la prueba tecnica de ciph3r
## 🚀 Url de despliegue: https://prueba-ciph3r.fly.dev

## IMPORTANTE: Al acceder a la URL de desplegue por primera vez, debe esperar 15 segundos (Aprox) mientras el servidor de fly.io se inicia
---

## 🛠️ Tecnologías utilizadas

- Laravel 12
- PHP 8.2
- Sqlite (Base de datos)
- JWT (autenticación)
- Docker + Fly.io (para despliegue)

---

## 📦 Requisitos

Antes de empezar, asegúrate de tener instalado:

- PHP >= 8.2
- Composer

---

## 📦 Instalación del proyecto
```bash
# Clonar el repositorio
git clone https://github.com/RyuKanth22/prueba-ciph3r.git
cd prueba-ciph3r

# Instalar dependencias PHP
composer install

# Copiar el archivo de entorno
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate

# Generar clave de aplicación
php artisan jwt:secret

# Ejecutar migraciones y seeders
php artisan migrate --seed

# Levantar servidor local
php artisan serve
```

## 🛠️ Migraciones y seeders incluidos

La aplicación incluye migraciones y seeders para contar con datos de prueba listos al ejecutar el proyecto. A continuación, se detallan los registros generados con los seeders:

```bash
👤 Usuarios:
  - usuario1@usuario1.com - Contraseña : usuario1
  - usuario2@usuario2.com - Contraseña : usuario2
  - usuario3@usuario2.com - Contraseña : usuario3


📦 Divisa:

'id'=>1,'name' => 'Dólar', 'symbol' => '$', 'exchange_rate' => 1.0
'id'=>2,'name' => 'Euro', 'symbol' => '€', 'exchange_rate' => 0.85
'id'=>3,'name' => 'Yen Japonés', 'symbol' => '¥', 'exchange_rate' => 110.0
'id'=>4,'name' => 'Libra Esterlina', 'symbol' => '£', 'exchange_rate' => 0.75
'id'=>5,'name' => 'Peso Mexicano', 'symbol' => 'MXN', 'exchange_rate' => 20.0
'id'=>6,'name' => 'Peso Argentino', 'symbol' => 'ARS', 'exchange_rate' => 100.0
'id'=>7,'name' => 'Franco Suizo', 'symbol' => 'CHF', 'exchange_rate' => 0.92
'id'=>8,'name' => 'Dólar Canadiense', 'symbol' => 'CAD', 'exchange_rate' => 1.25
'id'=>9,'name' => 'Yuan Chino', 'symbol' => '¥', 'exchange_rate' => 6.5
'id'=>10,'name' => 'Real Brasileño', 'symbol' => 'BRL', 'exchange_rate' => 5.4


📦 Producto:

'id'=>1,'name' => 'Producto A', 'description' => 'Descripción del producto A', 'price' => 100.0, 'divisa_id' => 1, 'tax_cost' => 5.0, 'manufacturing_cost' => 50.0
'id'=>2,'name' => 'Producto B', 'description' => 'Descripción del producto B', 'price' => 150.0, 'divisa_id' => 2, 'tax_cost' => 10.0, 'manufacturing_cost' => 80.0
'id'=>3,'name' => 'Producto C', 'description' => 'Descripción del producto C', 'price' => 200.0, 'divisa_id' => 3, 'tax_cost' => 15.0, 'manufacturing_cost' => 100.0
'id'=>4,'name' => 'Producto D', 'description' => 'Descripción del producto D', 'price' => 250.0, 'divisa_id' => 4, 'tax_cost' => 20.0, 'manufacturing_cost' => 120.0
'id'=>5,'name' => 'Producto E', 'description' => 'Descripción del producto E', 'price' => 300.0, 'divisa_id' => 5, 'tax_cost' => 25.0, 'manufacturing_cost' => 150.0
'id'=>6,'name' => 'Producto F', 'description' => 'Descripción del producto F', 'price' => 350.0, 'divisa_id' => 6, 'tax_cost' => 30.0, 'manufacturing_cost' => 170.0
'id'=>7,'name' => 'Producto G', 'description' => 'Descripción del producto G', 'price' => 400.0, 'divisa_id' => 7, 'tax_cost' => 35.0, 'manufacturing_cost' => 200.0
'id'=>8,'name' => 'Producto H', 'description' => 'Descripción del producto H', 'price' => 450.0, 'divisa_id' => 8, 'tax_cost' => 40.0, 'manufacturing_cost' => 220.0
'id'=>9,'name' => 'Producto I', 'description' => 'Descripción del producto I', 'price' => 500.0, 'divisa_id' => 9, 'tax_cost' => 45.0, 'manufacturing_cost' => 250.0
'id'=>10,'name' => 'Producto J', 'description' => 'Descripción del producto J', 'price' => 550.0, 'divisa_id' => 10, 'tax_cost' => 50.0, 'manufacturing_cost' => 280.0


📦 Relación Producto-Divisa:

'id'=>1,'producto_id' => 1, 'divisa_id' => 1, 'price' => 100.0
'id'=>2,'producto_id' => 1, 'divisa_id' => 2, 'price' => 85.0
'id'=>3,'producto_id' => 1, 'divisa_id' => 3, 'price' => 110.0
'id'=>4,'producto_id' => 2, 'divisa_id' => 1, 'price' => 150.0
'id'=>5,'producto_id' => 2, 'divisa_id' => 2, 'price' => 127.5
'id'=>6,'producto_id' => 2, 'divisa_id' => 3, 'price' => 165.0
'id'=>7,'producto_id' => 3, 'divisa_id' => 1, 'price' => 200.0
'id'=>8,'producto_id' => 3, 'divisa_id' => 2, 'price' => 170.0
'id'=>9,'producto_id' => 3, 'divisa_id' => 3, 'price' => 220.0
'id'=>10,'producto_id' => 4, 'divisa_id' => 1, 'price' => 250.0

```


## 🔐 Seguridad
Esta aplicación implementa autenticación basada en JWT (JSON Web Tokens) usando la biblioteca tymon/jwt-auth. 
A continuación, algunos puntos clave para tener en cuenta en cuanto a la seguridad:

🔸 Se generó una clave secreta única para firmar los tokens JWT con el comando: php artisan jwt:secret

🔸 Los tokens se generan al iniciar sesión y deben ser enviados en cada solicitud protegida.


## 📁 Arquitectura del proyecto
```bash
app/
├── Http/       <- Capa de presentación  (Controllers, Requests)
├── Models/     <- Capa de dominio (Modelos de datos)
├── Services/   <- Capa de lógica de negocio
```