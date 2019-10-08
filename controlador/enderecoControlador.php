<?php
require_once "modelo/enderecoModelo.php";

/**user*/
function novoende($id){
    if (ehPost()){
        $logradouro=$_POST['logradouro'];
        $numero=$_POST['numero'];
        $complemento=$_POST['complemento'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $cep=$_POST['cep'];
        
        
        $erros= array();
        
        if (strlen(trim($logradouro))== 0){
                $erros[]="Campo vazio.<br>";
            }
        if (strlen(trim($numero))== 0){
                $erros[]="Campo vazio.<br>";
            }
        if (strlen(trim($complemento))== 0){
                $erros[]="Campo vazio.<br>";
            }
        if (strlen(trim($bairro))== 0){
                $erros[]="Campo vazio.<br>";
            }
        if (strlen(trim($cidade))== 0){
                $erros[]="Campo vazio.<br>";
            }
        if (strlen(trim($cep))== 0){
                $erros[]="Campo vazio.<br>";
            }   
         
            
        if (count($erros)==0){
            $erros[]= addEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $id);
            $dados= array();
            $dados["erros"]= $erros;
            $dados["id"]=$id;
            exibir("endereco/cadastroEndereco", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            $dados["id"]=$id;
            exibir("endereco/cadastroEndereco", $dados);
        }
        
    }else{
        $dados["id"]=$id;
        exibir("endereco/cadastroEndereco", $dados);
    }
    
}

/**user*/
function verEnderecoId($idendereco, $id){
    $dados= array();
    $dados['endereco']= pegarEnderecoId($idendereco);
    $dados['id']= $id;
    exibir("endereco/detalharEndereco", $dados);
}

/**user*/
function deletarE($idendereco){
    $msg = deletarEndereco($idendereco);
    redirecionar("usuario/listarUsuarios");
}

/**user*/
function editarE($idendereco, $id){
    if (ehPost()){
        $logradouro=$_POST['logradouro'];
        $numero=$_POST['numero'];
        $complemento=$_POST['complemento'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $cep=$_POST['cep'];
        
        
        $erros= array();
        
        if (strlen(trim($logradouro))== 0){
                $erros[]="O campo LOGRADOURO é obrigatório.<br>";
            }
        if (strlen(trim($numero))== 0){
                $erros[]="O campo NÚMERO é obrigatório.<br>";
            }
        if (strlen(trim($complemento))== 0){
                $erros[]="O campo COMPLEMENTO é obrigatório.<br>";
            }
        if (strlen(trim($bairro))== 0){
                $erros[]="O campo BAIRRO é obrigatório.<br>";
            }
        if (strlen(trim($cidade))== 0){
                $erros[]="O campo CIDADE é obrigatório.<br>";
            }
        if (strlen(trim($cep))== 0){
                $erros[]="O campo CEP é obrigatório.<br>";
            }   
         
            
        if (count($erros)==0){
            editarEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idendereco);
            redirecionar("usuario/listarUsuarios");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            $dados['id']= $id;
            exibir("endereco/cadastroEndereco", $dados);
        }
        
    }else{
        $dados["endereco"]= pegarEnderecoId($idendereco);
        $dados['id']= $id;
        exibir("endereco/cadastroEndereco", $dados);
    }
}

/** anon */
function listarEndereco(){
    $dados = array();
    $dados ["endereco"] = editarendereco();
    exibir("endereco/listarendereco", $dados);
}