
<h2>Listar cupons</h2>

<table clas="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Desconto</th>
        </tr>
    </thead>
    
    <?php foreach ($cupons as $cupom): ?>
    
    <tr>
        <td><?=$cupom['nomecupom']?></td>
        <td><a href="./cupom/ver/<?=$cupom['idcupom']?>">Detalhes</a></td>
        <td><a href="./cupom/editar/<?=$cupom['idcupom']?>">Alterar</a></td>
        <td><a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a></td>        
    </tr>
    
    <?php endforeach ?>    
</table>
<br>
<a href="cupom/adicionar" class="btn btn-primary">Novo cupom</a>
