<?php
$Juego_pa = array("","Papel","Tijera","Piedra","Spock","Lagarto","Ganadas-Perdidas","Salir");
$tamano_arreglo=count($Juego_pa);
$tamano_arreglo=$tamano_arreglo-1;
$Maquina=0;
$Usuario=0;

do{
for($i=1;$i<=$tamano_arreglo;$i++){
	echo " $i.-".$Juego_pa[$i]."\n";
}
echo "Opcion:";
$DatoTeclado=trim(fgets(STDIN));
switch ($DatoTeclado) {
	case '1':
		do{
			$valor=array_rand($Juego_pa,1);
			if($valor!=0&&$valor!=6&&$valor!=7){
				if($valor==1){
					echo " ".$Juego_pa[1]." vs ".$Juego_pa[$valor]."\n";
					echo " Empate.\n";
				}
				if($valor==2){
					echo " ".$Juego_pa[1]." vs ".$Juego_pa[$valor]."\n";
					echo " Tijera corta Papel. Usted a perdido.\n";
					$Maquina++;
				}
				if($valor==3){
					echo " ".$Juego_pa[1]." vs ".$Juego_pa[$valor]."\n";
					echo " Papel tapa Piedra. Usted a Ganado.\n";
					$Usuario++;
				}
				if($valor==4){
					echo " ".$Juego_pa[1]." vs ".$Juego_pa[$valor]."\n";
					echo " Papel desautoriza spock. Usted a Ganado.\n";
					$Usuario++;
				}
				if($valor==5){
					echo " ".$Juego_pa[1]." vs ".$Juego_pa[$valor]."\n";
					echo " Lagarto devora Papel. Usted a Perdido.\n";
					$Maquina++;
				}	
			}
		}while($valor==0||$valor==6||$valor==7);
		$respuesta=0;
		break;
	case '2':
		do{
			$valor=array_rand($Juego_pa,1);
			if($valor!=0&&$valor!=6&&$valor!=7){
				if($valor==1){
					echo " ".$Juego_pa[2]." vs ".$Juego_pa[$valor]."\n";
					echo " Tijera corta Papel. Usted a Ganado.\n";
					$Usuario++;
				}
				if($valor==2){
					echo " ".$Juego_pa[2]." vs ".$Juego_pa[$valor]."\n";
					echo " Empate";
				}
				if($valor==3){
					echo " ".$Juego_pa[2]." vs ".$Juego_pa[$valor]."\n";
					echo " Piedra aplasta a Tijeras. Usted a Perdido.\n";
					$Maquina++;
				}
				if($valor==4){
					echo " ".$Juego_pa[2]." vs ".$Juego_pa[$valor]."\n";
					echo " Spock rompe Tijeras. Usted a Perdido.\n";
					$Maquina++;
				}
				if($valor==5){
					echo " ".$Juego_pa[2]." vs ".$Juego_pa[$valor]."\n";
					echo " Tijeras decapitan Lagarto. Usted a Ganado.\n";
					$Usuario++;
				}	
			}
		}while($valor==0||$valor==6||$valor==7);
		$respuesta=0;
		break;
	case '3':
		do{
			$valor=array_rand($Juego_pa,1);
			if($valor!=0&&$valor!=6&&$valor!=7){
				if($valor==1){
					echo " ".$Juego_pa[3]." vs ".$Juego_pa[$valor]."\n";
					echo " Papel tapa Piedra. Usted a Perdido.\n";
					$Maquina++;
				}
				if($valor==2){
					echo " ".$Juego_pa[3]." vs ".$Juego_pa[$valor]."\n";
					echo " Piedra aplasta a Tijeras. Usted a Ganado.\n";
					$Usuario++;
				}
				if($valor==3){
					echo " ".$Juego_pa[3]." vs ".$Juego_pa[$valor]."\n";
					echo " Empate.\n";
				}
				if($valor==4){
					echo " ".$Juego_pa[3]." vs ".$Juego_pa[$valor]."\n";
					echo " Spock vaporiza Piedra. Usted a Perdido.\n";
					$Maquina++;
				}
				if($valor==5){
					echo " ".$Juego_pa[3]." vs ".$Juego_pa[$valor]."\n";
					echo " Piedra aplasta Lagarto. Usted a Ganado.\n";
					$Usuario++;
				}	
			}
		}while($valor==0||$valor==6||$valor==7);
		$respuesta=0;
		break;
	case '4':
		do{
			$valor=array_rand($Juego_pa,1);
			if($valor!=0&&$valor!=6&&$valor!=7){
				if($valor==1){
					echo " ".$Juego_pa[4]." vs ".$Juego_pa[$valor]."\n";
					echo " Papel desautoriza Spock. Usted a Perdido.\n";
					$Maquina++;
				}
				if($valor==2){
					echo " ".$Juego_pa[4]." vs ".$Juego_pa[$valor]."\n";
					echo " Spock rompe Tijeras. Usted a Ganado.\n";
					$Usuario++;
				}
				if($valor==3){
					echo " ".$Juego_pa[4]." vs ".$Juego_pa[$valor]."\n";
					echo " Spock vaporiza Piedra. Usted a Ganado.\n";
					$Usuario++;
				}
				if($valor==4){
					echo " ".$Juego_pa[4]." vs ".$Juego_pa[$valor]."\n";
					echo " Empate.\n";
				}
				if($valor==5){
					echo " ".$Juego_pa[4]." vs ".$Juego_pa[$valor]."\n";
					echo " Lagarto envenena a Spock. Usted a Perdido\n";
					$Maquina++;
				}	
			}
		}while($valor==0||$valor==6||$valor==7);
		$respuesta=0;
		break;
	case '5':
		do{
			$valor=array_rand($Juego_pa,1);
			if($valor!=0&&$valor!=6&&$valor!=7){
				if($valor==1){
					echo " ".$Juego_pa[5]." vs ".$Juego_pa[$valor]."\n";
					echo " Lagarto devora Papel. Usted a Ganado.\n";
					$Usuario++;
				}
				if($valor==2){
					echo " ".$Juego_pa[5]." vs ".$Juego_pa[$valor]."\n";
					echo " Tijeras decapitan Lagarto. Usted a Perdido.\n";
					$Maquina++;
				}
				if($valor==3){
					echo " ".$Juego_pa[5]." vs ".$Juego_pa[$valor]."\n";
					echo " Piedra aplasta Lagarto. Usted a Perdido.\n";
					$Maquina++;
				}
				if($valor==4){
					echo " ".$Juego_pa[5]." vs ".$Juego_pa[$valor]."\n";
					echo " Lagarto envenena a Spock. Usted a Ganado\n";
					$Usuario++;
				}
				if($valor==5){
					echo " ".$Juego_pa[5]." vs ".$Juego_pa[$valor]."\n";
					echo " Empate.\n";
				}	
			}
		}while($valor==0||$valor==6||$valor==7);
		$respuesta=0;
		break;
	case '6':
		echo " Ganadas :".$Usuario."\n";
		echo " Perdidas :".$Maquina."\n";
		$respuesta=0;
		break;
	case '7':
		echo " Gracias por jugar";
		$respuesta=1;
		break;
	default:
		echo "opcion Invalida\n";# code...
		break;
}

}while(!is_numeric($DatoTeclado)||$respuesta==0);


?>