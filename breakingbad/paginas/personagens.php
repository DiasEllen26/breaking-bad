
<?php

$link= "https://breakingbadapi.com/api/characters/";
$link = file_get_contents($link);
$dados = json_decode($link);

// print_r($dados);

foreach ($dados as $personagem){
    
    ?>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="container card bg-dark text-center">
                <img src="<?=$personagem-> img?>" alt="Imagem do ator" class="w-100">
                <b> <?=$personagem->nickname?></b>
                <p>
                    <a href="personagem/<?=$personagem->char_id?>" class="btn btn-success">
                    Detalhes do personagem
                </a>
                </p>
            </div>
        </div>
    </div>
    <?php
    }
?>
