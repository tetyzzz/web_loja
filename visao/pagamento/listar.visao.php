<h2>Listar Formas de Pagamento</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID </th>
            <th>Forma de pagamento</th>  

        </tr>
    </thead>
    
    <?php foreach ($pagamentos as $pagamento): ?>
    <tr>
        <td><?=$pagamento['idFormaPagamento']?></td>

        <td><?=$pagamento['descricao']?></td>


        <td><a id="tex" href="./formapaga/ver/<?=$pagamento['idFormaPagamento']?>" class="btn btn-secondary">Ver</a></td>

        <td><a id="tex" href="./formapaga/editar/<?=$pagamento['idFormaPagamento']?>" class="btn btn-info">Editar</a></td>

        <td><a id="tex" href="./formapaga/deletar/<?=$pagamento['idFormaPagamento']?>" class="btn btn-danger">Deletar</a></td>
    </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 
<a href="./formapaga/adicionar" class="btn btn-primary">Adicionar nova Forma de Pagamento</a>
