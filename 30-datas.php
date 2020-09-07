<?php

date_default_timezone_set('America/Sao_Paulo');
echo date('d')."<br>";
echo date('D')."<br>";
echo date('l')."<br>";
echo date('m')."<br>";
echo date('M')."<br>";
echo date('y')."<br>";
echo date('Y')."<br>";

echo date('D/M/Y')."<br>";
echo date('d/m/y')."<br>";


//horas
echo date('h')."<br>";
echo date('H')."<br>";
//minutos
echo date('i')."<br>";
//segundos
echo date('s')."<br>";

echo date('h:i:s')."<br>";

//exibe pm ou am
echo date('A')."<br>";

//para banco de dados
$date= date('Y-m-d');//date
$datetime = date('Y-m-d H:i:s');//datetime

//formatado datas e horas
$time = time();
echo date('d/m/Y', $time)."<br>";

$date_pagamento = mktime(15,30,00,02,15,2013);
echo date('d/m/y - h:i', $date_pagamento )."<br>";

//converte string para date 
$data = '2019-04-10 13:30:00';
$data = strtotime($data);
echo date('d/m/y', $data)."<br>";
