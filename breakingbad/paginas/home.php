<div class="row">
<?php

    $link = ("https://breakingbadapi.com/api/characters");
    $link = file_get_contents($link);
    $dados = json_decode($link);

// print_r ($dados)
?>
<img src="imagens/fundo1.png" alt="breaking">
<?php
foreach ($dados as $personagem){
    
    ?>
    <div class="col-12 col-md-3" >
        <div class="container card bg-dark text-center">
                <img src="<?=$personagem-> img?>" alt="Imagem do ator">
                <b> <?=$personagem->nickname?></b>
                <p>
                    <a href="personagem/<?=$personagem->id?>" class="btn btn-success">
                    Detalhes do personagem
                </a>
                </p>
            </div>
        </div>
    <?php
    }
?>