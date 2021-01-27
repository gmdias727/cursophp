<?php

/*
Exemplo #3 Exemplo de delimitação de string heredoc:

class foo 
{
    var $foo;
    var $bar;
    
    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'Gabriel';

echo <<<EOT
Meu nome é "$name". Eu estou imprimindo $foo->foo.
Agora, eu estou imprimindo {$foo -> bar[1]}
Isto deve imprimir um 'A' maiúsculo: \x41
EOT;
*/





/*

Exemplho #4 Exemplo de heredoc em argumentos:

var_dump(array(<<<EOD
foobar!
EOD
));

*/


/*
#Exemplo #5 Utilizando o Heredoc na inicialização de valores estáticos

# Variáveis estáticas
function foo()
{
    static $bar = <<<LABEL
    Nada aqui...
    LABEL;
}

# Classe propriedades / Constantes
class foo
{
    const BAR = <<<FOOBAR
    Exemplo de uma constante
    FOOBAR;
    
    
    public $baz = <<<FOOBAR
    Exemplo de propriedade
    FOOBAR;
}

*/




/*
Exemplo #6 Usando aspas duplas no Heredoc

echo <<<"FOOBAR"
Hello World!
FOOBAR;
*/


/*
echo <<<'EOD'
Exemplo de uma string em nowdoc
Barras inversas são interpretadas como elas mesmas.
e.g. \\ and \'.
EOD;
*/

class foo
{
    public $foo;
    public $bar;

    function __construct()
    {
        $this->foo ='Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');

    }
}

$foo = new foo();
$name = 'Gabriel Dias';

echo <<<'EOT'
Meu nome é "$name". Estou imprimindo na tela $foo->foo.
Agora, estou imprimindo {$foo->bar[1]}.
Isto não deve imprimir um "A" maiúsculo. \x41
EOT;


?>