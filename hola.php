<?php
// Autor: Alvaro Durán <alvaroda1986@gmail.com>
// El nombre por defecto es Alvaro Duran
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print "Hola soy {$nombre}\n";
?>
