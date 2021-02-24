<div class="titulo">Operadores Lógicos</div>

<?php

echo 'Negação lógica';
echo "<p> V ou F </p> <hr>";
var_dump(true) . '<br>';
echo '<br>';
var_dump(!true) . '<br>';

echo "<p> Tabela Verdade 'AND' (E) </p> <hr>";

var_dump(true && true); // VERDADE E VERDADE
var_dump(true && false); // VERDADE E FALSO
var_dump(false && true); // FALSO E VERDADE
var_dump(false && false); // FALSO E FALSO
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');

// MESMA COISA

var_dump(true and true); // VERDADE E VERDADE
var_dump(true and false); // VERDADE E FALSO
var_dump(false and true); // FALSO E VERDADE
var_dump(false and false); // FALSO E FALSO

// MESMA COISA

var_dump(true AND true); // VERDADE E VERDADE
var_dump(true AND false); // VERDADE E FALSO
var_dump(false AND true); // FALSO E VERDADE
var_dump(false AND false); // FALSO E FALSO


echo "<p> Tabela Verdade 'OR' (OU) </p> <hr>";
var_dump(true || true); // VERDADEIRO OU FALSO
var_dump(false || true); // FALSO OU VERDADEIRO
var_dump(false || false); // FALSO OU FALSO
var_dump(true || false); // VERDADEIRO OU FALSO

// MESMA COISA

var_dump(true OR true);
var_dump(false OR true);
var_dump(false OR false);
var_dump(true OR false);

// MESMA COISA

var_dump(true or true);
var_dump(false or true);
var_dump(false or false);
var_dump(true or false);

echo "<p> Tabela Verdade 'XOR' (OU Exclusivo) </p> <hr>";

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

// echo "<p class='divisao'> Exemplo </p> <hr>";
// $idade = 62;
// $sexo = 'F';
// $PrevidenciaPaga = true;
// $podeAposentar = $PrevidenciaPaga && (
//     ($idade >= 60 && $sexo === 'F') || ($idade >= 65 && $sexo === 'M')
// );

echo "<p class='divisao'> Exemplo </p> <hr>"; // PRÉ-REQUISITOS PARA APOSENTADORIA
$idade = 65;
$sexo = 'M';
$pagouPrevidencia = true;
$criterioParaHomems = ($idade >= 65 && $sexo === 'M');
$criterioParaMulheres = ($idade >= 60 && $sexo === 'F');
$atingiuOsCriterios = $criterioParaHomems || $criterioParaMulheres;
$podeAposentar = $pagouPrevidencia && $atingiuOsCriterios;
echo "Pode se aposentar: $podeAposentar. <br>";

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} else if ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco...";
}

?>


<style>
    p {
        margin-bottom: 0px;
        font-weight: bold;
 
    }

    hr {
        margin-top: 0px;
 
    }
</style>