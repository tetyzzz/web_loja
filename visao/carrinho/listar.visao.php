<link rel="stylesheet" href="./publico/css/car.css">
<link rel="stylesheet" href="./publico/css/proform.css">

<h2 id ="nome">Carrinho</h2>

<table clas="table" id="arara">
    <thead>
        <tr id=" tr">
            <th id="tr">NOME</th>
            <th id="tr">PREÇO</th>            
        </tr>
    </thead>

    <?php foreach ($produtos as $produto): ?>

        <tr>
            <td id="tr"><?= $produto['nome'] ?></td>
            <td id="tr"><?= $produto['preco'] ?></td>

            <td><button id="texte" class="botao"><a id="tex" href="./car/deletar/<?=$produto['idproduto']?>">Remover</a></button></td>
        </tr>

<?php endforeach; ?>

</table>
<br>
<button id="texte"><a id="tex" href="./principal" class="btn btn-primary">Adicionar Produto</a></button><br><br><br>
<button id="texte"><a id="tex" href="./pedido" class="btn btn-primary">Finalizar Pedido</a></button>