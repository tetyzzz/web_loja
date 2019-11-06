<?php
function adicionarPagamento($pagamento){
     $sql = "INSERT INTO FormaPagamento(descricao) VALUES ('$pagamento')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
       die('Erro ao adicionar a Forma de Pagamento'. mysqli_error($cnx));
    }
  
    return 'Forma de Pagamento adicionada com sucesso! <br><br> <a href="./adicionar" class="btn btn-primary">Voltar</a>';
}
function pegarTodosPagamentos(){
		$sql = "SELECT * FROM FormaPagamento";
		$resultado = mysqli_query(conn(), $sql);
		$pagamentos = array();
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$pagamentos[] = $linha;
		}
		return $pagamentos;
	}
      
     /* VER pagamento PELO ID */   
        
        function pegarPagamentoPorId($id){
            $sql = "SELECT * FROM FormaPagamento WHERE  idFormaPagamento = $id";
            $resul = mysqli_query(conn(), $sql);
            $pagamento = mysqli_fetch_assoc($resul);
            return $pagamento;
        }
        
     /* DELETAR forma */   
        function deletarPagamento($id){
            $sql = "DELETE FROM FormaPagamento WHERE idFormaPagamento = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao deletar Forma de Pagamento' . mysqli_error($cnx));
            }
            return 'Forma de Pagamento deletada com secesso';
        }
         /* EDITAR FormaPagamento */
      
            function editarPagamento($pagamento){
            $sql = "UPDATE FormaPagamento SET descricao = '$pagamento' WHERE idFormaPagamento = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao editar Forma de Pagamento' . mysqli_error($cnx));
            }
            return 'Forma de Pagamento editada com secesso';
        }