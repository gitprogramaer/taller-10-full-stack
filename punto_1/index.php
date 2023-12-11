<?php

define('PI', 3.14159);
define('NOMBRE', 'Juan');

$edad = 25;
$ciudad = 'Ciudad A';

echo "Constante PI: " . PI . "\n";
echo "Constante NOMBRE: " . NOMBRE . "\n";
echo "Variable Edad: " . $edad . "\n";
echo "Variable Ciudad: " . $ciudad . "\n";

$edad = 30;
$ciudad = 'Ciudad B';

echo "Después de cambiar el valor:\n";
echo "Variable Edad: " . $edad . "\n";
echo "Variable Ciudad: " . $ciudad . "\n";

?>