<?php
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

echo "Digite el número de personas que entrarán a la bolera: ";
$personNumber = readline();

echo "Digite el tipo de afiliación (A,B,C,D,): ";
$membershipType = strtoupper(readline());

$totalPay = $personNumber * TICKET_PRICE;

switch ($membershipType) {
    case 'A':
        $totalPay *= 0.7;
        break;
    case 'B':
        $totalPay *= 0.75;
        break;
    case 'C':
        $totalPay *= 0.9;
        break;
    case 'D':
        $totalPay *= 0.95;
        break;
    default:
        $discount = 0; 
        break;
}

$totalPayWithDiscount = $totalPay - ($totalPay * $discount);
echo "El total a pagar es: $" . number_format($totalPayWithDiscount, 2);