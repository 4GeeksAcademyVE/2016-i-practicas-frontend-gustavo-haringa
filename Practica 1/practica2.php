<?php
function restar($num,$numa){
return $num-$numa;
}
function multiplicar($num,$numa){
return $num*$numa;
}
function dividir($num,$numa){
return $num/$numa;
}

$perilla= 5;
$loco= 6;


echo "La resta es: ".restar($perilla,$loco)."\n";
echo "La multiplicacion es: ".multiplicar($perilla,$loco)."\n";
echo "La division es: ".dividir($perilla,$loco)."\n";

?>