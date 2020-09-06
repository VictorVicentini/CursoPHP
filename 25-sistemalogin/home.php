<?php
require_once 'db_conect.php';
session_start();
//verificando se esta logaado
if(isset($_SESSION['logado'])):
    header('Location: index.php')
endif;

$id = $_SESSION['id_usuario'];
$sql = "select * from usuarios where id = '$id'";
$resultao = mysqli_query($connect,$sql);
$dados = mysqli_fetch_array($resultao);
mysqli_close($connect);



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    
<h1>Olá <?php echo $dados['nome'];?></h1>
<a href="logout.php"> sair</a>

</body>
</html>