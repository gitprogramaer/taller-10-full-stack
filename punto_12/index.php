<?php
echo "Ingrese un número: ";
$num = intval(readline());

echo "Tabla de multiplicar del $num:\n";

for ($i = 0; $i <= 30; $i++) {
    $result = $num * $i;
    echo "$num x $i = $result\n";
}
?>