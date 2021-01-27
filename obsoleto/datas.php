<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilo.css">     
    <title>  </title>
</head>
<body>

<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 Dias; 24 Horas; 60 Minutos; 60s
echo 'Agora:          '. date('d-m-Y') ."\n\n";
echo 'Próxima Semana  '. date('d-m-Y', $nextWeek) ."\n\n";

// Usando strtotime()
echo 'Próxima Semana  '. date('d-m-Y', strtotime('+1 week')) ."\n";
?>

</body>
</html>




