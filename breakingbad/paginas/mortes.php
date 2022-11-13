<?php
    $link= "https://www.breakingbadapi.com/api/deaths";
    $link= file_get_contents($link);
    $dados= json_decode($link);

    //print_r($dados);
    foreach ($dados as $mortes){
    ?>
        <div class="card text-center bg-dark tx-light">
        <div class="row">
            <div class="col-6">
                <b><?=$mortes->death?></b>
                <p><b>Causa da morte: </b><?=$mortes->cause?></p>
                <p><b>Responsável: </b><?=$mortes->responsible?></p>
                <p>Episódio <?=$mortes->episode?>, temporada <?=$mortes->season?>.</p>
            </div>
    </div>
        </div>
        <?php
    }