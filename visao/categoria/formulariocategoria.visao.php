<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>

<form action="" method="POST">
    Categoria:<input type="text" name="categoria" value="<?=@$categoria['categoria']?>"><br><br>
    Descrição:<input type="text" name="descricao" value="<?=@$categoria['descricao']?>"><br><br>
    Sub-categoria:<input type="text" name="subcategoria" value="<?=@$categoria['subcategoria']?>"><br><br>
    <button type="submit">Enviar</button>
</form>