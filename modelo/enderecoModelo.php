<?php
 function addEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $id){
     $comando="insert into endereco (logradouro, numero, complemento, bairro, cidade, cep, id)"
             . "values ('$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep', '$id')";
     $cnx= conn();
     $resul= mysqli_query($cnx, $comando);
     if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Endereço cadastrado com sucesso!';
 }
 
 function pegarTodosEnderecosId($id){
    $comando="select * from endereco where id=$id";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    $enderecos = array();
    while ($endereco = mysqli_fetch_assoc($resul)){
        $enderecos[]=$endereco;
    }
    return $enderecos;
}


function pegarEnderecoId($id){
    $comando="select * from endereco where idendereco=$id";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    $endereco= mysqli_fetch_assoc($resul);
    return $endereco;
}
function deletarEndereco($id){
    $comando="delete from endereco where idendereco=$id";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    
    return "Endereco deletado";
}
function editarEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idendereco){
    $comando="update endereco set logradouro='$logradouro', numero=$numero, complemento='$complemento', bairro='$bairro', "
            . "cidade='$cidade', cep='$cep' where idendereco='$idendereco'";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Dados atualizados com sucesso!';
}

function listarEnderecos($id){
    $sql = "SELECT * FROM endereco WHERE id =$id";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();

    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}