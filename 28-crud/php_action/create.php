<?php
session_start();
require_once 'db_connect.php';

//para se proteger de haker
function clear($input){
    global $connect;
///para se proteger do sql insert
$var = mysqli_escape_string($connect,$input);
//para se proteger de css(cross site scripting)
$var = htmlspecialchars($var);

return $var;
}



if(isset($_POST['btn-cadastrar'])):
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $idade = clear($_POST['idade']);
    $email = clear($_POST['email']);

    $sql = "insert into cliente (nome, sobrenome, email, idade) values ('$nome', '$sobrenome', '$email', '$idade')";

    //$sql = "insert into cliente (nome, sobrenome, email, idade) values (jkh, nkjhkj, lkjkllk, 6)";

    if(mysqli_query($connect, $sql)):
        $_SESSION['menssagem'] = "Cadastrado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['menssagem'] = "Erro ao Cadastrar";
        header('Location: ../index.php?erro');
    endif;
endif;
