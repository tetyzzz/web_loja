<?php

require_once "modelo/produtoModelo.php";

function paginaprincipal() {
    $dados = array();
    $dados ["produtos"] = pegartodosprodutos();
    exibir("pgnprincipal", $dados);
}