<?php
echo "Ingrese un número: ";
$number = readline();

$i = 0;

echo "Tabla de multiplicar del $number:\n";
while ($i <= 30) {
    $result = $number * $i;
    echo "$number x $i = $result\n";
    $i++;
}
?>