<?php
include "./passwordcheck.php";

$user = "";
$password = "";

echo "Digite su usuario a registrar: \n";
$user = readline();

echo "Digite su contraseña a registrar: \n";
$password = readline();

if (hasSecurityLong($password) && hasUpperLetter($password) && hasNumber($password)) {
    echo "Su contraseña es segura\n";
} else {
    echo "Su contraseña no es segura\n";
}
?>


<?php

function hasSecurityLong($pass) {
    return strlen($pass) >= 8;
}

function hasUpperLetter($pass) {
    $arrayLetters = str_split($pass);

    foreach ($arrayLetters as $letter) {
        if (ctype_upper($letter)) {
            return true;
        }
    }

    return false;
}

function hasNumber($pass) {
    return preg_match('/\d/', $pass);
}

?>