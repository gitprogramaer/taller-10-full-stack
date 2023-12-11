<?php
$tipoAfiliacion = readline("Ingrese el tipo de afiliación (A o B): ");

$numeroPersonas = readline("Ingrese el número de personas: ");

$costoPorPersona = 25000;

$costoTotal = $numeroPersonas * $costoPorPersona;

if ($tipoAfiliacion === 'A' || $tipoAfiliacion === 'B') {

    $descuento = $costoTotal * 0.3;

    $costoTotal -= $descuento;
} else {
echo "No se aplicó ningún descuento.\n";
} 
echo "El costo total es: $costoTotal\n";
?>