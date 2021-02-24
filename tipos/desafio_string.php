<div class="titulo">Desafio String</div>

<?php

/**
 * Enunciado:
 * Avaliando os métodos da documentação da string,
 * qual dos métodos que a posição do texto 'abc'
 * na string '!AbcaBcabc' retorne 1?
 */

$minhaString = '!AbcaBcabc';
$meEncontre = 'Abc';
$strpos = strpos($minhaString, $meEncontre); 

if ($strpos === false) {
    echo "A string '$meEncontre' não foi encontrada na string '$minhaString'.";
} else {
    echo "A string '$meEncontre' foi encontrada na string '$minhaString'.";
    echo " e existe na posição '$strpos'.";
}


