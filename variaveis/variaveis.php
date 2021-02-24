<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;

echo $soma;
echo '<br>';
echo isset($soma);
unset($soma);
var_dump($soma);
echo '<br>';

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;


// REGRAS DE NOMES DE VARIÁVEL
$var = 'válido';
$var2 = 'válido';
$v2ar = 'válido';
$VAR = 'válido';
$_var_1 = 'válido';

# $2var = 'inválido';
# $%var7 = 'inválido';
# $vár = 'inválido';

#echo '<br>' . $_SERVER;
#var_dump($_SERVER); 
