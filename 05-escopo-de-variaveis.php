<?php

//escopo global

$nome = "Victor";
$a = 3;
$b = 4;
$c = 6;


function exibirNome()
{
    global $nome;
    echo $nome;
}

exibirNome();
echo "<br>";
////////////////////////////////

function exibeCidade()
{
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<br>";
////////////////////////////

function soma()
{
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
