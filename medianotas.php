<?php

$num1 = 6;
$num2 = 7;
$num3 = 5;
$media = ($num1 + $num2 + $num3) / 3;
 

if ($media >= 7){
    echo "O aluno foi aprovado";
}
elseif ($media >= 5 && $media < 7){
    echo "O aluno esta de recuperação";
}
else{
    echo "O aluno foi reprovado";
}

?>