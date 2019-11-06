<?php

function salvarPedido (){
    if (ehPost()){
        $formapaga = $_POST['descricao'];
        $endereco = $_POST['id'];
        $cupom = $_POST[''];
        $produtos = $_SESSION['carrinho'];
    }
    
}

