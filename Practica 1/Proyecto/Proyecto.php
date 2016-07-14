<?php
require('clase_fechas.php');
$i=0;/*filas van segundo */
$k=0;/*columnas va primero*/
$Visor_Eventos=array("ID","Fecha","Fecha Limite","Asunto", "Prioridad","Estado");


do{
	$men=new Funciones();
	$men->Menu();

	echo " Ingrese una opcion: ";
	$DatoTeclado=trim(fgets(STDIN));
	switch ($DatoTeclado){
		case 1:
			$i++;
			for($k=0;$k<=5;$k++){
				if($k==0){
					$Visor_Eventos[$k][$i]=$i;
				}
				if($k==1){
					echo " Fecha\n";
					$fes_I= new Funciones();
					$Visor_Eventos[$k][$i]=$fes_I->Fecha();
				}
				if($k==2){
					echo "Fecha Limite\n";
					$fes_L= new Funciones();
					$Visor_Eventos[$k][$i]=$fes_L->FechaLimite();
				}
				if($k==3){
					$a = new Asuntos();
					echo "Ingrese el Tarea: ";
					$asuntos=trim(fgets(STDIN));
					$a->setAsuntos($asuntos);
					$Visor_Eventos[$k][$i]=$a->getAsuntos();
				}
				if($k==4){
					do{
					$c= new Asuntos();
					echo "Ingrese Prioridad. -1,2,3,4,5-\n";
					$prioridad=trim(fgets(STDIN));
					$c->setPriori($prioridad)
					$Visor_Eventos[$k][$i]=$c->getPriori()."\n";
					if($prioridad!=1||$prioridad!=2||$prioridad!=3||$prioridad!=4||$prioridad!=5){
						echo "Opcion Invalida.";
					}
					}while($prioridad!=1||$prioridad!=2||$prioridad!=3||$prioridad!=4||$prioridad!=5);
				if($k==5){
					do{
					$b= new Asuntos();
						echo "Ingrese estado.\n 1.-Pendiente.\n 2.-Realizada.\n";
						$DatoTeclado=trim(fgets(STDIN));
						switch ($DatoTeclado){
							case 1:
								$estado="Pendiente";
								$b->setEstado($estado);
								$Visor_Eventos[$k][$i]=$b->getEstado()."\n";
							break;
							case 2:
								$estado="Realizada";
								$b->setEstado($estado);
								$Visor_Eventos[$k][$i]=$b->getEstado()."\n";
							break;
							default:
								echo "Opcion Invalida.";
							break;
						}
					}while($DatoTeclado!=1||$DatoTeclado!=2);
				}
			}
			$respuesta='s';
			break;
		case 2:
			
			break;
		case 3:
			
			break;
		case 4:
			$Mos_T= new Funciones();
			$Mos_T->MostrarArreglo($Visor_Eventos,$i);
			break;
		case '5':
			
			break;
		case 6:
			
			break;
		case 7:
			echo " Gracias por trabajar conmigo";
			$respuesta="n";
			break;
		default:
			echo " Opcion invalida. \n";
			break;
	}

}while($respuesta=='s'||$respuesta=='S');



?>