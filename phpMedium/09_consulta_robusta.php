<?php
/*
Documentación sobre Consultas SQL Robusta

SELECT * FROM nombre_tabla 
WHERE nombre_columna = 'valor_coincidencia' 
ORDER BY nombre_columna ASC 
LIMIT 0, 3;

Explicación de la Consulta

SELECT *: Indica que se seleccionarán todas las columnas de la tabla.

FROM nombre_tabla: Especifica la tabla de la que se obtendrán los datos. Debes 
                   reemplazar nombre_tabla con el nombre real de la tabla.

WHERE nombre_columna = 'valor_coincidencia': Esta cláusula filtra los resultados 
                                             para incluir solo aquellos registros 
                                             donde nombre_columna sea igual a 
                                             valor_coincidencia. Puedes usar != para 
                                             seleccionar registros que no coincidan.

ORDER BY nombre_columna ASC/DESC: Esta cláusula ordena los resultados por 
                                  nombre_columna. Puedes usar ASC para orden 
                                  ascendente o DESC para orden descendente.

LIMIT 0, 3: Limita los resultados a 3 filas, comenzando desde el índice 0. Esto es 
            útil para la paginación.




SELECT * FROM nombre_tabla 
WHERE nombre_columna LIKE '%valor_coincidencia%' 
AND nombre_columna1 LIKE '%valor_coincidencia1%' 
ORDER BY nombre_columna ASC 
LIMIT 0, 3;

Explicación de la Consulta

SELECT *: Selecciona todas las columnas de la tabla.

FROM nombre_tabla: Especifica la tabla de la que se obtendrán los datos.

WHERE nombre_columna LIKE '%valor_coincidencia%': Filtra los resultados para incluir 
                                                  registros donde nombre_columna 
                                                  contenga valor_coincidencia. El 
                                                  uso de LIKE permite buscar 
                                                  coincidencias parciales.

AND nombre_columna1 LIKE '%valor_coincidencia1%': Agrega una condición adicional que 
                                                  también debe cumplirse. Esto 
                                                  significa que ambos criterios 
                                                  deben ser verdaderos para que un 
                                                  registro sea incluido en los 
                                                  resultados. Puedes usar OR en 
                                                  lugar de AND si deseas que al 
                                                  menos una de las condiciones sea 
                                                  verdadera.

ORDER BY nombre_columna ASC/DESC: Ordena los resultados por nombre_columna, y
                                  dependiendo de que si pongas ASC O DESC sera 
                                  asendente o desendente el ordenamiento.

LIMIT 0, 3: Limita los resultados a 3 filas, comenzando desde el índice 0, o 
            simplemente poner un numeor e inidcara la cantidad de registros a 
            mostrar.



SELECT COUNT(*) FROM nombre_tabla 
WHERE nombre_columna LIKE '%valor_coincidencia%' 
AND nombre_columna1 LIKE '%valor_coincidencia1%';

Explicación de la Consulta

SELECT COUNT(*): Esta función cuenta el número total de registros que cumplen con 
                 las condiciones especificadas en la cláusula WHERE, tomar em cuanta
                 que el signo '*' puede ser reemplazado por nombres de las columnas 
                 que tiene la tabla.

FROM nombre_tabla: Especifica la tabla de la que se contarán los registros.

WHERE nombre_columna LIKE '%valor_coincidencia%': Filtra los registros para contar 
                                                  solo aquellos donde nombre_columna 
                                                  contenga valor_coincidencia.

AND nombre_columna1 LIKE '%valor_coincidencia1%': Agrega una condición adicional 
                                                  para contar solo los registros que cumplan ambas condiciones.

NOTA: La forma en que realiza la consulta select tambien se pude hacer para lo que es
      en consultas de UPDATE y DELETE,

Resumen
Estas consultas SQL robustas permiten realizar selecciones más complejas y específicas en una base de datos. Utilizan condiciones de filtrado, ordenamiento y limitación de resultados, así como la capacidad de contar registros que cumplen con ciertos criterios. Estas consultas son una extensión de las consultas simples que se han discutido anteriormente, proporcionando más flexibilidad y control sobre los datos que se recuperan de la base de datos.
*/