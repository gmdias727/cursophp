<div class="titulo">Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>';
echo var_dump(true);
echo '<br>';
echo var_dump(false);
echo '<br>';
echo var_dump('false');
echo '<br>';
echo is_bool(false);
echo is_bool('true');

// fazendo as regras de conversão
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // Apenas zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000000001);
echo '<br>' . var_dump((bool) 0.000000000123);
echo '<br>' . var_dump((bool) ""); // FALSE
echo '<br>' . var_dump((bool) " "); // FALSE


echo '<br>' . var_dump((bool) "0"); // TODO RESTO É TRUE
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");
echo '<br>' . var_dump((bool) "FALSE");
echo '<br>' . var_dump(!!"false");
echo '<br>' . var_dump(!"false");

