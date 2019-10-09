<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>

<link rel="stylesheet" href="./publico/css/proform.css">
<link rel="stylesheet" href="./publico/css/lispro.css">

<form action="" method="POST">
    <p id="cen">E-mail</p><input id="cen" type="text" name="email" value="<?=@$cliente['email']?>"><br><br>
    <p id="cen">Senha</p><input id="cen" type="password" name="senha1" value="<?=@$cliente['senha']?>"><br><br>
    <p id="cen">Tipo</p><input id="cen" type="text" name="tipo" value="<?=@$cliente['tipo']?>"><br><br>
    <button type="submit" id="texte">Enviar</button>
</form>