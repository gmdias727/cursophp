<div class="titulo">Valor X Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;

// ATRIBUIÇÃO POR VALOR
$variavelValor = $variavel;
echo " <br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// ATRIBUIÇÃO POR REFERÊNCIA
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";