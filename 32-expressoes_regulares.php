<?php

$string = "abc";
$padrao = "/^[a-z]{1,4}$/i";

if(preg_match($padrao,$string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;