<?php
session_start();
//criando cookie
setcookie('user','rodrigo',time()+3600);
setcookie('email', 'ro@dsfsd',time()+3600);
setcookie('ultima_pesquisa', 'tenis',time()+3600);

//para excluir um cookie so subtrair o tempo
setcookie('user','rodrigo',time()-3600);

//para usaar o cookie usa a variavel global $_COOKIE[]
echo $_COOKIE['email'];

var_dump($_COOKIE);

echo session_id();