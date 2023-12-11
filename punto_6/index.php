<?php
// Solicitar al usuario su nombre
echo "Ingrese su nombre: ";
$nombre = readline();

// Solicitar al usuario su edad
echo "Ingrese su edad: ";
$edad = intval(readline());

// Verificar si es mayor de edad
if ($edad >= 18) {
    echo "Hola, $nombre. Eres mayor de edad.\n";
} else {
    echo "Hola, $nombre. Eres menor de edad.\n";
}
?>