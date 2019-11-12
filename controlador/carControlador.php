<?php

require_once 'modelo/produtoModelo.php';

/** anon */
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

/** anon */ 
function listar() {
    
        $todos = array();
        if (isset($_SESSION["carrinho"])) {
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


/** anon */
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

