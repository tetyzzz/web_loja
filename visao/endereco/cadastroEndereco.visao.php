<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>

<link rel="stylesheet" href="./publico/css/lispro.css">
<link rel="stylesheet" href="./publico/css/proform.css">

<br><br>
    <form action="" method="POST">
        <p id="cen">Logradouro</p><input id="cen" type="text" class="caixaEntraInfo" name="logradouro" value="<?=@$endereco['logradouro']?>"><br><br>
        <p id="cen">Número</p><input id="cen" type="text" class="caixaEntraInfo" name="numero" value="<?=@$endereco['numero']?>"><br><br>
        <p id="cen">Complemento</p><input id="cen" type="text" class="caixaEntraInfo" name="complemento" value="<?=@$endereco['complemento']?>"><br><br>
        <p id="cen">Bairro</p><input id="cen" type="text" class="caixaEntraInfo" name="bairro" value="<?=@$endereco['bairro']?>"><br><br>
        <p id="cen">Cidade</p><input id="cen" type="text" class="caixaEntraInfo" name="cidade" value="<?=@$endereco['cidade']?>"><br><br>
        <p id="cen">CEP</p><input id="cen" type="text" class="caixaEntraInfo" name="cep" value="<?=@$endereco['cep']?>"><br><br>
        <button id="texte" class="botao">Cadastrar</button>
    </form>
