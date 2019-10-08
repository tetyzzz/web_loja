<?php

require_once "modelo/produtoModelo.php";

/**anon */
function paginaprincipal() {
    $dados = array();
    $dados ["produtos"] = pegartodosprodutos();
    exibir("pgnprincipal", $dados);
}