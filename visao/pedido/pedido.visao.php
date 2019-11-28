<h1>Minha Compra</h1>

<strong><p>Produtos:</p></strong>
<?php
    foreach ($produtos as $produto) {
        echo $produto['nome']."<br>";
    }
?>

<strong><p>Subtotal:</p></strong>
<p>R$<?=$total?></p>
<strong><p>Desconto:</p></strong>
<p><?=@$cupom['desconto']?>%</p>
<strong><p>Total:</p></strong>
<p>R$<?=$total-(@$cupom['desconto']/100*$total)?></p>

<strong><p>TEM ALGUM CUPOM?:</p></strong>
<form method="POST" action="./pedido/index">
    <label for="cupom">nome do cupom:</label>
    <input id="cupom" class="form-control" type="text" name="cupom">
    <button type="submit" class="btn btn-primary">aplicar</button>
</form>

<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>

<form action="./pedido/salvarPedido" method="POST">
<strong><p>Endereço de entrega:</p></strong>
<select name="endereco">
    <option value=0> Selecione </option>
   <?php
   foreach ($enderecos as $endereco):?>
    <option value="<?=$endereco['id']?>"> Rua: <?=$endereco['logradouro']?> . Cidade: <?=$endereco['cidade']?> </option>
   <?php
   endforeach;
   ?>
</select>
<br><br>
<strong><p>Formas de pagamento:</p></strong>
<select name="formaPagamento">
    <option value=0> Selecione </option>
   <?php
   foreach ($formasPagamento as $formaPagamento):?>
    <option value="<?=$formaPagamento['idFormaPagamento']?>"><?=$formaPagamento['descricao']?></option>
   <?php
   endforeach;
   ?>
</select>
<br><br>
<li id="waa" ><button id="aves">COMPRAR</button><br><br></li>
</form>



