<?php
require_once "modelo/proestoqueModelo.php";

/**admin*/
function ver($idproduto) {
    $dados["produto"] = pegarprodutoPorId($idproduto);
    exibir("produtos/proestoque", $dados);
}
