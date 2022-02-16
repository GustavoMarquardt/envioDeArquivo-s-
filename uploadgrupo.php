
<?php
 // pre = arruma a quebra de linhas 
    // DIFERENÇA ENTRE ENVIAR 1 E VÁRIOS ARQUIVOS
    // na parte name = "arquivo", no de 1 não existe o [], já nesse precisa assim como o multiple
    if(isset($_FILES['arquivo']) && count($_FILES['arquivo']['tmp_name']) > 0){
        //envio de multiplos arquivos
        for ($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++ ){
            // faz a alteração do nome do arquivo para que não haja conflito, NÃO ESQUECER DE COLOCAR O [$q]
            // por que é um array   
            $nomeArquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,99)).'.jpg';
            // faz o envio da imagem para a pasta, utiliza 2 parametros
            // o primeiro é o nome do arquivo, o segundo é o caminho
            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomeArquivo);
        } // ARRAY COM NOME DOS ARQUIVOS
       
            header('Location: recebedorGrupo.php');
    }

?>


<h1>Upload de arquivos em grupo</h1> <br>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple/>
    <input type="submit" value="Enviar" />
</form>

<form action="index.php">
    <input type="submit" value="voltar para as opções"><br/><br/>
</form>