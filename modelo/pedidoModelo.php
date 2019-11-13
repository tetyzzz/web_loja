<?php

function getPedidoForDate($data)
{
    $sql = "CALL sp_PedidosByDataCompra ('$data')";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
            $pedidos[] = $linha;
    }
    return $pedidos;
}
function getPedidoByCity($cidade)
{
    $sql = "CALL sp_PedidosPorCidade ('$cidade')";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos_municipio = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
            $pedidos_municipio[] = $linha;
    }
    return $pedidos_municipio;
}


function registrarPedido ($idFormaPagamento, $idcliente, $idendereco, $desconto, $produtos) {
    $sql = "INSERT INTO pedido (idFormaPagamento, idusuario, idendereco, des) VALUES ('$idFormaPagamento','$idusuario' '$idendereco', '$valorcupom')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    $idPedido = mysqli_insert_id($cnx);
    foreach ($produtosCarrinho as $produtos) {
        $idProduto = $produtos["idproduto"];
        $quantidade = 1;

        $sql = "INSERT INTO pedido_produto (idProduto, idPedido, quantidade) VALUES ('$idProduto', '$idPedido', '$quantidade')";
        $resultado = mysqli_query ($cnx = conn(), $sql);
    }
    if(!$resultado) { die('Erro ao adicionar um pedido'. mysqli_error($cnx));}
    return 'Pedido salvo <br> <a href="./sacola/index/" class="btn btn-primary">Voltar</a>';  
}