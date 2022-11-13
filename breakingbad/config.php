<?php

$link= "https://www.breakingbadapi.com/api/";
$link= file_get_contents($link);
$dados = json_decode($link);