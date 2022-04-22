<?php

require_once "./conexion.php";
class conexion extends config{
    public $mysqly;

public function __construct(){

   //Intento de conexion
$conect = mysqli_connect($this->server,$this->usuario,$this->contrasena,$this->nombrebd);
$conect->set_charset("utf8");

//Revisar que estamos conectados
if($conect === false){
    die('La pagina no se pudo contectar a la BD: '.mysqli_connect_error());
}else{
    //var_dump('Conectado con exito ala BD');


} 

$this->mysqly = $conect;
    
}//termina constructor

public function desconet() {
     mysqli_close($this->mysqly);
     //var_dump("Se desconecto de la bd");
}



}

/*
$objetoprueba = new conexion();
//Muestra objeto y elemontos ordenados en cascada
echo "<pre>".print_r($objetoprueba,true)."</pre>";

$objetoprueba->desconet();
*/



?>