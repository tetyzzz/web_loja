<?php ?>

<link rel="stylesheet" href="./publico/css/pgnp.css">
<link rel="stylesheet" href="./publico/css/lispro.css">

    
    
    <?php foreach ($produtos as $produto): ?>
<div style="width: 30%; display: inline; float: left; margin-left: 50px;">
            <at><img src="<?=$produto['image']?>" style="width:100%; height: auto;"></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td><br>
            <td><a href="car/adicionar/<?= $produto['idproduto'] ?>">Comprar</a></td>
</div>
       
    <?php endforeach; ?>