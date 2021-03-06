<?php

function adicionarCliente($nome, $email, $senha1, $cpf, $ddn, $tipo) {
    $sql = "INSERT INTO cliente (nome, email, senha, cpf, ddn, tipo) values ('$nome', '$email', '$senha1', '$cpf', '$ddn', '$tipo')";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao cadastrar cliente' . mysqli_error($cnx));
    }
    return 'Cliente cadastrado com sucesso!';
}

function pegartodosclientes() {
    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query(conn(), $sql);
    $clientes = array();

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $linha;
    }
    return $clientes;
}

function pegarClientePorId($id) {
    $sql = "select * from cliente where id = $id";
    $resultado = mysqli_query(conn(), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function TornarUsuarioAdm($id) {
    $sql = "UPDATE cliente SET tipo = 'admin' where id = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao alterar cliente' . mysqli_error($cnx));
    }
    return 'Bem Vindo, ADM!';
}

function deletarCliente($id) {
    $sql = "delete from cliente where id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!resultado) {
        die('Erro ao deletar cliente.' . mysqli_error($cnx));
    }

    return 'Cliente cadastrado com sucesso!';
}

function editarCliente($id, $email, $senha) {
    $sql = "UPDATE cliente SET email = '$email', senha = '$senha' where id = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);

    if (!$resultado) {
        die('Erro ao alterar cliente' . mysqli_error($cnx));
    }
    return 'Cliente alterado com sucesso!';
}

function pegarClientePorEmailSenha($email, $senha) {
    $sql = "SELECT * FROM cliente WHERE email= '$email' and senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}