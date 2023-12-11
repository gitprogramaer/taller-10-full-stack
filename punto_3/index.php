<?php

// Solicitar al usuario que ingrese dos números
echo "Ingrese el primer número: ";
$numero1 = floatval(readline());

echo "Ingrese el segundo número: ";
$numero2 = floatval(readline());

// Calcular la suma
$suma = $numero1 + $numero2;

// Mostrar el resultado
echo "La suma de $numero1 y $numero2 es: $suma\n";

?>