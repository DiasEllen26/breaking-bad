<?php
    $link= "https://breakingbadapi.com/api/quotes";
    $link = file_get_contents($link);
    $dados = json_decode($link);


//print_r($dados);

foreach ($dados as $citacoes){
    
    ?>
    <div class="row">
    <div class="col-6 col-sm-4 w-100">
        <div class="card text-center bg-dark tx-light">
                <b> <?=$citacoes->quote?></b>
                <p><i>— <?=$citacoes->author?></i></p>
            </div>
    
    <?php
    }
?>
</div>
