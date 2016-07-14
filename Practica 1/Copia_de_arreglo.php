<?php
$array1=array ();
$array1[0][0]="Hola";
$array1[0][1]="Como";
$array1[0][2]="estas";
$array1[1][1]="Guapo";
$array2=$array1;
var_dump($array1)."\n";
var_dump($array2)."\n";
$y=count($array1);
echo " ".$y;
?>