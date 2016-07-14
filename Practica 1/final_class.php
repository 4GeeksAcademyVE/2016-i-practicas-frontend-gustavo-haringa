<?php
class Prueba{
	public function saludo(){
		echo "Hola Mundo \n";
	}
	final function saludo2(){
		echo "Hola mundo 2 \n";
	}
}
//final en clase no se puede heredar se declara final class Prueba
class Prueba2 extends Prueba{

	public function saludo3(){
		echo "hola mundo 3 ";
	}
}

$pr = new Prueba2();
$pr->saludo();
$pr->saludo2();
$pr->saludo3();



?>