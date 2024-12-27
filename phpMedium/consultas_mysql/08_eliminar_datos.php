<?php
/*
Consulta para Eliminar Datos
Para eliminar datos de una tabla, se utiliza la siguiente consulta:

DELETE FROM nombre_tabla WHERE nombre_columna = 'valor_coincidencia';

Explicación de la Consulta
DELETE: Indica que se van a eliminar registros de la tabla.

FROM: Especifica la tabla de la que se eliminarán los datos. A continuación, se 
      menciona el nombre de la tabla.

nombre_tabla: Aquí se escribe el nombre de la tabla de la que deseas eliminar datos. 
              Debes reemplazar nombre_tabla con el nombre real de la tabla en tu 
              base de datos.

WHERE: Esta cláusula es crucial, ya que especifica la condición que deben cumplir 
       los registros para ser eliminados. Sin esta cláusula, se eliminarán todos los 
       registros de la tabla.

nombre_columna: Es el nombre de la columna que se utilizará en la evaluación de la 
                condición.

=: El signo igual indica que el valor de la columna debe ser idéntico al valor 
   especificado.

valor_coincidencia: Este es el valor que debe coincidir en nombre_columna para que  
                    el registro sea eliminado. Debes reemplazarlo con el valor real 
                    que deseas evaluar.

Ejemplo
Si tienes una tabla llamada usuarios y deseas eliminar un usuario cuyo apellido es "Pérez", la consulta podría verse así:

DELETE FROM usuarios WHERE apellido = 'Pérez';

Notas Adicionales
Precaución con la cláusula WHERE: Siempre asegúrate de incluir una cláusula WHERE para evitar eliminar todos los registros de la tabla accidentalmente. Si omites WHERE, se eliminarán todos los registros.

Validación de Datos: Es recomendable validar los datos antes de realizar la eliminación para evitar errores y mantener la integridad de los datos.

Transacciones: Si estás realizando múltiples eliminaciones, considera usar transacciones para asegurar que todas las eliminaciones se realicen correctamente.

Resumen
Esta documentación proporciona una guía clara sobre cómo eliminar datos de una tabla SQL, explicando cada parte de la consulta y proporcionando ejemplos prácticos. Asegúrate de utilizar la sintaxis correcta y de considerar el uso de condiciones para especificar qué registros se deben eliminar.
*/