<div class="titulo">Desafio Equação</div>



<?php
/**

$numerador_A = 6 * (3 + 2) ** 2;
$denominador_A = 3 * 2;
echo '$numerador_A = ', $numerador_A, '<br>';
echo '$denominador_A = ',$denominador_A, '<br>';

$divisao_A = $numerador_A / $denominador_A;
echo '$divisao_A = $numerador_A / $denominador_A = ',$divisao_A, '<br> <br>';

$numerador_B = (1 - 5) * (2 - 7);
$denominador_B = 2;
echo '$numerador_B = ',$numerador_B, '<br>';
echo '$denominador_B = ',$denominador_B, '<br>';

$divisao_B = $numerador_B / $denominador_B;
echo '$divisao_B = $numerador_B / $denominador_B; = ', $divisao_B, '<br> <br>';

$calculo_B = $divisao_B ** 2;
echo '$calculo_B = $divisao_B ** 2 = ', $calculo_B, ; 
*/

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "O resultado final é " . $final . ".";