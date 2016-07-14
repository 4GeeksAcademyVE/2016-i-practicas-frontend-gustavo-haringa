<?php

$nombre=5;
if (is_numeric($nombre)){
echo " $nombre es un numero\n";
}else
echo "no es un numero \n";
$casa = trim(fgets(STDIN));

$cadenas = array('KjgWZC', 'arf12');
foreach ($cadenas as $caso_prueba) {
    if (ctype_alpha($caso_prueba)) {
        echo "La cadena $caso_prueba consiste completamente de letras.\n";
    } else {
        echo "La cadena $caso_prueba no consiste completamente de letras.\n";
    }
}

echo " $casa";
?>