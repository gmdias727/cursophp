<div class="titulo"> Desafio com Operadores Lógicos </div>


<!--

DOIS TRABALHOS -> TERÇA E QUINTA:
- SE OS DOIS FOREM EXECUTADOS -> TV 50' E SORVETE
- SE APENAS UM FOR EXECUTADO -> TV 32' E SORVETE
- SE NENHUM FOR EXECUTADO -> FICA EM CASA E NÃO FAÇA NADA

-->
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça-feira): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta-feira): </label>
        <select name="t2" id="t2">
            <option value="1 ">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>


<style>
    button, select {
        font-size: 1.8rem;
    }
</style>


<?php
// echo $_POST['t1'];
// echo $_POST['t2'];

// if ('t1' && 't2' == true){
//     echo "Trabalhou na terça-feira e na quinta-feira, foi comprar TV 50' e tomar sorvete";
// } else if('t1' || 't2' == false){
//     echo "Trabalhou apenas na terça-feira OU na quinta-feira, foi comprar uma TV 32' e tomar sorvete";
// } else {
//     echo "Ficou em casa mais saudável";
// }
if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;
    
    if($t1 && $t2) {
        $tv = '50"';
    }elseif($t1 xor $t2) {
        $tv = '32"';
    }
    
    if($t1 or $t2) {
        $sorvete = true;
    }
    
    if($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    }else{
        $resultado = "Sem Tv dessa vez :(";
    }
    
    if(!$sorvete) {
        $sorvete .= '<br> Estamos mais saudáveis!';
    }else{
        $resultado .= '<br> Sorvete liberado \0/';
    }
    
    echo "<p>$resultado</p>";
}