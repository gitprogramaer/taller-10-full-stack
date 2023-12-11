<?php
$suma = 0;
echo "Números impares hasta 100:\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " - "; 
        $suma += $i;
    }
}

echo "\nLa suma de los números impares es: " . $suma;
?>


<?php
$suma = 0;
echo "Números impares hasta 100:\n";

for ($i = 1; $i <= 100; $i += 2) {
    echo $i . " - ";
    $suma += $i;
}

echo "\nLa suma de los números impares es: " . $suma;
?>