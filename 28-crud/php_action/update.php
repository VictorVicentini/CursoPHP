<?php
session_start();
require_once 'db_connect.php';


if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $sobrenome = mysqli_escape_string($connect,$_POST['sobrenome']);
    $idade = mysqli_escape_string($connect,$_POST['idade']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $id = mysqli_escape_string($connect,$_POST['id']);

    $sql = "update cliente set nome='$nome', sobrenome='$sobrenome', email='$email', idade='$idade' where id='$id'";

    //$sql = "insert into cliente (nome, sobrenome, email, idade) values (jkh, nkjhkj, lkjkllk, 6)";

    if(mysqli_query($connect, $sql)):
        $_SESSION['menssagem'] = "Atualizado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['menssagem'] = "Erro ao Atualizar";
        header('Location: ../index.php?erro');
    endif;
endif;
