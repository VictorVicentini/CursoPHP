<?php

class Newsletter
{

    public function cadastrarEmail($email)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            throw new Exception("E-mail inválido",1);
        else :
            echo "e-mail cadastrado com sucesso!";
        endif;
    }
}

$newsletter = new Newsletter();

//tratando exception
try{
    $newsletter->cadastrarEmail("dfs@");
// guarda todas as Exception na variael $e
}catch(Exception $e){
    echo "Menssagem ".$e->getMessage()."<br>";//exibindo as exception
    echo "Codigo ".$e->getCode()."<br>";//exibindo as exception
    echo "Arquivo ".$e->getFile()."<br>";//exibindo as exception
    echo "Linha ".$e->getLine()."<br>";//exibindo as exception
}
