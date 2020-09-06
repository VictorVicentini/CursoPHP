<?php
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $sobrenome = mysqli_escape_string($connect,$_POST['sobrenome']);
    $idade = mysqli_escape_string($connect,$_POST['idade']);
    $email = mysqli_escape_string($connect,$_POST['email']);

    $sql = "insert into cliente (nome, sobrenome, email, idade) values ('$nome', '$sobrenome', '$email', '$idade')";

    //$sql = "insert into cliente (nome, sobrenome, email, idade) values (jkh, nkjhkj, lkjkllk, 6)";

    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?erro');
    endif;
endif;
