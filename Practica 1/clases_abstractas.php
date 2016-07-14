<?php
abstract class Evento{
	abstract function agregar();
	abstract function mostrar();
	abstract function editar();
}

class Estudiante extends Evento{
	private $nombre;
	private $apellido;
	function __construct(){}
	public function agregar(){}
	public function mostrar(){}
	public function editar(){}
}

class Estudiante2 extends Estudiante{
	public function __construct(){}
	
}

$est = new Estudiante2();
$est->agregar();





?>