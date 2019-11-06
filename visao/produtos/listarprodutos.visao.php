<link rel="stylesheet" href="./publico/css/lispro.css">


<h2 id="lis">Listar Produtos</h2>

<table clas="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>            
            <th>Mais</th>            

        </tr>
    </thead>

    <?php foreach ($produtos as $produto): ?>

        <tr>
            <td><img src="<?=$produto['image']?>" style="width:100px; height: auto;"></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>

            <td><a href="./produto/ver/<?= $produto['idproduto'] ?>"><button id="texte">Detalhes</button></a></td>
            <td><a href ="./produto/editar/<?= $produto['idproduto'] ?>"><button id="texte">Alterar</button></a></td>
            <td><a href ="./produto/deletar/<?= $produto['idproduto'] ?>"><button id="texte">Deletar</button></a></td>
            <td><a href ="./car/adicionar/<?= $produto['idproduto'] ?>"><button id="texte">Carrinho</button></a></td>
        </tr>

    <?php endforeach; ?>
<hr>
</table>
<hr>
<br>
<button id="textes"><a id="texs" href="produto/adicionar" class="btn btn-primary">Novo Produto</a></button>
