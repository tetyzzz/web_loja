<?php

require_once 'modelo/pedidoModelo.php';
require_once 'modelo/produtoModelo.php';

function index() {
    $produtos = $_SESSION['carrinho'];
    $quant = 0;
    $total = 0;

    foreach ($produtos as $produto => $id) {
        $prod = pegarprodutoPorId($id);
        $quant++;
        $total += $prod['preco'];
        $listaProdutos[] = $prod;
    }

    $total = number_format($total, 2);

    $dados = array();
    $dados["produtos"] = $listaProdutos;
    $dados["total"] = $total;
    exibir("pedido/pedido", $dados);
}

function salvarPedido (){
    if (ehPost()){
        $formapaga = $_POST['descricao'];
        $endereco = $_POST['id'];
        $cupom = $_POST[''];
        $produtos = $_SESSION['carrinho'];
    }
    
}
