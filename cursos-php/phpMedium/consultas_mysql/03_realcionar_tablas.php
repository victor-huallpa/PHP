<?php
/*
Para relacionar tablas en este caso ya que estamos haciendo todo po lineas de comandos
se requiere alterar la tabla productos y relacionarlas con la tabla usuarios y categorias

para ello usaremos el siguiente comando;

ALTER TABLE Producto
ADD CONSTRAINT fk_categoria
FOREIGN KEY (nombre de la columna a alterar) REFERENCES nobre_tabla('columna_tabla'),
ADD CONSTRAINT fk_usuario
FOREIGN KEY ('nombre_columna_alterar) REFERENCES nombre_tabla('nombre_columna);
*/