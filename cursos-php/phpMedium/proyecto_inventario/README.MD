# Proyecto de Sitio Web de Inventario

## Estructura del Proyecto
El proyecto contará con la siguiente estructura de directorios y archivos necesarios para implementar un sistema de inventario eficiente:

```
proyecto_inventario/
|-- index.php
|-- img/
|-- inc/
|-- js/
|-- php/
|-- css/
|-- views/
```

### Descripción de las Carpetas y Archivos

1. **index.php**
   - Archivo principal del proyecto.
   - Es el primer archivo que los servidores leen por defecto (como `index.php` o `index.html`). Este archivo actuará como el punto de entrada al sistema.

2. **img/**
   - Contiene todas las imágenes necesarias para el proyecto, como logotipos, imágenes de productos, y otros elementos visuales.

3. **inc/**
   - Incluye archivos reutilizables como cabeceras, pie de página, y configuraciones globales que serán utilizados en diferentes partes del sistema.

4. **js/**
   - Almacena todos los scripts JavaScript necesarios, como funciones para la validación de formularios, gestión de eventos y otras interacciones dinámicas del sistema.

5. **php/**
   - Contiene los archivos PHP que manejarán la lógica del backend, como controladores, modelos para la base de datos y funciones específicas del sistema.

6. **css/**
   - Guarda los estilos personalizados en CSS. Aunque utilizaremos el framework **Bulma**, aquí podemos agregar personalizaciones para adaptar el diseño a nuestras necesidades.

7. **views/**
   - Carpeta donde se alojarán las vistas del sistema. Estas vistas serán los archivos que representen las interfaces de usuario y estarán conectadas al backend.

## CRUD con Base de Datos MySQL

Se implementará un CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar los datos del inventario. Los datos estarán almacenados en una base de datos MySQL.

### Tablas Principales de la Base de Datos

#### Tabla: `productos`
| Campo            | Tipo        | Descripción                      |
|------------------|-------------|----------------------------------|
| `id`             | INT         | Identificador único.             |
| `nombre`         | VARCHAR(100)| Nombre del producto.             |
| `descripcion`    | TEXT        | Descripción detallada.           |
| `precio`         | DECIMAL(10,2)| Precio del producto.             |
| `stock`          | INT         | Cantidad disponible.             |
| `imagen`         | VARCHAR(255)| Ruta de la imagen del producto.  |

#### Tabla: `usuarios`
| Campo            | Tipo        | Descripción                      |
|------------------|-------------|----------------------------------|
| `id`             | INT         | Identificador único.             |
| `nombre`         | VARCHAR(100)| Nombre del usuario.              |
| `email`          | VARCHAR(150)| Correo electrónico.              |
| `password`       | VARCHAR(255)| Contraseña encriptada.           |
| `rol`            | ENUM        | Rol del usuario (admin/usuario). |

## Uso del Framework Bulma

El diseño del sistema se realizará utilizando el framework CSS **Bulma**. Este framework ofrece componentes predefinidos que permiten crear interfaces modernas y responsivas con facilidad.

### Integración de Bulma
1. Descargamos o enlazamos Bulma desde un CDN en el archivo principal `index.php`:
   ```html
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
   ```

2. Utilizamos sus clases para dar estilo a los formularios, botones, tablas y demás elementos del sistema.

## Plan de Trabajo
1. **Configuración inicial:** Crear la estructura de carpetas y el archivo `index.php`.
2. **Diseño del frontend:** Implementar el diseño de las vistas usando Bulma.
3. **Configuración de la base de datos:** Crear las tablas necesarias para el CRUD.
4. **Implementación del backend:**
   - Configurar el acceso a la base de datos en PHP.
   - Implementar la lógica de crear, leer, actualizar y eliminar datos.
5. **Pruebas y ajustes:** Verificar el correcto funcionamiento del sistema.

## Notas Finales
Este proyecto está diseñado para ser escalable, lo que permite agregar nuevas funcionalidades como gestión de usuarios, reportes de inventario, y más.

¡Manos a la obra!
