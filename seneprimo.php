<?php
function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$testes = array(2, 3, 4, 5, 7, 10, 13, 15, 17);

foreach ($testes as $num) {
    echo "$num é primo? " . (ehPrimo($num) ? "Sim" : "Não") . "<br>";
}
?>