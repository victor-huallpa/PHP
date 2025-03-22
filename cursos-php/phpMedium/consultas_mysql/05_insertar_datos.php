<?php
/*
Consulta para Insertar Datos
Para insertar datos o registros en una tabla, se utiliza la siguiente consulta:

INSERT INTO nombre_tabla (nombre_columna1, nombre_columna2, nombre_columna3) VALUES ('valor1', 'valor2', 'valor3');

Explicación de la Consulta
INSERT: Indica que se van a insertar datos en la tabla.

INTO: Especifica la tabla en la que se agregarán los datos.

nombre_tabla: Es el nombre de la tabla que deseas rellenar con datos.

(nombre_columna1, nombre_columna2, nombre_columna3):

    Estos son los nombres de las columnas existentes en la tabla que se llenarán con datos.
    Es importante que la cantidad de columnas especificadas coincida con la cantidad de valores que se van a insertar.
    VALUES: Indica que a continuación se proporcionarán los valores o datos a ingresar en la tabla. Esto se hace entre paréntesis ().

('valor1', 'valor2', 'valor3'):

    Estos son los valores que se insertarán en las columnas especificadas.
    Asegúrate de que la cantidad de valores coincida con la cantidad de columnas seleccionadas para llenar.

Ejemplo
Si tienes una tabla llamada usuarios con las columnas nombre, apellido y email, la consulta para insertar un nuevo usuario sería:

INSERT INTO usuarios (nombre, apellido, email) VALUES ('Juan', 'Pérez', 'juan.perez@example.com');

Notas Adicionales
Comillas: Asegúrate de usar comillas simples para los valores de tipo texto. Los valores numéricos no necesitan comillas.

Sintaxis: No debe haber una coma después del último valor en la lista de valores.

Validación: Es recomendable validar los datos antes de insertarlos en la base de datos para evitar errores y mantener la integridad de los datos.

Resumen
Esta documentación proporciona una guía clara sobre cómo insertar datos en una tabla SQL, explicando cada parte de la consulta y proporcionando un ejemplo práctico. Asegúrate de seguir las convenciones de sintaxis y de validar los datos antes de realizar la inserción.
*/