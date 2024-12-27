<?php
/*
Consulta para Juntar Tablas
Para juntar tablas, se utiliza la siguiente consulta:

SELECT * FROM nombre_tabla
INNER JOIN nombre_tabla2 ON nombre_tabla.nombre_columna = nombre_tabla2.nombre_columna
INNER JOIN nombre_tabla3 ON nombre_tabla.nombre_columna = nombre_tabla3.nombre_columna
ORDER BY nombre_tabla.nombre_columna ASC/DESC;

Explicación de la Consulta
SELECT *: Indica que se seleccionarán todas las columnas de las tablas involucradas 
          en la consulta.

FROM nombre_tabla: Especifica la tabla principal de la que se obtendrán los datos. 
                   Debes reemplazar nombre_tabla con el nombre real de la tabla.

INNER JOIN nombre_tabla2: Esta cláusula se utiliza para unir la tabla principal 
                          (nombre_tabla) con otra tabla (nombre_tabla2). El INNER 
                          JOIN devuelve solo las filas que tienen coincidencias en 
                          ambas tablas.

ON nombre_tabla.nombre_columna = nombre_tabla2.nombre_columna:

ON: Indica que a continuación se especificará la condición de coincidencia entre las 
    tablas.
nombre_tabla.nombre_columna: Se refiere a la columna de la tabla principal que se 
                             utilizará para la coincidencia.
=: El signo igual indica que se buscarán coincidencias entre las columnas 
   especificadas.
nombre_tabla2.nombre_columna: Se refiere a la columna de la segunda tabla que debe 
                              coincidir con la columna de la tabla principal.
INNER JOIN nombre_tabla3: Se realiza otra unión con una tercera tabla 
                             (nombre_tabla3) de la misma manera que con la segunda 
                             tabla.

ORDER BY nombre_tabla.nombre_columna ASC/DESC: Esta cláusula ordena los resultados 
                                              por la columna especificada de la 
                                              tabla principal. Puedes usar ASC para 
                                              orden ascendente o DESC para orden 
                                              descendente.

Ejemplo
Si tienes tres tablas: usuarios, pedidos y productos, y deseas obtener información 
sobre los pedidos realizados por los usuarios, la consulta podría verse así:

SELECT * FROM usuarios
INNER JOIN pedidos ON usuarios.id = pedidos.usuario_id
INNER JOIN productos ON pedidos.producto_id = productos.id
ORDER BY usuarios.nombre ASC;

Notas Adicionales
INNER JOIN: Solo devuelve las filas que tienen coincidencias en ambas tablas. Si no 
            hay coincidencias, esas filas no aparecerán en el resultado.

Alias de Tablas: Para hacer las consultas más legibles, puedes usar alias para las 
                 tablas. Por ejemplo:


SELECT * FROM usuarios AS u
INNER JOIN pedidos AS p ON u.id = p.usuario_id
INNER JOIN productos AS pr ON p.producto_id = pr.id
ORDER BY u.nombre ASC;

Condiciones Adicionales: Puedes agregar condiciones adicionales en la cláusula WHERE 
                         para filtrar aún más los resultados.

Resumen
Esta documentación proporciona una guía clara sobre cómo realizar uniones de tablas 
en SQL utilizando INNER JOIN, explicando cada parte de la consulta y proporcionando 
ejemplos prácticos. Asegúrate de utilizar la sintaxis correcta y de considerar el 
uso de condiciones para especificar qué registros se deben unir.


*/