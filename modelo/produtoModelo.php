<?php

function adicionarProduto($nome, $descricao, $quantidade, $preco, $img, $idcategoria) {
    $sql = "INSERT INTO produto (nome, descricao, quantidade, preco, image, idcategoria) values ('$nome', '$descricao', '$quantidade', '$preco', '$img', '$idcategoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao cadastrar produto' . mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
}
function pegarprodutoPorId($idproduto) {
    $sql = "select * from produto where idproduto = '$idproduto'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function pegartodosprodutos() {

    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function deletarProduto($idproduto) {
    $sql = "DELETE FROM produto where idproduto = $idproduto";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!resultado) {
        die('Erro ao deletar produto' . mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
}

function editarproduto($idproduto, $nome, $descricao, $quantidade, $preco, $img) {
    $sql = "UPDATE produto SET nome = '$nome', descricao = '$descricao', quantidade = '$quantidade', image = '$img', preco= '$preco' where idproduto = '$idproduto'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    
    if (!$resultado) {die('Error ao alterar produto' . mysqli_error($cnx));}
    return 'Produto alterado com sucesso!';
}

function BuscarProdutosPorNome($nome) {
    $sql = "SELECT * FROM produto WHERE nome LIKE '%$nome%'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($produto = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $produto;
    }
    return $produtos;
}

