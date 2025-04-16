<?php
function contarPares($array) {
    $contador = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $contador++;
        }
    }
    return $contador;
}

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "Quantidade de números pares: " . contarPares($numeros);
?>
