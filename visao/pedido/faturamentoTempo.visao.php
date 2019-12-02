<h2>Lista de pedidos (<?php echo $data1 . " até " . $data2 ?>):</h2>	
<div id="listaPedidos">

    <div id="campos">
        <div id="campoNumeroPedido">
            <h3>Pedido</h3>
        </div>        
        <div id="campoDataPedido">
            <h3>Data</h3>
        </div>
        <div id="campoValorPedido">
            <h3>Valor por pedido</h3>
        </div>
    </div>
    <hr size="" width="100%">
    <?php
    $totalFaturamento = 0;
    foreach ($pedidos as $pedido):
        ?>
        <div class="cadaPedido">
            <div class="sobreNumeroPedido">
                <div>
                    <p><?= $pedido['idpedido'] ?></p>
                </div>
            </div>
            <div class="sobreDataPedido">
                <p><?= $pedido['DataCompra'] ?></p>
            </div>
            <div class="sobreValorPEdido">
                <p><?= $pedido['valorPedido'] ?></p>
            </div>
        </div>
        <hr size="" width="100%">
        <?php
        $totalFaturamento += $pedido['valorPedido'];
    endforeach;
    ?>
        <h3 id="totalFaturamento">Total faturado: R$<?= $totalFaturamento ?></h3>
</div><br>

<a href="./pedido/listarPedidosTempo"><button class="botao">Voltar</button></a>
