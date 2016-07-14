<?php
class Asuntos{
	
	private $asuntos;
	private $estado;
	private $prioridad;
	public function __construct(){
		$this->asuntos="";
		$this->$estado="";
		$this->$prioridad="";
	}
	public function setAsuntos($asuntos){
		$this->asuntos=$asuntos;
	}
	public function getAsuntos(){
		return $this->asuntos;
	}
	public function setEstado($estado){
		$this->estado=$estado;
	}
	public function getEstado(){
		$this->estado;
	}
	public function setPriori($priorida_d){
		$this->prioridad=$prioridad;
	}
	public function getPriori(){
		$this->prioridad;
	}
}

class Funciones{
	public function Menu(){
	echo "#############################################"."\n";
	echo "#                                           #"."\n";
	echo "#    1.-Agregar Tarea.                      #"."\n";
	echo "#    2.-Eliminar Tarea.                     #"."\n";
	echo "#    3.-Editar Tarea.                       #"."\n";
	echo "#    4.-Mostrar Tareas.                     #"."\n";
	echo "#    5.-Mostrar Tareas por Fecha.           #"."\n";
	echo "#    6.-Mostrar Tareas por Prioridad.       #"."\n";
	echo "#    7.-Salir.                              #"."\n";
	echo "#                                           #"."\n";
	echo "#############################################"."\n";
	}
	public function Fecha(){
		do{
			echo "dia:";$dia=trim(fgets(STDIN));
			echo "mes:";$mes=trim(fgets(STDIN));
			echo "ano:";$año=trim(fgets(STDIN));
			$valfecha=checkdate($mes,$dia,$año);
			if($año<=1970){
				$valfecha=0;
			}
		}while($valfecha==0);
		$fechaguardada=mktime(0, 0, 0, $mes, $dia, $año);
		$FechaDefinitiva=date('d/m/Y', $fechaguardada);
		return $FechaDefinitiva;
	}
	public function FechaLimite(){
		do{
			echo "dia:";$dia=trim(fgets(STDIN));
			echo "mes:";$mes=trim(fgets(STDIN));
			echo "ano:";$año=trim(fgets(STDIN));
			$valfecha=checkdate($mes,$dia,$año);
			if($año<=1970){
				$valfecha=0;
			}
		}while($valfecha==0);
		$fechaguardada=mktime(0, 0, 0, $mes, $dia, $año);
		$FechaLimite=date('d/m/Y', $fechaguardada);
		return $FechaLimite;
	}
	public function MostrarArreglo($arreglo,$i){
		$matriz=$arreglo;
		for($x=0;$x<=$i;$x++){
			echo " ".$matriz[$x]->$FechaDefinitiva.$FechaLimite.getAsuntos().getPriori().getEstado();	
		}	
	}
	public function EliminarTarea($arreglo,$i,$k){
		$men= new Funciones();
		$men->MostrarArreglo();
		echo "\n Selecione la Tarea que desea eliminar. \n";
		$DatoTeclado=trim(fgets(STDIN));
		

		}
	public function ArregloPrioridad($arreglo,$i,$k){
		$matriz=$arreglo;
		for($x=0;$x<=$i;$x++){
			for($y=0;$y<=$k;$y++){
				echo " ".$matriz[$y][$x];
			}
		}
	}
	public function ArregloFecha($arreglo,$i,$k){
		$matriz=$arreglo;
		for($x=0;$x<=$i;$x++){
			for($y=0;$y<=$k;$y++){
				echo " ".$matriz[$y][$x];
			}
		}
	}
}
/*$f = new Funciones();
$f->IngresoAsuntos();*/



/*$qt= new Asuntos();
echo "Ingrese el Asunto: ";
$Asunto_s=trim(fgets(STDIN));
$qt->setAsuntos($Asunto_s);

echo "Su asunto:".$qt->getAsuntos();
*/
?>