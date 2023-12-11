<?php
include "./optionUtlis.php";
$num1 = getNumber();
$num2 = getNumber();
$option = showMenu();

$result = operate($num1, $num2, $option);

if ($result !== null) {
    echo "El resultado es: " . $result . PHP_EOL;
}
?>

<?php

function getNumber() {
    echo "Ingrese el número: ";
    return floatval(readline());
}

function showMenu() {
    echo "----- Menú de Operaciones -----\n";
    echo "1. Sumar\n";
    echo "2. Restar\n";
    echo "3. Multiplicar\n";
    echo "4. Dividir\n";
    echo "5. Salir\n";
    echo "------------------------------\n";
    echo "Ingrese el número de la operación deseada: ";
    return intval(readline());
}

function operate($x, $y, $option) {
    switch ($option) {
        case 1:
            return add($x, $y);
        case 2:
            return sub($x, $y);
        case 3:
            return dot($x, $y);
        case 4:
            return split($x, $y);
        default:
            echo "Opción no válida\n";
            return null;
    }
}

function add($x, $y) {
    return $x + $y;
}

function sub($x, $y) {
    return $x - $y;
}

function dot($x, $y) {
    return $x * $y;
}

function split($x, $y) {
    if ($y != 0) {
        return $x / $y;
    } else {
        return "Error: División por cero.";
    }
}
?>