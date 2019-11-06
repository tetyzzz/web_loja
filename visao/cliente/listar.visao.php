<link rel="stylesheet" href="./publico/css/lispro.css">
<h3 id="lis">Listar clientes</h3>

<table clas="table">
    <thead>
        <tr>
            <th>Email</th>
            <th>Mais</th>
        </tr>
    </thead>
    
    <?php foreach ($clientes as $cliente): ?>
    
    <tr>
        <td><?=$cliente['email']?></td>
        <td><a href="./cliente/ver/<?=$cliente['id']?>"><button id="texte">Detalhes</button></a></td>
        <td><a href="./cliente/editar/<?=$cliente['id']?>"><button id="texte">Alterar</button></a></td>
        <td><a href="./cliente/deletar/<?=$cliente['id']?>"><button id="texte">Deletar</button></a></td>        
        <?php if($cliente['tipo'] != 'admin'):?>
            <td><a href="./cliente/tornarADM/<?=$cliente['id']?>"><button id="texte">Tornar ADM</button></a></td>
        <?php endif;?>
    </tr>
    
    <?php endforeach; ?>
    <hr>    
</table>
    <hr>
<br>
<button id="textes"><a id="texs" href="./cliente/olhar" class="btn btn-primary">Novo cliente</a></button>
