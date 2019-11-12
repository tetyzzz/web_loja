<?php
    if (ehPOST()){
        foreach($errors as $erro){
            echo "$erro <br>";
        }
    }
?>

<h1> Formas de Pagamento </h1>

<form action="" method="POST">
  Insira a forma de pagamento: <input type="text" name="descricao" value="<?= @ $pagamento['descricao'] ?>"> <br> <br>
	<button type="submit">Enviar</button>
</form>

