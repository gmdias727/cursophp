<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 < 1);
var_dump(1 <= 1);
var_dump(1 != 1);
var_dump(1 <> 1);

var_dump(111 == "111");
var_dump(111 === "111");
var_dump(111 != "111");
var_dump(111 !== "111");

echo "<p> Relacionais no If e Else </p> <hr>";

$idade = 66;
if ($idade < 18) {
    echo 'menor de idade <br>';
} else if ($idade <= 65) {
    echo "Adulto = $idade <br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p> Spaceship </p> <hr>";

var_dump(5 <=> 3); // retorna 1
var_dump(10 <=> 10); // retorna 0
var_dump(5 <=> 11); // retorna -1

echo '<p> Valores podem ser Verdadeiros ou Falsos </p> <hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");


?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>
