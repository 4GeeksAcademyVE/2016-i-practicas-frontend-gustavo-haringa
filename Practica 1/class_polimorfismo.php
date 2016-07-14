<?php
/*class Estudiante{
	function __construct(){}
	public function agregar(){
		echo "Hola estoy agregando";
	}
	public function agregar($obj){
		echo "hola estoy agregando {$obj}";
	}
} asi no se ejecuta
*/
class classPoligono{
	function calculo(){
		echo "El area depende del tipo de poligono";
	}
	
}
class classCuadrado extends classPoligono{
	function calculo(){
		echo "Area de un cuadrado: a=l*l \n";
	}
}

class classRectangulo extends classPoligono{
	function calculo(){
		echo "Area de un rectangulo : a=b*h \n"
	}
}

class Calculo{
	function area(classPoligono $obj){
		$obj->calculo();
	}
}
$cuadrado= new classCuadrado();
$rectangulo = new classRectangulo();
$cal= new calculo();
$cal->area($cuadrado);
$cal->area($rectangulo);

?>