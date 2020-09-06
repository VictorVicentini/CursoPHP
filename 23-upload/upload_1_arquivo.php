<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//verifica se o o botão enviar foi pressiondo
if(isset($_POST['enviar-formulario'])):
$formatosPermitidos = array("png", "jpeg", "jpg", "gif", "bmp");
//Pega a extensão do arquivo enviado através da super global FILES
$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

//Busca a extensão dentro do array formatos específicos
if(in_array($extensao,$formatosPermitidos)):
    $pasta = "arquivos/";
    //pega o canho do arquivo temporario atraves da super global FILES
    $temporario = $_FILES['arquivo']['tmp_name'];
    //uniqid cria gera um id unico para o arquivo
    $novoNome = uniqid().".$extensao";

    //movendo o upload para nova pasta
    if(move_uploaded_file($temporario, $pasta.$novoNome)):
            echo "UPLOAD FEITO COM SUCESSO!";
    else: echo "NÃO FOOI POSSIVEL FAZER UPLOAD.";
endif;
else: echo "Formato Inválido";
endif;
echo $extensao;
var_dump($_FILES);
endif;

?>



    <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST" enctype = "multipart/form-data">
<input type="file" name="arquivo">
<input type ="submit" name= "enviar-formulario">
    </form>
</body>
</html>