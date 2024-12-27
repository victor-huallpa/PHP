<?php
/*
Consulta para Seleccionar Datos
Para seleccionar datos de una tabla, se utiliza la siguiente consulta:

SELECT * FROM nombre_tabla;

Explicación de la Consulta
SELECT: Indica que se van a seleccionar columnas de la tabla. Es la instrucción que 
        inicia la consulta.

*: Este símbolo indica que se están seleccionando todas las columnas existentes en  
   la tabla. Es un comodín que representa todas las columnas.

FROM: Esta palabra clave se utiliza para especificar de qué tabla se van a obtener 
      los datos. Es como decir "de".

nombre_tabla: Aquí se escribe el nombre de la tabla de la que deseas traer los      
       datos. Debes reemplazar nombre_tabla con el nombre real de la tabla en tu    
       base de datos.

Ejemplo
Si tienes una tabla llamada usuarios, la consulta para seleccionar todos los datos de esa tabla sería:

SELECT * FROM usuarios;

Notas Adicionales
Filtrado de Resultados: Si deseas seleccionar solo ciertas columnas, puedes especificar los nombres de las columnas en lugar de usar *. Por ejemplo:

    SELECT nombre, apellido FROM usuarios;

*/