<?php 
    if (ehPost()){
        foreach ($errors as $erro){
            echo "$erro<br>";
        }
    }
?>


<form action="" method="POST">
    
    Nome Completo: <input type="text" name="nome" placeholder="-" value="<?=@$cliente['nome']?>">
    <br><br><br>
    Email: <input type="text" name="email" placeholder="nome@example.com" value="<?=@$cliente['email']?>">
    <br><br><br>
    Senha: <input type="password" name="senha" placeholder="•••••" value="<?=@$cliente['senha']?>">
    <br><br><br>
    Telefone: <input type="text" name="tel" placeholder="(DDD) 12345678" value="<?=@$cliente['tel']?>">
    <br><br><br>
    CPF: <input type="text" name="cpf" placeholder="___.___.___-__" value="<?=@$cliente['cpf']?>">
    <br><br><br>
    Data de Nascimento: <input type="text" name="nasci" placeholder="__/__/____" value="<?=@$cliente['nasci']?>">
    <br><br><br>
    Endereço: <input type="text" name="endereco" placeholder="-" value="<?=@$cliente['endereco']?>">
    <br><br><br>

    <button type="submit">Enviar</button>
</form>
