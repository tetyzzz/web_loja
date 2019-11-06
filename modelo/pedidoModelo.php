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

function recebeDados ($pagamento) {
    
}
