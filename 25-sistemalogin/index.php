<?php
require_once 'db_conect.php';
session_start();

if (isset($_POST['btn-entrar'])) :
    $erro = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($login) or empty($senha)) :
        $erro[] = "<li> o campo login/senha precisa ser preenchido</li>";
    else :
        $sql = "select login from usuarios where login='$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) :
            $senha=md5($senha);
            $sql = "select * from usuarios where login = '$login' and senha='$senha'";
            $resultado = mysqli_query($connect, $sql);
            if (mysqli_num_rows($resultado) == 1) :
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado']=true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            else:
                $erro[]="<li> usuario e senha não confere</li>";
            endif;
        else :
            $erro[] = "<li> usuario inexistente </li";
        endif;
    endif;
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($erro)) :
        foreach ($erro as $erros) :
            echo $erros;
        endforeach;

    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar"> Entrar</button>


    </form>
</body>

</html>