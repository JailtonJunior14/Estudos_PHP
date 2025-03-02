<?php

try{

    //definindo diretorio de destino
    $diretorio_destino = "enviados/";

    //verificando se o diretorio destino existe
    if(!is_dir($diretorio_destino))
        throw new Exception("Diretorio nao encontrado");


    // Verifica se o arquivo é executavel

    if(is_executable($_FILES["arquivo_up"]["tmp_name"]))

        throw new Exception("Arquivos executaveis não são permitidos.");

        //obtendo extensão do arquivo
    $ext_arquivo = pathinfo($_FILES["arquivo_up"]["name"],PATHINFO_EXTENSION);
        
    $nome_unico = uniqid("enviado_") . "." . $ext_arquivo;
    
    
    
    // caminho do novo arquivo no servidor
    $nome_arquivo_servidor = $diretorio_destino . "enviado" . $nome_unico;
    
    

    // movendo o arquivo temporario para o diretorio final
    if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor)){

        echo "arquivo enviado";
    }else throw new Exception("erro ao enviar. Erro:" . $_FILES["arquivo_up"]["error"]);







} catch(Exception $e){
    echo $e->getMessage();
}

