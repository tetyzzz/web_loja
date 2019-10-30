<link rel="stylesheet" href="./publico/css/lispro.css">

<h3 id="lis">VER DETALHES DO PRODUTO</h3>
<p><strong>Nome:</strong><?= $produto['nome'] ?></p>
<p><strong>Descrição:</strong> <?=@$produto['descricao']?></p>
<p><strong>Quantidade no Estoque:</strong> <?=@$produto['quantidade']?></p>
<p><strong>Preço:</strong> <?=@$produto['preco']?></p>