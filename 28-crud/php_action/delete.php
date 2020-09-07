<?php
session_start();
require_once 'db_connect.php';


if(isset($_POST['btn-deletar'])):
  
    $id = mysqli_escape_string($connect,$_POST['id']);

    $sql = "delete from cliente where id='$id'";

    //$sql = "insert into cliente (nome, sobrenome, email, idade) values (jkh, nkjhkj, lkjkllk, 6)";

    if(mysqli_query($connect, $sql)):
        $_SESSION['menssagem'] = "Deletado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['menssagem'] = "Erro ao Deletar";
        header('Location: ../index.php?erro');
    endif;
endif;
