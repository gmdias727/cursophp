<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;

echo '<br>' . $numero;
$numero = $numero - 3;

echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero--;
echo '<br>' . $numero;

--$numero;
echo '<br>' . $numero;

$numero++;
echo '<br>' . $numero;

++$numero;
echo '<br>' . $numero;

$numero = 20;
echo '<br>' . $numero;

$numero -= 5;
echo '<br>' . $numero;

$numero += 5;
echo '<br>' . $numero;

$numero *= 10;
echo '<br>' . $numero;

$numero /= 2;
echo '<br>' . $numero;

$numero %= 6;
echo '<br>' . $numero;

$numero **= 4;
echo '<br>' . $numero;

$numero .= 4; // APENAS CONCATENAÇÃO
echo '<br>' . $numero;


$texto = 'ESSE É UM TEXTO';
echo '<br>' . $texto;

$texto = $texto . ' qualquer';
echo '<br>' . $texto;

$texto .= ' de verdade!';
echo '<br>' . $texto;
