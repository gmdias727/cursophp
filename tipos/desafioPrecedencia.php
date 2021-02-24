<div class="titulo">Desafio Precedência</div>

<?php


echo '<p>1. Qual o valor será impresso?</p>';
// echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);

echo 'De acordo com a ordem de precedência, o que será feito primeiro é
o (12 / 6) depois o (-8 + 2 ** 3) <- dentro desses parenteses será feito primeiro o "2 ** 3"
depois o resultado "-8", depois será feito a divisão do resultado do primeiro parenteses com o
resultado do segundo parenteses, em seguida o operador "*" com os operandos "5 e 3" serão
multiplicados em seguida somados com o último operando "2"';

echo '<br> Precedência de operadores: <br>
()  ->  **  ->  /  ->  *  ->  %  ->  +  ->  - <br>';

echo '<p> 2. Qual expressão imprime o valor "100"? <p> <br>';

echo 'A. ', (1 + 2) * 20 - 15, '<br>';
echo 'No exercício A. seguindo a ordem de precedência a saída será: <br>
(1 + 2) = 3, o resultado * (vezes) 20 - (menos) 15 que é igual à 45 OK';



echo 'B. ' . 4 * 5 ** 2; 
echo 'No exercício B. seguindo a ordem de precedência a saída será: <br>
5 ** 2 = 25 o resultado * 4 = 100 <br>
no caso a alternativa correta seria a "B". <br> <br>';

echo 'C. ' . 2 ** 3 ** 4 / 1e25, '<br>';
echo 'D. ' . 3 + (3 * 8) / 2 - 3;
