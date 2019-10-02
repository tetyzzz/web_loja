<?php

function adicionarcategoria($categoria, $descricao, $subcategoria) {
    $sql = "INSERT INTO categorias (categoria, descricao, subcategoria) values ('$categoria', '$descricao', '$subcategoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao cadastrar categoria' . mysqli_error($cnx));
    }
    return 'Categoria cadastrada com sucesso!';
}

function pegarcategoriaPorId($idcategoria) {
    $sql = "select * from categorias where idcategoria = '$idcategoria'";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_assoc($resultado);
    return $categoria;
}

function pegartodascategorias() {

    $sql = "SELECT * FROM categorias";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = array();

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $categoria[] = $linha;
    }
    return $categoria;
}

function deletarcategoria($idcategoria) {
    $sql = "DELETE FROM categorias where idcategoria = $idcategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!resultado) {
        die('Erro ao deletar categoria' . mysqli_error($cnx));
    }
    return 'Categoria cadastrada com sucesso!';
}

function editarcategoria($idcategoria, $categoria, $descricao, $subcategoria) {
    $sql = "UPDATE categorias SET categoria = '$categoria', descricao= '$descricao', subcategoria = '$subcategoria' where idcategoria = $idcategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar categoria' . mysqli_error($cnx));
    }
    return "Categoria alterada com sucesso!";
}
