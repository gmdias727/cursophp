<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body> 
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">
                                Desafio PHP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">
                                Tipo inteiro 
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float 
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Op. Aritméticas
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=desafioPrecedencia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=string">
                                String
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">
                                Booleano
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveisVariaveis">
                                Variáveis variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafioVariaveis">
                                Desafio Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor X Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 04 - Estruturas de controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">
                                If e Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                                Operadores Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_pi">
                                Desafio Pi
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadoresLogicos">
                                Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">
                                Desafio com Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operador_ternario">
                                Operador Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=switch">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_switch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('d/m/Y');?>
    </footer>
</body>
</html>