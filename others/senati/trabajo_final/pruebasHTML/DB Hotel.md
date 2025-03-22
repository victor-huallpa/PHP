# sistema hotel

## Lista de entidades

### PERSONAL **ED**
--id_personal **PK|UQ**
--nombres
--apellidos
--cargo
--dni **UQ**
--correo **UQ**
--celular **UQ**

### CLIENTES **ED**
--id_dni **UQ|PK**
--nombres
--apellidos
--correo **UQ**
--celular **UQ**

### HABITACIONES **ED|EC**
--id_habitacion **PK**
--tipo_habitacion 
--fecha_ocupada 
--hora_entrada
--hora_salida

### rentas/ventas **ED**
--id_venta_cantida **UQ|PK**
--can_habitaciones
--can_tohallas
--can_jaboncillos
--can_papel_higenico
--total_productos

### cajas **ED|EC**
--id_venta_cobro **PK**
--cobro_habitacion
--cobro_shampoo
--cobro_tohallas
--cobro_jaboncillos
--cobro_papel_higenico
--total_cobro
--comprobante_pago

### registros **ED|PV**
--num_registro **UQ**
--fecha_registro
--id_habitacion **FK** 
--id_cliente **FK**
--id_personal **FK**
--id_venta_cantidad **FK**
--id_venta_cobro **FK**

### cuentas_personal **ED**
--id_personal **FK**
--fecha_creacion
--tipo_cuenta 
--usuario **UQ**
--contrasena **UQ**

## Relaciones

1. un **personal** realiza muchos **registros** (1 a M)
2. un **personal** tiene una **cuentas_personal** (1 a 1)
3. un **clientes** puede tener muchos **registros** (1 a M)
4. una **habitaciones** puede tener muchos **registros** (1 a M)
5. una **rentas/ventas** solo tiene un **registros** (1 a 1)
6. una **cajas** genera un **registros** (1 a 1)


## CREAR MODELO

![Modelo Relacional](archivo.png)

## Reglas de Negocio

### personal

1. crear un personal **insert into|admin con privilegios elevados y admin solo comprivilegios, este no puede crear un personal admin admin**
2. ver a todo el personal **selet|admin con privilegios && privilegios elevados**
3. ver a un personal en especifico **selet-where|admin con privilegios && privilegios elevados**
4. eliminar personal **delete|delete-where|admin con privilegios && privilegios elevados**
5. actualizar personal **update|update-where|admin con privilegios && privilegios elevados**

### clientes

1. crear clientes **insert into|cualquiera con acceso al sistema**
2. ver a todos los clients **selet|admin con privilegios && privilegios elevados**
3. ver a un cliente en especifico **selet-where|admin con privilegios && privilegios elevados**
4. eliminar clientes **delete|delete-where|admin con privilegios elevados**
5. actualizar clientes **delete|delete-where|admin con privilegios && privilegios elevados**

### habitaciones

1. crear habitaciones **insert into|admin con privilegios && privilegios elevados**
2. ver todos las habitaciones **selet|cualquiera conacceso al sistema**
3. ver una habitacion en especifico **selet-where|cualquiera con acceso al sistema**
4. eliminar habitaciones **delete|delete-where|admin con privilegios elevados**
5. actualizar habitaciones **update|update-where|admin con privilegios && privilegios elevados**

### rentas/ventas

1. crear rentas/ventas **insert into|caulquiera con acceso al sistema(todo el personal)**
2. ver todos las rentas/ventas del dia **selet|cualquiera con acceso al sistema**
3. ver todos las rentas/ventas cualquier fecha **selet|admin con privilegios && privilegios elevados**
4. ver una renta/venta en especifico **selet-where|cualquiera con acceso al sistema**
5. eliminar rentas/ventas **delete|delete-where|admin con privilegios elevados**
6. actualizar rentas/ventas **update|update-where|admin con privilegios && privilegios elevados**

### caja

1. crear caja **insert into|caulquiera con acceso al sistema(todo el personal)**
2. ver todos las cajas **selet|personal con acceso al sistema**
3. ver una caja en especifico **selet-where|cualquiera con acceso al sistema**
4. eliminar cajas **delete|delete-where|admin con privilegios elevados**
5. actualizar cajas **update|update-where|admin con privilegios && privilegios elevados**

### registros

1. crear registros **insert into|caulquiera con acceso al sistema(el sistema lo genera)**
2. ver todos los registros del dia **selet|personal con acceso al sistema**
3. ver todos los registros de cualquier fecha **selet|selet-where|admin con privilegios && privilegios elevados**
4. ver una registro en especifico **selet-where|cualquiera con acceso al sistema**
5. eliminar registros **delete|delete-where|admin con privilegios elevados**
6. actualizar registros **update|update-where|admin con privilegios && privilegios elevados**

### cuentas_personales

1. crear cuentas_personales **insert into|admin con privilegion elevados**
2. ver todos las cuentas_personales **selet|admin con privilegios && privilegion elevados**
3. ver una cuenta_personal en especifico **selet-where|admin con privilegios && privilegion elevados**
4. eliminar cuentas_personales **delete|delete-where|admin con privilegios elevados**
5. actualizar cuentas_personales **update|update-where|admin con privilegios && privilegios elevados**

