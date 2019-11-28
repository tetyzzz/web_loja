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


function registrarPedido ($idcliente, $idendereco, $idFormaPagamento,  $produtos) {
    $sql = "INSERT INTO pedido (idcliente, idendereco, idFormaPagamento, DataCompra) "
            . "VALUES ($idcliente, $idendereco, $idFormaPagamento, curdate())";
    
    $cnx = conn();
    
    $resul = mysqli_query($cnx, $sql);
    if (!$resul) {
        die(mysqli_error($cnx));
    }
    
    $idPedido = mysqli_insert_id($cnx);
 
    foreach ($produtos as $produto) {
        $idProduto = $produto;        
        $sql = "INSERT INTO pedido_produto (idProduto, idPedido, quantidade) VALUES ($idProduto, $idPedido, 1)";
        $resultado = mysqli_query ($cnx = conn(), $sql);
    }
    if(!$resultado) { die('Erro ao adicionar um pedido'. mysqli_error($cnx));}
    return 'Pedido salvo <br> <a href="./sacola/index/" class="btn btn-primary">Voltar</a>';  
}


function pegarPedidosLoca($cidade) {
    $comando = "select cliente.cpf, pedido.idpedido, pedido.DataCompra, endereco.cep from cliente
    inner join pedido 
    on cliente.id=pedido.idcliente
    inner join endereco 
    on pedido.idendereco=endereco.idendereco 
    where endereco.cidade='$cidade'";
    
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}

function pegarTodosPedidos (){
    $sql = "SELECT p.*, fp.descricao, e.logradouro "
            . "FROM pedido p "
            . "INNER JOIN formapagamento fp "
            . "ON p.idFormaPagamento = fp.idFormaPagamento "
            . "INNER JOIN cliente c "
            . "ON p.id = c.id "
            . "INNER JOIN endereco e "
            . "ON c.id = e.id";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos[] = $linha;
    }
    return $pedidos; 
}

function pegarPedidosTempo($data1, $data2) {
    $comando = "select pedido.idpedido, pedido.DataCompra, cliente.cpf from pedido "
            . "inner join cliente on pedido.idcliente=cliente.id "
            . "where DataCompra between '$data1' and '$data2'";
    $cnx = conn();
    
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}


function pegarFaturamentoPeriodo($data1, $data2) {
    $comando = "select pedido.idpedido, pedido.DataCompra, 
    sum(produto.preco) as valorPedido 
    from pedido 
    inner join pedido_produto on pedido.idpedido=pedido_produto.idpedido 
    inner join produto on pedido_produto.idproduto=produto.idproduto 
    group by pedido_produto.idpedido 
    having pedido.DataCompra between '$data1' and '$data2';";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
    
}
        
        
function pegarPedidosLocalizacao($cidade) {
    $comando = "select cliente.cpf, pedido.idPedido, pedido.DataCompra, endereco.CEP from cliente
    inner join pedido 
    on cliente.idcliente=pedido.idcliente 
    inner join endereco 
    on pedido.idEndereco=endereco.idEndereco 
    where endereco.cidade='$cidade'";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}
function pegarFaturamentoTempo($data1, $data2) {
    $comando = "select pedido.idPedido, pedido.DataCompra, 
    sum(produto.Preco) as valorPedido 
    from pedido 
    inner join pedido_produto on pedido.idPedido=pedido_produto.idPedido 
    inner join produto on pedido_produto.idProduto=produto.idProduto 
    group by pedido_produto.idPedido 
    having pedido.DataCompra between '$data1' and '$data2';";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}