<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

/**admin*/
function ver($idproduto) {
    $dados["produto"] = pegarprodutoPorId($idproduto);
    exibir("produtos/visualizar", $dados);
}

/** anon */
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
            $msg = adicionarProduto($nome, $descricao, $quantidade, $preco, $idcategoria);
            redirecionar("produto/listarprodutos");
        }
    } else {
        $dados["categorias"] = pegartodascategorias();
        exibir("produtos/formularioproduto", $dados);
    }

    $imagem_temp_name = $_FILES["imagem"]["tmp_name"]; # vai pegar o nome temporário do arquivo da imagem
    $name_imagem = $_FILES["imagem"]["name"]; # vai pegar o nome real do arquivo da imagem

    $imagem = uploadImagem($imagem_temp_name, $name_imagem); # retorna o caminho da imagem

    adicionarProduto($nome, $preco, $descricao, $imagem, $estoque);

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

        editarproduto($idproduto, $nome, $descricao, $quantidade, $preco);
        redirecionar("produto/listarprodutos", $dados);
    } else {
        $dados["produto"] = pegartodosprodutos($idproduto);
        exibir("produtos/formularioproduto", $dados);
    }
}

/**anon*/
function buscar(){
    $nome = $_POST['busca'];
    $dados['produtos']= BuscarProdutosPorNome($nome);
    exibir("produtos/resultadoPesquisa", $dados);
}