<?php
/*
Una funcion cripto grafica hash es un algoritmo matematico que nos ayuda a transformar cualquier
bloque arbitrario de datos en una nueva serie de caracteres con una longitud fija independiente de
la longitud de datos de entrada

*/

#varaibles
$clave1 = "HelloWorld123";

#funciones de encriptado
echo md5($clave1);// esta funcion encripta el dato en numeros y letras md5(parametro a encriptar)
echo '<br>';
echo sha1($clave1);// identica al md5 pero estabes se le encripta con mas careacteres entre letras y numeros
echo '<br>';
/*
NOTA: actaulmente ya no se usa estar fucniones de encriptado ya que las computadoras actuales teinen la 
capacidad de vulnerar muy facilmente estas encriptaciones
*/


#funcion HASH con un foreach
// hash('forma de encriptado segun las 60 formas que tiene','valor a encriptar')

foreach (hash_algos() as $clave => $algoritmos){
    echo $clave.' '.$algoritmos.' '. hash($algoritmos,$clave1);
    echo '<br>';
}
echo '<br>';
echo '<br>';
echo '<br>';


/*
NOTA: todas estas forams de encriptado que tiene hash no son cambiantes con el teimpo y es por ello que 
se pueden llegar avulnerar, y en caso de contrasenias no se recomeinda este tiepo de encriptado
*/

#funcion PASWORD_HASH

$clave_encrip = password_hash($clave1,PASSWORD_DEFAULT); // se manda dos parametros el primero el el valor a encripta y el segundo el algoritmo de encirptamiento que son dos
echo '<br>';
echo password_hash($clave1,PASSWORD_BCRYPT); // este contiene otros parametros que se le pueden a;adir con el cost
echo '<br>';
echo password_hash($clave1,PASSWORD_BCRYPT,["cost"=>12]); // este contiene otros parametros que se le pueden a;adir con el cost
//el cost depende del nivel de proceasmiento de datos del servidor 
//tambien existe el parametro salt, pero a partir de php 7.5 ya no se recomienda ponerle un valor fijo yaq ue por default se coloca el correcto

#funcion para verificar si un hash conicide con la clave ingresada

echo '<br>';
echo '<br>';
echo password_verify($clave1,$clave_encrip);//retornara 0 o 1 dependiendo de la veracidad 1 verdadere y 0 falso
echo '<br>';
echo '<br>';

#ejemplo de validacion
if(password_verify($clave1,$clave_encrip)){
    echo "Bienvenido la contrasenia coinside";
}else{
    echo 'lo siento la contrasenia introducida es incorracta';
}

/*
LINKS:
pasword_has: https://www.php.net/manual/es/function.password-hash.php
pasword_verify: https://www.php.net/manual/es/function.password-verify.php
*/




