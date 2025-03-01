<?php

try{

    //definindo diretorio de destino
    $diretorio_destino = "enviados/";

    //verificando se o diretorio destino existe
    if(!is_dir($diretorio_destino))
        throw new Exception("Diretorio nao encontrado");


    // caminho do novo arquivo no servidor
    $nome_arquivo_servidor = $diretorio_destino . "bbc.gif";
    

    // movendo o arquivo temporario para o diretorio final
    if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor)){

        echo "arquivo enviado";
    }else throw new Exception("erro ao enviar. Erro:" . $_FILES["arquivo_up"]["error"]);







} catch(Exception $e){
    echo $e->getMessage();
}

