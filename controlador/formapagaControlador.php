<?php
require_once "modelo/formapagaModelo.php";
/** admin */
function adicionar(){
	
	if (ehPOST()) {
            $pagamento = $_POST["descricao"];
    /*VALIDAÇÕES*/        
            
        $errors = array();
            
          if(strlen(trim($pagamento)) == 0){
            $errors[] = "Insira uma forma de pagamento válida!! <br>";
        }
      
        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("pagamento/formulario", $dados);
        } else {     
         $msg = adicionarPagamento($pagamento);
		echo $msg;
        }             
    } else {
	exibir("pagamento/formulario");
    }
		
} 
/** anon */
	function listarPagamentos(){
		$dados = array();
		$dados["pagamentos"] = pegarTodosPagamentos();
		exibir("pagamento/listar", $dados);
	}
        
        /* VER A CUPONS */
        
/** admin */        
        function ver($id){
            $dados["pagamento"] = pegarPagamentoPorId($id);
            exibir("pagamento/visualizar", $dados);
        }
        
        /* DELETAR PAGAMENTO */
/** admin */        
        function deletar($id){
            $msg = deletarPagamento($id);
            redirecionar("formapaga/listarPagamentos");
        }
         /* EDITAR PAGAMENTO */
        
/** admin */
        function editar($id){
            
	if (ehPOST()) {
            $pagamento = $_POST["descricao"];
                editarPagamento($pagamento);
                redirecionar("formapaga/listarPagamentos");
            }else{
                $dados["pagamento"] = pegarPagamentoPorId($id);
                exibir("pagamento/formulario", $dados);
            }
        }