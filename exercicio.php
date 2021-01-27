<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./recursos/css/estilo.css">
    <link rel="stylesheet" href="./recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização de exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            // MÉTODO 1:
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php");

            // MÉTODO 2:    
                //include("{$_GET['dir']}/{$_GET['file']}.php")

            // MÉTODO 3: *UTILIZADO*
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y'); ?>
    </footer>
</body>
</html>