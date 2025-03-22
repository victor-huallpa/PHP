<?

/*
Consulta para Actualizar Datos
Para actualizar datos en una tabla, se utiliza la siguiente consulta:

UPDATE nombre_tabla SET nombre_columna = 'valor_nuevo', nombre_columna1 = 'valor_nuevo1' WHERE condicion;

Explicación de la Consulta
UPDATE: Indica que se van a actualizar registros en la tabla.

nombre_tabla: Especifica el nombre de la tabla que deseas actualizar. Debes 
              reemplazar nombre_tabla con el nombre real de la tabla en tu base de 
              datos.

SET: Indica que a continuación se especificarán las columnas que se actualizarán y  
     sus nuevos valores.

nombre_columna: Es el nombre de la columna que se actualizará. Puedes incluir 
                múltiples columnas separadas por comas.

=: Este signo de igual indica que a continuación se proporcionará el nuevo valor que 
   tomará la columna.

valor_nuevo: Este es el nuevo valor que se asignará a la columna especificada. Debes 
             reemplazarlo con el valor real que deseas establecer.

WHERE: Es importante incluir una cláusula WHERE para especificar qué registros se 
       deben actualizar. Sin esta cláusula, todos los registros de la tabla se 
       actualizarán, lo que puede no ser lo que deseas.

condicion: Aquí se especifica la condición que deben cumplir los registros para ser 
           actualizados. Por ejemplo, podrías usar id = 1 para actualizar solo el 
           registro con un ID específico.

Ejemplo
Si tienes una tabla llamada usuarios y deseas actualizar el apellido de un usuario con un ID específico, la consulta podría verse así:

UPDATE usuarios SET apellido = 'Gómez' WHERE id = 1;

Notas Adicionales
Precaución con la cláusula WHERE: Siempre asegúrate de incluir una cláusula WHERE para evitar actualizar todos los registros de la tabla accidentalmente.

Validación de Datos: Es recomendable validar los datos antes de realizar la actualización para evitar errores y mantener la integridad de los datos.

Transacciones: Si estás realizando múltiples actualizaciones, considera usar transacciones para asegurar que todas las actualizaciones se realicen correctamente.

Resumen
Esta documentación proporciona una guía clara sobre cómo actualizar datos en una tabla SQL, explicando cada parte de la consulta y proporcionando ejemplos prácticos. Asegúrate de utilizar la sintaxis correcta y de considerar el uso de condiciones para especificar qué registros se deben actualizar.
*/