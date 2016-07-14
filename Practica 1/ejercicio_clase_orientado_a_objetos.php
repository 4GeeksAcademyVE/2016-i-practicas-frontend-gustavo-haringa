<?php

//setters o getters
//new para nuevo objeto osea $qt= new contacto
class Contacto{
	
	private $nombre;
	private $apellido;
	private $numero;

	public function __construct(){
		$this->nombre="";
		$this->apellido="";
		$this->numero="";
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($apellido){
		$this->apellido=$apellido;
	}
	public function getApellido(){
		return $this->apellido;
	}
	public function setNumero($numero){
		$this->numero=$numero;
	}
	public function getNumero(){
		return $this->numero;
	}
}

$contacto= new Contacto();
echo "Ingrese Nombre: ";
$nombre=trim(fgets(STDIN));
$contacto->setNombre($nombre);
echo "Ingrese Apellido: ";
$apellido=trim(fgets(STDIN));
$contacto->setApellido($apellido);
echo "Ingrese Numero de Telefono: ";
$numero=trim(fgets(STDIN));
$contacto->setNumero($numero);
//$contacto->numero="555-55-55";

echo "Nombre:".$contacto->getNombre()."\n";
echo "Apellido: ".$contacto->getApellido()."\n";
echo "Telefono: ".$contacto->getNumero()."\n";

var_dump($contacto);


$Contac=array("");


for($i=1;$i<=3;$i++){
		echo "Ingrese Nombre: ";
		$nombre=trim(fgets(STDIN));
		$contacto->setNombre($nombre);
		echo "Ingrese Apellido: ";
		$apellido=trim(fgets(STDIN));
		$contacto->setApellido($apellido);
		echo "Ingrese Numero de Telefono: ";
		$numero=trim(fgets(STDIN));
		$contacto->setNumero($numero);
		$Contac[]=$contacto->getNombre()." ".$contacto->getApellido()." ".$contacto->getNumero();
}


for($k=1;$k<=3;$k++){
	echo " ".$CONTACTO[$k]."\n";
}


?>