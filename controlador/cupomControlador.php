<?php

require_once "modelo/cupomModelo.php";

function ver($idcupom) {
    $dados["cupom"] = pegarcupomPorId($idcupom);
    exibir("cupom/visualizar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nomecupom = $_POST["cupom"];
        $desconto = $_POST["desconto"];
        
        $errors = array();
        if (strlen(trim($nomecupom)) == 0) {
            $errors[] = "Você deve inserir um nome ao cupom.";
        }

        if (strlen(trim($desconto)) == 0) {
            $errors[] = "Você deve inserir um desconto.";
        }

        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cupom/formularioCupom", $dados);
        } else {
            $msg = adicionarcupom($nomecupom, $desconto);
            echo $msg;
            redirecionar("cupom/listarCupom");
        }
        
    } else {
        exibir("cupom/formularioCupom");
    }
}

function listarcupom() {
    $dados = array();
    $dados ["cupom"] = pegartodoscupom();
    exibir("cupom/listarCupom", $dados);
}