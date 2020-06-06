<?php

$estados = ['ES', 'MG', 'RJ', 'SP'];
$cidades = array_reverse(['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo']);

$capitais = [];

for ($i = 0; $i < count($estados); $i++){
    $capitais[$i] = [$estados[$i] => $cidades[$i]];
}


for ($i = 0; $i < count($capitais); $i++){
    echo key($capitais[$i]) . "-" . $capitais[$i][key($capitais[$i])] . "<br>";
}
