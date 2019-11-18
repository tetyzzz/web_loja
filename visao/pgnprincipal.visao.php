<?php ?>

<link rel="stylesheet" href="./publico/css/pgnp.css">
<link rel="stylesheet" href="./publico/css/lispro.css">

<html>  
    
    <?php foreach ($produtos as $produto): ?>
<div style="width: 20%; display: inline; float: left; margin-left: 50px;">
    <at><a href="produto/ver/<?= $produto['idproduto'] ?>"><img src="<?=$produto['image']?>" style="width:100%; height: auto;"></a></td>
            <td style="font-size: 20px"><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td><br>
            <td><a href="car/adicionar/<?= $produto['idproduto'] ?>">Comprar</a></td>
</div>
       
    <?php endforeach; ?>

</html>