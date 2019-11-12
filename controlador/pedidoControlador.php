<?php

function salvarPedido (){
    if (ehPost()){
        $formapaga = $_POST['descricao'];
        $endereco = $_POST['id'];
        $cupom = $_POST[''];
        $produtos = $_SESSION['carrinho'];
    }
    
}

CREATE TABLE pedido (
	idPedido BIGINT(11) NOT NULL AUTO_INCREMENT,
	idCliente BIGINT(11) NOT NULL,
	formapaga BIGINT NOT NULL,
	PRIMARY KEY(idPedido),
	FOREIGN KEY(idCliente) REFERENCES cliente(id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(formapaga) REFERENCES formapagamento(idFormaPagamento) ON DELETE CASCADE ON UPDATE CASCADE
);
