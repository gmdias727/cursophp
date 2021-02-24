<div class="titulo">Desafio Switch</div>


<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metro > KM</option>
        <option value="km-metro">KM > Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>


<?php

echo $_POST['conversao'], '<br>';
echo $_POST['param'];


const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;


$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    default:
        $mensagem = "Nenhum valor calculado.";
}

if($param = '' && $mensagem = '' && $distancia = '') {
    echo 'Não há nada aqui';
}


echo "<p> $mensagem </p>";
?>








