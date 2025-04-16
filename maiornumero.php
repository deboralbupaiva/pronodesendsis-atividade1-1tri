<?php
function encontrarMaior($array) {
    $maior = $array[0];
    foreach ($array as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }
    return $maior;
}

$numeros = array(23, 45, 12, 67, 34);
echo "O maior número é: " . encontrarMaior($numeros);
?>
