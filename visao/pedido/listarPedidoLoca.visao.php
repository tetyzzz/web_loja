<h2>Lista de pedidos (<?=$cidade ?>):</h2>	
<div id="listaPedidos">

    <div id="campos">
        <div id="campoNumeroPedido">
            <h3>Pedido</h3>
        </div> 
        <div id="campoCpfComprador">
            <h3>Cpf comprador</h3>
        </div>
        <div id="campoCep">
            <h3>CEP</h3>
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
        <div class="sobreCep">
            <p><?= $pedido['cep'] ?></p>
        </div>
    </div>
    <hr size="" width="100%">
<?php endforeach; ?>
</div><br>
<a href="./pedido/listarPedidoLoca"><button class="botao">Voltar</button></a>

