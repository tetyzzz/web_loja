  
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $erros;
        ?>
        <form action="" method="POST">
            
            <ul>
                <?php foreach ($produtos as $busca):?>
                    
                <li><a href ="./produto/ver/<?=$busca['idproduto']?>"><?=$busca ['nomeproduto'];?></a></li>
            <?php endforeach;?>
                
        </ul>
        </form>
    </body>
</html>