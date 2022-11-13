<?php

$link = "https://www.breakingbadapi.com/api/episodes/";
$link = file_get_contents($link);
$dados = json_decode($link);

// print_r($dados);

foreach ($dados as $episodios){
    ?>
    
    <div class="col-12 col-md-3 w-100">
        <div class="row">
            <div class="container card bg-dark tx-light text-center">
            <h1><?=$episodios->title?></h1>
            <p>Temporada <?=$episodios->season?></p>
            <p><b>Lançamento: </b><?=$episodios->air_date?></p>
            </div>
        </div>
        <?php
    }
?>
    </div>