<div class="titulo">Strings</div>

<?php

echo 'Isso é uma string';
echo '<br>';
var_dump("Isso também");
echo '<br>';

echo 'Concatenando';
echo '<br>';

echo "Isto é " . 'uma string';
echo '<br>', "também aceito ", "virgulas";

echo '<br>';
echo "'Teste' " . '"Teste"' . ' \'Teste\' ' . "\"Teste\"" . "\\";

print("<br> Isso também é uma string");
print("<br> Isso também é uma string");
print("<br> Isso também é uma string");

echo '<br>' . strtoupper('nome, nOmE');
echo '<br>' . strtolower('NOME, aLEx');
echo '<br>' . ucfirst('somente a primeira letra maiúscula <- ucfirst()');
echo '<br>' . ucwords('toda primeira letra de cada palavra será maiúscula');
echo '<br>' . strlen("Eu também");
echo '<br>' . strlen("Quantas letras?");
// echo '<br>' . mb_strlen("Eu também", "UTF-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso por isso');

