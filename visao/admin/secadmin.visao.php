
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
    <p id="cen">ID Admin</p><input id="cen" type="text" name="idadm"><br><br>
    <p id="cen">Senha</p><input id="cen" type="password" name="senhadm"><br><br>
    <button type="submit" id="texte">Enviar</button>
</form>