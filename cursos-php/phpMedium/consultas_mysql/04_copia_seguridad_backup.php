<?php
/*
Una copia de seguridad es un BACKUP, y en caso de base de datos es muy importante 
crear backups para tener copias de seguridad de una base de datos en caso de que 
ocurra algun error o falla en la base de datos, existen tres tipos de backups

-backup completa: este incluye una copia de seguridad de toda la base de datos
-backup incremental: este inclue copias de seguridad desde la ultima actuliazacion o copia de seguridad
-backup diferencial: incluye copia de segiridad desde el ultimo backup completa


en los gestores de base de datos se puede hacer de forma grafica pero en nuestro caso
lo hacemos desde comandos

mysqldump -u usuario -p nombre_de_la_base_de_datos > nombre_de_la_copia.sql


*/