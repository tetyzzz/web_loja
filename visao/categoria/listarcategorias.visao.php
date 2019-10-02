<link rel="stylesheet" href="./publico/css/lispro.css">

<h2 id="lis">Listar Categorias</h2>

<table clas="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Categoria</th>


        </tr>
    </thead>

    <?php foreach ($categoria as $categoria): ?>

        <tr>
            <td><?= $categoria['idcategoria'] ?></td>
            <td><?= $categoria['categoria'] ?></td>

            <td><a href="./categoria/ver/<?= $categoria ['idcategoria'] ?>"><button id="texte">Detalhes</button></a></td>
            <td><a href ="./categoria/editar/<?= $categoria['idcategoria'] ?>"><button id="texte">Alterar</button></a></td>
            <td><a href ="./categoria/deletar/<?= $categoria['idcategoria'] ?>"><button id="texte">Deletar</button></a></td>
        </tr>

    <?php endforeach; ?>
    <hr>

</table>
<hr>
<br>
<button id="textes"><a id="texs" href="./categoria/adicionar" class="btn btn-primary">Nova categoria</a></button>
