<?php
///ARRAYS

$carros = array(2 => "gol", 5 => "bmw", 10 => "uno");

print_r($carros);
echo "<br>";
$carros[] = "amorok";
print_r($carros);
echo "<br>";
$carros[20] = "Camarro";
print_r($carros);
echo "<br>";echo "<br>";
$motos = array();
$motos[] = "yamaha";
$motos[5] = "honda";
print_r($motos);

$clientes = ["pedro","felipe"];
print_r($clientes);

//count
$totalClientes = count($clientes);
echo "<hr>";
echo $totalClientes;
echo "<hr>";

//foreach
foreach($carros as $valor){
    echo $valor.'<br>';
}
echo "<hr>";
///arays associativos

$pessoa = array("nome"=>"victor", "idade"=>33);
echo $pessoa["nome"];
echo "<br>";
foreach($pessoa as $indice=>$valor){
    echo $indice.': '.$valor.'<br>';
} 

//arrays multidimensionais
$time = array("cariocas"=>array("vasco", "flamengo", "botafogo"),
"paulistas"=>array("santos", "são paulo","palmeiras"))
