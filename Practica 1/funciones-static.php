<?php
class Functions{

	public static function sumar ($num,$num2){
		return $num+$num2;
	}
}

class Operaciones{
	public function sumar(){
		echo Functions::sumar(5,6);
	}
}


$op= new Operaciones();
$op->sumar();


/* self=buscar en mi mismo */
/* const solo es para clases  fuera de clases es define*/
?>