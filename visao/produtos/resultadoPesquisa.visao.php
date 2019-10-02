<link rel="stylesheet" href="./publico/css/lispro.css">
<h3 id="lis">Resultados da pesquisa</h3>
<table clas="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>            
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
        <tr>

            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td><br>
        </tr>
    <?php endforeach; ?>
    <hr>

</table> 
    <hr>
<br>