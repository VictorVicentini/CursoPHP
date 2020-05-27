<?php
/*******Variaveis Dinâmicas **********/
$bebida = "Guarana";
$$bebida = "Fanta Uva";
echo $bebida ."<br>";
echo $Guarana."<br><hr>";

/****** Escalares *******/
//String
$nome = "Olá, Mundo!";
var_dump($nome);

if (is_string($nome)) {
    echo "<br> É uma string";
}else{
    echo "<br> Não é string";
}
echo '<br><br>';

//int
$idade = 27;
var_dump($idade);


if (is_int($idade)) {
    echo '<br>É Inteiro';
} else {
    echo '<br>Não é Inteiro';
}
echo '<br><br>';

//float
$altura = 1.85;
var_dump($altura);


if (is_float($altura)) {
    echo '<br>É real';
} else {
    echo '<br>Não é real';
}
echo '<br><br>';

//boolean
$admin = true;
var_dump($admin);


if (is_bool($admin)) {
    echo '<br>É boolean';
} else {
    echo '<br>Não é boolean';
}
echo '<br><br><hr>';

/****** Compostos *******/

//arrays
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if (is_array($carros)) {
    echo '<br>É Arrey';
} else {
    echo '<br>Não é Arrey';
}

echo '<br><br>';
//object

class Cliente{
    public $nome;
    public function atribuirNome($nome){
$this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Victor");
var_dump($cliente);



?>