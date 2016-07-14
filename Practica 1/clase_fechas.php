<?php
class Asuntos{
	
	private $Asunto_s;

	public function __construct(){
		$this->Asunto_s="";
	}
	public function setAsuntos($Asunto_s){
		$this->Asunto_s=$Asunto_s;
	}
	public function getAsuntos(){
		return $this->Asunto_s;
	}
}

class Funciones{
	
	public function Fecha(){
		do{
			echo "dia:";$dia=trim(fgets(STDIN));
			echo "mes:";$mes=trim(fgets(STDIN));
			echo "ano:";$año=trim(fgets(STDIN));
			$valfecha=checkdate($mes,$dia,$año);
		}while($valfecha==0);
		$fechaguardada=mktime(0, 0, 0, $mes, $dia, $año);
		$FechaDefinitiva=date('d/m/Y', $fechaguardada);
		return $FechaDefinitiva;
	}
	public function IngresoAsuntos(){
		$a = new Asuntos();
		echo "Ingrese el Asunto: ";
		$Asunto_s=trim(fgets(STDIN));
		$a->setAsuntos($Asunto_s);
		echo "Su asunto:".$a->getAsuntos();

		//return $a;
	}

	
}
$f = new Funciones();
$f->IngresoAsuntos();



/*$qt= new Asuntos();
echo "Ingrese el Asunto: ";
$Asunto_s=trim(fgets(STDIN));
$qt->setAsuntos($Asunto_s);

echo "Su asunto:".$qt->getAsuntos();
*/
?>