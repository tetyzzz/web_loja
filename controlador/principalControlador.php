<?php

require_once "modelo/produtoModelo.php";

/**anon */
function index() {
    $dados = array();
    $dados ["produtos"] = pegartodosprodutos();
    exibir("pgnprincipal", $dados);
}