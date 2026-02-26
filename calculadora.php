<?php
$operacio = $_POST['op']; 
$primerNumero = $_POST['n1']; 
$segonNumero = $_POST['n2'];

function calcular($operacio, $a, $b) {
    if ($operacio == "s") return $a + $b;
    if ($operacio == "r") return $a - $b;
    if ($operacio == "m") return $a * $b;
    if ($operacio == "d") return ($b != 0) ? $a / $b : "Error";
}

$res = calcular($operacio, $primerNumero, $segonNumero);


echo $res;
?>
