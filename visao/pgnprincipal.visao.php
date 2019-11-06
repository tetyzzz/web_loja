<?php ?>

<link rel="stylesheet" href="./publico/css/pgnp.css">
<link rel="stylesheet" href="./publico/css/lispro.css">


<h2 id="P1">Página Principal</h2>

<h3 id="lis">Produtos cadastrados</h3>
<table clas="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>            
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><img src="<?=$produto['image']?>" style="width:100px; height: auto;"></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td><br>
            <td><a href="car/adicionar/<?= $produto['idproduto'] ?>">Comprar</a></td>
        </tr>
    <?php endforeach; ?>
    <hr>
</table> 
<hr>
<br>