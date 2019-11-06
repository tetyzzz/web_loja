
<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>
<link rel="stylesheet" href="./publico/css/proform.css">
<link rel="stylesheet" href="./publico/css/lispro.css">


<a href="./cliente/listarcliente">Usuarios</a>
<a href="./produto/listarprodutos">Produtos</a>
<a href="./categoria/listarcategorias">Categorias</a>
