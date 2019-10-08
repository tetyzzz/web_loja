<?php

function adicionarcupom($nomecupom, $desconto) {
    $sql = "INSERT INTO cupom (nomecupom, desconto) values ('$nomecupom', '$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao cadastrar cupom' . mysqli_error($cnx));
    }
    return 'Cupom cadastrado com sucesso!';
}

function pegartodoscupom() {
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = array();

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $cupom[] = $linha;
    }
    return $cupom;
}

function pegarcupomPorId($idcupom) {
    $sql = "select * from cupom where idcupom = '$idcupom'";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}

function editarcupom($idcupom, $nomecupom, $desconto) {
    $sql = "UPDATE cupom SET nomecupom = '$nomecupom', desconto= '$desconto' where idcupom = $idcupom";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar cupom' . mysqli_error($cnx));
    }
    return "Cupom alterado com sucesso!";
}

function deletarcupom($idcupom) {
    $sql = "DELETE FROM cupom where idcupom = $idcupom";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!resultado) {
        die('Erro ao deletar cupom' . mysqli_error($cnx));
    }
    return 'Cupom cadastrada com sucesso!';
}