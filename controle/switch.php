<div class="titulo">Switch</div>

<?php

$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if($categoria === "1"){
    $carro = 'Mercedes';
    $preco = 250000;
} else if($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = '80000';
} else if($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p> Carro: $carro <br> Preço: R$ $precoFormatado</p>";

$categoria = 'sub básico';

switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mecedes';
        $preco = 250000;
        break;

    case 'suv':
    case 'suv básico':
        $carro = 'Renegade';
        $preco = '80000';
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = '33000';
        break;
}

$precoFormatado = number_format($preco, 2 , ',', '.');
echo "<p> Carro: $carro <br> Preço: $precoFormatado </p>";