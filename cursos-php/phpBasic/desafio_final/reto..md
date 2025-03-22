# Desafío Final: Sitio Web Básico en PHP

## Descripción
Este es el desafío final después de completar la parte básica de PHP. El objetivo es aplicar los conocimientos adquiridos para construir un pequeño sitio web con características específicas.

## Requisitos del Proyecto

### Páginas del Sitio
- **index.php**: Página principal.
- **pagina2.php**: Segunda página del sitio.
- **pagina3.php**: Tercera página del sitio.
- **login.php**: Página de inicio de sesión.

### Funcionalidades Específicas
1. **Login de Usuario**:
   - Permitir que el cliente inicie sesión.
   - Mostrar el nombre de usuario en todas las páginas después del inicio de sesión.
2. **Reutilización de Cabecera y Pie de Página**:
   - Crear archivos separados para la cabecera y el pie de página.
   - Reutilizar estos archivos en las páginas `index.php`, `pagina2.php` y `pagina3.php`.
   - Excluir el uso de la cabecera y pie de página en `login.php`.
3. **Uso de AJAX**:
   - Implementar AJAX en `login.php` para gestionar el envío de datos del formulario de inicio de sesión sin recargar la página.
4. **Encriptación de Datos**:
   - Encriptar el nombre de usuario y la contraseña del cliente antes de almacenarlos o procesarlos.
5. **Conversión de Nombre de Usuario**:
   - Convertir el nombre de usuario ingresado a mayúsculas.
6. **Validación en Archivos Separados**:
   - Crear un archivo para recibir los datos del formulario.
   - Crear otro archivo para comparar y validar los datos proporcionados.
7. **Cerra Sesion**:
   - Crear un archivo donde se verifique si se decea iniciar session o cerrar seion.
   - En el archivo index teine que haber una opcion de cerrar o iniciar sesion segun 
     corresponda la accion a realizarce.

## Notas Importantes
- **Creatividad**: Usa tu imaginación, no existe una única respuesta correcta para este desafío.
- **Aplicación Práctica**: Asegúrate de aplicar lo aprendido durante el curso.

## Estructura Recomendada del Proyecto
```
/mi-sitio
├── index.php
├── pagina2.php
├── pagina3.php
├── login.php
├── layout/
│   ├── header.php
│   ├── footer.php
├── validar_datos.php
├── comparar_datos.php
├── cerrar_sesion.php

```

## Recursos Adicionales
- [Documentación de PHP](https://www.php.net/)
- [Guía de AJAX](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX)
- [Buenas Prácticas de Seguridad en PHP](https://www.php.net/manual/en/security.php)
