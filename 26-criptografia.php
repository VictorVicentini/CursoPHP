<?php
$senha = "123456";
//senha gerada pelo metodo password_hash salva no banco de dados
$senha_db = '$2y$10$N/3GQgMgJKNyG4Mb11i4PuARZAAPwSLl1Q3b2bsHx5WG5t5pzkw3a';

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

echo $senhaSegura;

//comparado a senha digitada com a senha salva no banco de dados.
if(password_verify($senha, $senha_db)):
    echo "<br>senha Válida";
else:
    echo "<br>senha inválida";
endif;