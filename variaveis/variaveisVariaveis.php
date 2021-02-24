<div class="titulo">Variáveis variáveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';
$valorA = 'valorAA';
echo "$a {$$a}";



echo '<br>';
$epa = 'opa';
$opa = 'vish';
echo "$epa {$$epa}";