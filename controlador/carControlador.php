<?php

require_once 'modelo/produtoModelo.php';

function adicionar($idproduto) {

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    } else {
        $produtos = $_SESSION["carrinho"];
    }

    $produtos[] = $idproduto;
    $_SESSION["carrinho"] = $produtos;
    redirecionar("car/listar");
}

function listar() {

    if (isset($_SESSION["carrinho"])) {
        $todos = array();
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $todos[] = pegarprodutoPorId($produto);
        endforeach;
    } else {
            echo "";
    }

    $dados = array();
    $dados["produtos"] = $todos;


    exibir('carrinho/listar', $dados);
}

function aha() {
    session_start();

    $nome = $_GET["nome"];

    if (isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"]; //peguei
    } else {
        $produtos = array();
    }

    $produtos[] = $nomeProduto;
    $_SESSION["carrinho"] = $produtos;
}

function deletar($idproduto) {
    print_r ($_SESSION["carrinho"]);
    
    for ($i = 0; $i <= count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i] == $idproduto) {
            $indice = $i;
            unset($_SESSION["carrinho"][$indice]);
        }
    }

    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);

    redirecionar("car/listar");
}
?>

