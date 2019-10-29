<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>

<link rel="stylesheet" href="./publico/css/proform.css">
<link rel="stylesheet" href="./publico/css/lispro.css">
<p>Novo Cliente</p>
<form action="" method="POST">
    <p id="cen">Nome</p><input id="cen" type="text" name="nome" value="<?=@$cliente['nome']?>"><br><br>
    <p id="cen">E-mail</p><input id="cen" type="text" name="email" value="<?=@$cliente['email']?>"><br><br>
    <p id="cen">Senha</p><input id="cen" type="password" name="senha1" value="<?=@$cliente['senha']?>"><br><br>
    <p id="cen">CPF</p><input id="cen" type="text" name="cpf" value="<?=@$cliente['cpf']?>"><br><br>
    <p id="cen">Data de Nascimento</p><input id="cen" type="text" name="ddn" value="<?=@$cliente['ddn']?>"><br><br>
    <p id="cen">Tipo</p>
          <select name="tipo" style="padding: 10px 52px;">
        <option value="null">Tipo de Usuario</option>
        <option value="user">Cliente</option>
        <option value="admin">Administrador</option>
    </select>    
        
    <button type="submit" id="texte">Enviar</button>
    
</form>