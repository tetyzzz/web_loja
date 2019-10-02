<h2>Listar Endereços</h2>

<table clas="table">
    <thead>
        <tr>
            <th>Cidade</th>
            <th>Bairro</th>            
            <th>CEP</th>            

        </tr>
    </thead>

    <?php foreach ($enderecos as $endereco): ?>

        <tr>
            <td><?= $endereco['nome'] ?></td>
            <td><?= $endereco['preco'] ?></td>

            <td><a href ="./endereco/adicionar/<?= $endereco['id'] ?>">Adicionar ao carrinho</a></td>
        </tr>

    <?php endforeach; ?>

</table>
<br>
<a href="endereco/listar" class="btn btn-primary">Listar Endereço</a>
