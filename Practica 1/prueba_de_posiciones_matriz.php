<?php
$Matriz=array();

for($i=0;$i<=3;$i++){
	for($k=0;$k<=3;$k++){
		
		$Matriz[$k][$i]='';

	}
}
$c=0;
	$Matriz[1][0]='Asunto';
	$Matriz[2][0]='Fecha ';
	$Matriz[3][0]='Clave';
for($i=0;$i<=3;$i++){
	echo "\n";
	for($k=1;$k<=3;$k++){
		if($i==0&&$k==0){

		}else{


			//echo " posicion: $Matriz($i)($k)"."\n";
			if($i==0)
			echo $i.$k."  ".$Matriz[$k][$i]."   ";
			else{
				
			echo $i.$k."  gustavo  $c ".$Matriz[$k][$i];
			}
		}
	}
	$c++;
}



?>