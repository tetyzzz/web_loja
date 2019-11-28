<h2>Lista de pedidos (<?php echo $data1." até ".$data2 ?>):</h2>	
<div id="listaPedidos">

    <div id="campos">
        <div id="campoNumeroPedido">
            <h3>Pedido</h3>
        </div>        
        <div id="campoCpfComprador">
            <h3>Cpf comprador</h3>
        </div>
        <div id="campoDataPedido">
            <h3>Data</h3>
        </div>
    </div>
<hr size="" width="100%">
<?php foreach ($pedidos as $pedido): ?>
    <div class="cadaPedido">
        <div class="sobreNumeroPedido">
            <div>
                <p><?=$pedido['idpedido'] ?></p>
            </div>
        </div>
        <div class="sobreCpfComprador">
            <p><?= $pedido['cpf'] ?></p>
        </div>
        <div class="sobreDataPedido">
            <p><?= $pedido['DataCompra'] ?></p>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div><br>
<a href="./pedido/listarPedidopeloTempo"><button class="botao">Voltar</button></a>

<style>
#listaPedidos{
	display: flex;
	flex-direction: column;
	width: 50%;
	margin: auto;
	font-family: 'Cinzel', serif;
	color: #6d6b6a;
}
#campos{
	display: flex;
	flex-direction: row;
	margin-bottom: 20px;
}
#campoNumeroPedido{
	width: 40%;
}
#campoCpfComprador{
        width: 30%;
	text-align: left;
}
#campoDataPedido{
        width: 30%;
	text-align: right;
}
.cadaPedido{
	display: flex;
	flex-direction: row;
	width: 100%;
}
.sobreNumeroPedido{
	width: 40%;
	display: flex;
	flex-direction: row;
}
.sobreCpfComprador{
        width: 30%;
	text-align: left;
}
.sobreDataPedido{
        width: 30%;
	text-align: right;
}
</style>