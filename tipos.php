<?php

$a_bool = TRUE; // um booleano
$a_str = "foo"; // uma string
$a_str2 = 'foo'; // outra string
$an_int = 12; //um inteiro



echo gettype($a_bool); # mostra: boolean
echo gettype($a_str); # mostra: string
echo gettype($a_str2); # mostra: string
echo gettype($an_int); # mostra: integer / inteiro


/*

//se ele é um inteiro, incrementa-o com quatro
if (is_int($an_int)) {
    $an_int += 4;
    echo $an_int;
}

*/


/*

// Se $a_bool é uma string, mostre-a
if (is_string($a_bool)) {
    echo "String: $a_bool";
    // (não imprime nada)
    
}

*/

?>