<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);
mysqli_set_charset($connect,"utf8");

if(mysqli_connect_error()):
    echo "erro na conexão: ".mysqli_connect_error();
else:
    echo "conectado";
endif;