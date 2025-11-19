<?php

$teste = "foo";

echo "$teste global 1 <br>";

if (5 > 2) {
    $teste = "bar";

    echo "$teste if <br>";

}

echo "$teste global 2 <br>";

function funcao()
{

    $teste = "xsxs";
    echo "$teste local 1 <br>";

}

funcao();

function testandoGlobal()
{
    global $teste;

    $teste = 2;

    echo "$teste global funcao<br>";

}

testandoGlobal();


echo "$teste global 3 <br>";
