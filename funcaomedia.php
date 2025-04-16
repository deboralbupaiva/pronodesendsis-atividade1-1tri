<?php
function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

$media = calcularMedia(8, 7, 9);
echo "A média é: $media";
?>
