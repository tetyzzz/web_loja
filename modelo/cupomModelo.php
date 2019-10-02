<?php

function adicionarcupom($nomecupom, $desconto) {
    $sql = "INSERT INTO cupom (cupom, desconto) values ('$nomecupom', '$desconto')";
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
