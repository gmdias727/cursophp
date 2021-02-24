<div class="titulo">Desafio Pi</div>

<?php

echo pi();
$pi = 3.14;


var_dump(pi());
var_dump($pi);


if ($pi === pi()) {
    echo "<br> Iguais!";

} else {
    echo "<br> Diferentes!";
}