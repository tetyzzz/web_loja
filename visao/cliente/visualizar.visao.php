<link rel="stylesheet" href="./publico/css/lispro.css">
<h3 id="lis">VER DETALHES DO CLIENTE</h3>
<p><strong>Id: </strong><?= $cliente['id'] ?> </p>
<p><strong>Email: </strong><?= $cliente['email'] ?> </p>
<p><strong>Senha: </strong><?= $cliente['senha'] ?> </p>
<br><br>

<h3 id="lis">VER ENDERECOS CADASTRADOS</h3>
<table>
    <thead>
        <tr>
            <th>Logradouro</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
        </tr>
    </thead>
<?php foreach ($enderecos as $linha): ?>
    <tr>
        <td><?=$linha['logradouro']?></td>
        <td><?=$linha['numero']?></td>
        <td><?=$linha['complemento']?></td>
        <td><?=$linha['bairro']?></td>
        <td><?=$linha['cidade']?></td>
    </tr>
<?php endforeach; ?> 
</table>
<br><br>

<td><a href="./endereco/novoende/<?=$cliente['id']?>"><Button id="texte">Adicionar novo endereço</button></a></td>
