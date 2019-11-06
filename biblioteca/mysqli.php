<?php
function conn() {
    $local = "./biblioteca/manipulacao/local.csv";
    $servidor = "./biblioteca/manipulacao/servidor.csv";
    $manipula = $local;
    
    $arquivo = fopen($manipula, "r");
    $arq = fgets($arquivo);

    fclose($arquivo);
    $dados = explode(',',$arq);
    
    $host = $dados[0];
    $user = $dados[1];
    $password = $dados[2];
    $database = $dados[3];
    
    $resul = mysqli_connect($host, $user, $password, $database);

    if (!$resul){
        echo mysqli_connect_error();
        die('Deu errado a conexão!');
    }
    return $resul;
}