<h2>Lista de produtos por categoria</h2>
<div id="listaProdutos">
    <?php
    foreach ($categorias as $categoria):
        ?>
        <h2><?= $categoria['categoria'] ?></h2>	
        <div class="campos">
            <div class="campoNomeProduto">
                <h3>Produto</h3>
            </div>
            <div class="campoPrecoProduto">
                <h3>Preço</h3>
            </div>
            <div class="campoEstoqueProduto">
                <h3>Estoque</h3>
            </div>
        </div>        
        <hr size="" width="100%">
        <?php
        foreach ($produtos as $produto):
            if ($categoria["idcategoria"] == $produto["idcategoria"]) {
                ?>
                <div class="cadaProduto">
                    <div class="sobreNomeProduto">
                        <div>
                            <p><?= $produto['nome'] ?></p>
                        </div>
                    </div>
                    <div class="sobrePrecoProduto">
                        <p><?= $produto['preco'] ?></p>
                    </div>
                    <div class="sobreEstoqueProduto">
                        <p><?= $produto['quantidade'] ?></p>
                    </div>
                </div>
                <hr size="" width="100%">
                <?php
            }
        endforeach;
    endforeach;
    ?>
</div><br>
<a href="cliente/adm"><button class="botao">Voltar</button></a><br><br>

