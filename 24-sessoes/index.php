<?php
session_start();

$_SESSION['cor'] = "verde";
$_SESSION['carro']= "gol";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id() ;