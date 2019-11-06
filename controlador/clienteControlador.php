<?php

require_once "modelo/ClienteModelo.php";
require_once "modelo/enderecoModelo.php";

/** admin */
function ver($id) {
    $dados["cliente"] = pegarClientePorId($id);
    $dados["enderecos"] = listarEnderecos($id);
    exibir("cliente/visualizar", $dados);
}

/** admin */
function tornarAdm ($id) {
    TornarUsuarioAdm($id);
    redirecionar("cliente/listarcliente");
}

/** anon */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha1"];
        $cpf = $_POST["cpf"];
        $ddn = $_POST["ddn"];
        $tipo = "user";

        $errors = array();


        if (strlen(trim($nome)) == 0) {
            $errors[] = "Você deve inserir um nome.";
        }

        if (strlen(trim($email)) == 0) {
            $errors[] = "Você deve inserir um e-mail.";
        }

        if (strlen(trim($senha)) == 0) {
            $errors[] = "Você deve inserir um senha.";
        }
        
        if (strlen(trim($cpf)) == 0) {
            $errors[] = "Você deve inserir um cpf.";
        }
        if (strlen(trim($ddn)) == 0) {
            $errors[] = "Você deve inserir uma data de nascimento.";
        }
        
        if (strlen(trim($tipo)) == 0) {
            $errors[] = "Você deve inserir um tipo.";
        }

        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/formulario", $dados);
        } else {
            $msg = adicionarCliente($nome, $email, $senha, $cpf, $ddn, $tipo);
            echo $msg;
            redirecionar("cliente/listarcliente");
        }
    } else {
        exibir("cliente/formulario");
    }
}

/** anon */
function OLHAR() {

    if (ehPost()) {
        $email = $_POST["email"];
        $senha = $_POST["senha1"];

        $errors = array();

        if (strlen(trim($email)) == 0) {
            $errors[] = "Você deve inserir um e-mail.";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = "Inserir um e-mail válido.";
            }
        }


        if (strlen(trim($senha)) == 0) {
            $errors[] = "Você deve inserir uma senha.";
        }

        if (strlen(trim($senha) < 8)) {
            $errors[] = "Senha muito fraca.";
        }

        if (strlen(trim($senha)) > 20) {
            $errors[] = "Senha muito grande.";
        }

        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/formulario", $dados);
        } else {
            $msg = adicionarCliente($email, $senha);
            redirecionar("cliente/listarcliente");
        }
    } else {
        exibir("cliente/formulario");
    }
}

/** admin */
function listarcliente() {
    $dados = array();
    $dados ["clientes"] = pegartodosclientes();
    exibir("cliente/listar", $dados);
}


function mostrar() {
    exibir("cliente/listar");
}

/** admin */
function deletar($id) {
    $msg = deletarCliente($id);
    redirecionar("./cliente/listarcliente");
}

/** admin */
function editar($id) {
    if (ehPost()) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        editarCliente($id,$email, $senha);
        redirecionar ("cliente/listar");
    } else {
        $dados["cliente"] = pegarusuarioPorId($id);
        exibir("cliente/formulario", $dados);
    }
}