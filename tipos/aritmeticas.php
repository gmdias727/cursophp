<div class="titulo">Operações Aritméticas </div>

<?php
echo 1 + 1,'<br>';
var_dump(1 + 1);
echo '<br> Aqui foi somado 1 + 1 e impresso com o var_dump() qual 
é o tipo do número 1 + 1 que no caso é um número inteiro.';

echo '<br> <br>';

echo 1 + 2.5, '<br>';
var_dump(1 + 2.5);
echo '<br> Aqui foi somado 1 + 2.5 em que 1 é um inteiro
e 2.5 é um número de ponto flutante (Float), por algum motivo a soma de int + float = float.';

echo '<br> <br>';

echo 10 - 2,'<br>';
var_dump(10 - 2);
echo '<br> Aqui foi feito a subtração de 10 - 2 resultando em 8 e impresso o seu tipo, nada demais.';

echo '<br> <br>';

echo 10 * 2, '<br>';
var_dump(10 * 2);
echo '<br> Aqui foi feita a multiplicação de 10 * 2 e impresso qual seu tipo numérico.';

echo '<br> <br>';

echo 7 / 4, '<br>';
var_dump(7 / 4); // AQUI ELE ARREDONDA O RESULTADO
echo '<br> Aqui foi feita a divisão entre 7 / 4 reultando em 1.75 pois não é uma divisão exata, 
o var_dump() nessa parte imprimiu o resultado da operação com todas as casas decimais presentes, 
eu não delimitei nada.';

echo '<br> <br>';

echo intdiv(7,4), '<br>'; 
var_dump(7, 4);
echo '<br> Aqui foi feito a mesma divisão de 7 / 4 porém utilizando a função intdiv(),
o que acontece aqui é que a função mostra pra você o resultado da divisão sem
nenhuma casa decimal após a "," do número, então o que seria 1.75 agora é apenas 1,
mesmo se fosse 1,75999... o intdiv() te mostra apenas o primeiro número <br>';

echo '<br> intdiv() => divisão de inteiros <br>
=> O primeiro valor é o numerador <br>
=> O segundo valor é o denominador <br> <br>
intdiv() trunca o resto da divisão retornando apenas o resultado sem nenhuma casa decimal';

echo '<br> <br>';

echo 'Divisão de 7 / 4 = ' . round(7 / 4), '<br>';
echo 'utilizando a função round() o resultado é arredondado';

// REFATORAR AS LINHAS ABAIXO
echo var_dump(7 % 4), '<br>';
echo 'Resultado = 1 Resto da divisão = 3 <br>
 O operador "%" imprime o resto da divisão <br>
 se o resto da divisão for "1" o número é ímpar <br>
 se o resto da divisão for "0" o número é par <br>';
// ATÉ AQUI


echo 7 % 2, '<br>';

echo 8 % 2, '<br>';
# echo 7 / 0, '<br>'; //ERRO
# echo intdiv(7,0), '<br>'; //ERRO
echo 4 ** 2, '<br>';




# PRECEDÊNCIA DE OPERADORES:
# ()  =>  **  =>  /  =>  *  =>  %  =>  +  => -
echo '<p> Precedência </p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2,'<br>';