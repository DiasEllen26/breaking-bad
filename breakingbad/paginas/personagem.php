<?php

$link = "https://breakingbadapi.com/api/characters/{$id}";
$link = file_get_contents($link);
$dados = json_decode($link);

foreach ($dados as $personagem){
?>

<div class="card bg-light text-dark">
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="<?=$personagem->img?>" class="w-100">
        </div>
        <div class="col-12 col-md-9 bg">
            <h1><?=$personagem->nickname?></h1>
            <p><b>Nome ator: </b><?=$personagem->name?></p>
            <p><b>Nascimento: </b><?=$personagem->birthday?></p>
            <p><b>Situação: </b><?=$personagem->status?></p>
            <p><b>Categoria: </b><?=$personagem->category?></p>
                </div>
    </div>
    <?php
    }
    ?>
</div>