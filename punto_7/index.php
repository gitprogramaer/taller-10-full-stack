<?php
echo "Ingrese el primer número: ";
$numero1 = readline();

echo "Ingrese el segundo número: ";
$numero2 = readline();

echo "Ingrese la operación (+, -, *, /): ";
$operacion = readline();

$resultado = 0;

switch ($operacion) {
    case '+':
        $resultado = $numero1 + $numero2;
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        break;
    case '*':
        $resultado = $numero1 * $numero2;
        break;
    case '/':
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            echo "Error: No se puede dividir por cero.\n";
            exit;
        }
        break;
    default:
        echo "Error: Operación no válida.\n";
        exit;
}
echo "El resultado de $numero1 $operacion $numero2 es: $resultado\n";
?>