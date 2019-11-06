<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>
<link rel="stylesheet" href="./publico/css/proform.css">

<form action="" method="POST" enctype="multipart/form-data">
    <p id="cen">Nome</p><input id="cen" type="text" name="nome" value="<?= @$produto['nome'] ?>"><br>
    <p id="cen">Descrição</p><input id="cen" type="text" name="descricao" value="<?= @$produto['descricao'] ?>"><br>
    <p id="cen">Quantidade</p><input id="cen" type="" name="quantidade" value="<?= @$produto['nome'] ?>"><br>
    <p id="cen">Preço un.</p><input id="cen" type="" name="preco" value="<?= @$produto['preco'] ?>"><br><br><br>
    <p id="cen">Imagem<input placeholder="Imagem" type="file" name="img" value="<?= @ $produto['image'] ?>"> <br>

    <select id="cen" name="idcategoria">
        <option  id="cen" value="">Categorias</option>
        <?php foreach ($categorias as $categoria): ?>
            <option value="<?= @$categoria['idcategoria'] ?>"><?= @$categoria['categoria'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit" id="texte">Enviar</button>
</form>
