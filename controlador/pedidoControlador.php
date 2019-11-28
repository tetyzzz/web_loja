<?php

require_once 'modelo/pedidoModelo.php';
require_once 'modelo/produtoModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/cupomModelo.php';
require_once 'modelo/formapagaModelo.php';

function index() {
    $dados = array();
    if (ehPost()) {
        $nomeCupom = $_POST['cupom'];
        $dados['cupom'] = pegarDescontoCupom($nomeCupom);
    }

    $produtos = $_SESSION['carrinho'];
    $quant = 0;
    $total = 0;

    foreach ($produtos as $produto => $id) {
        $prod = pegarprodutoPorId($id);
        $quant++;
        $total += $prod['preco'];
        $listaProdutos[] = $prod;
    }

    $total = number_format($total, 2);

    $id = acessoPegarIdDoUsuario();
    $dados["enderecos"] = pegarTodosEnderecosId($id);
    $dados["formasPagamento"] = pegarTodosPagamentos();
    $dados["produtos"] = $listaProdutos;
    $dados["total"] = $total;
    exibir("pedido/pedido", $dados);
}

function salvarPedido() {
    if (ehPost()) {
        $formapaga = $_POST['formaPagamento'];
        $idcliente = acessoPegarIdDoUsuario();
        $endereco = $_POST['endereco'];
        $produtos = $_SESSION["carrinho"];
        $msg = registrarPedido($idcliente, $endereco, $formapaga, $produtos);
        
        $erro=0;
        if($endereco==0){
            echo "Informe um endereco de entrega!";
            $erro+=1;
        }
        if($formapaga==0){
            echo "Informe uma forma de pagamento!";
            $erro+=1;
        }
        
        if ($erro==0){
            exibir("pedido/pedidoFim");
        }
            
        
    } else {
        exibir("");
    }
}

function listarPedidopeloTempo() {
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];

        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros['data1'] = "*";
        }
        if ($data2 == null) {
            $erros['data2'] = "*";
        }
        if ($data1 > $data2) {
            $erros['datasInvalidas'] = "*Selecione um intervalo de tempo válido.";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosTempo($data1, $data2);
            $dados['data1'] = $data1;
            $dados['data2'] = $data2;
            exibir("pedido/listarPedidopeloTempo", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioPedidopeloTempo", $dados);
        }
    } else {
        exibir("pedido/formularioPedidopeloTempo");
    }
}

function listarPedidoLoca() {
    if (ehPost()) {
        $cidade = $_POST['cidade'];

        $dados = array();
        $erros = array();
        if ($cidade == null) {
            $erros['cidade'] = "*";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosLoca($cidade);
            $dados['cidade'] = $cidade;
            exibir("pedido/listarPedidoLoca", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioPedidoLoca", $dados);
        }
    } else {
        exibir("pedido/formularioPedidoLoca");
    }
}

function calcularFaturaporPeriodo() {
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];

        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros['data1'] = "*";
        }
        if ($data2 == null) {
            $erros['data2'] = "*";
        }
        if ($data1 > $data2) {
            $erros['datasInvalidas'] = "*Selecione um intervalo de tempo válido.";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarFaturamentoPeriodo($data1, $data2);
            $dados['data1'] = $data1;
            $dados['data2'] = $data2;
            exibir("pedido/faturamentoTempo", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioFaturaTempo", $dados);
        }
    } else {
        exibir("pedido/formularioFaturaTempo");
    }
}
