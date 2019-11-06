<?php

function uploadImagem($imagem_temp_name, $name_imagem) {
    $extensao = strtolower(substr($name_imagem, -4)); # vai pegar a extensão do arquivo
    $novo_nome = md5(time()) . $extensao; # cria um novo nome: criptografa a hora e adiciona a extensão
    $diretorio = "publico/imgs/"; # define o diretório que a imagem vai ser salva

    move_uploaded_file($imagem_temp_name, $diretorio . $novo_nome); # move o arquivo com o nome temporário, renomeia e salva no diretório

    return $diretorio . $novo_nome; # retorna o caminho da imagem
}
