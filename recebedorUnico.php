<?php
//recebe os valores do formulario que estava sendo enviado para essa página
$arquivo = $_FILES['arquivo'];
// verifica se o arquivo existe
if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){
    // faz a alteração do nome do arquivo para que não haja conflito
    $nomeArquivo = md5(time().rand(0,99)).'.png';

    // faz o envio da imagem para a pasta, utiliza 2 parametros
    // o primeiro é o nome do arquivo, o segundo é o caminho
    move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$nomeArquivo['name']);


}
    
?>
<h1>Arquivo enviado com sucesso</h1>
<form action="index.php">
    <input type="submit" value="voltar para as opções"><br/><br/>
</form>