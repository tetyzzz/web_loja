<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
require_once "servico/uploadServico.php";

/* * admin */
function ver($idproduto) {
    $dados["produto"] = pegarprodutoPorId($idproduto);
    exibir("produtos/visualizar", $dados);
}

/** admin */
function listarprodutos() {
    $dados = array();
    $dados ["produtos"] = pegartodosprodutos();
    exibir("produtos/listarprodutos", $dados);
}

/** admin */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];
        $idcategoria = $_POST["idcategoria"];

        $name_imagem = $_FILES['img']['name'];
        $imagem_temp_name = $_FILES['img']['tmp_name'];
        $img = uploadImagem($imagem_temp_name, $name_imagem);

        $errors = array();


        if (strlen(trim($nome)) == 0) {
            $errors[] = "Você deve inserir o nome do produto.";
        }

        if (strlen(trim($quantidade)) == 0) {
            $errors[] = "Você deve inserir a quantidade do produto.";
        }

        if (strlen(trim($preco)) == 0) {
            $errors[] = "Você deve inserir o preço do produto.";
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("produtos/formularioproduto", $dados);
        } else {
            adicionarProduto($nome, $descricao, $quantidade, $preco, $img, $idcategoria);
            redirecionar("produto/listarprodutos");
        }
    } else {
        $dados["categorias"] = pegartodascategorias();
        exibir("produtos/formularioproduto", $dados);
    }

    redirecionar("produto/listar");
}

/** admin */
function deletar($idproduto) {
    $msg = deletarProduto($idproduto);
    redirecionar("produto/listarprodutos");
}

/** admin */
function editar($idproduto) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];

        $name_imagem = $_FILES['img']['name'];
        $imagem_temp_name = $_FILES['img']['tmp_name'];
        $img = uploadImagem($imagem_temp_name, $name_imagem);

        editarproduto($idproduto, $nome, $descricao, $quantidade, $preco, $img);
        redirecionar("produto/listarprodutos", $dados);
    } else {
        $dados["produto"] = pegartodosprodutos($idproduto);
        exibir("produtos/formularioproduto", $dados);
    }
}

/* * anon */
function buscar() {
    $nome = $_POST['busca'];
    $dados['produtos'] = BuscarProdutosPorNome($nome);
    exibir("produtos/resultadoPesquisa", $dados);
}
