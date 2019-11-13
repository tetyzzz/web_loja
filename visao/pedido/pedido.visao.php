<h1>Minha Compra</h1>

<strong><p>Produtos:</p></strong>
<?php
    foreach ($produtos as $produto) {
        echo $produto['nome']."<br>";
    }
?>

<strong><p>Total:</p></strong>
<p><?=$total?></p>

<strong><p>Endereço de entrega:</p></strong>
<br><br>

<strong><p>TEM ALGUM CUPOM?:</p></strong>
<form method="POST" action="">
    <label for="cupom">nome do cupom::</label>
    <input id="cupom" class="form-control" type="text" name="cupom">
    <button type="submit" class="btn btn-primary">aplicar</button>
</form>

<button id="texte"><a id="tex" href="" class="btn btn-primary">COMPRAR</a></button>