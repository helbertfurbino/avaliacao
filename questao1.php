<?php

$estadosSiglas = ['ES', 'MG', 'RJ', 'SP'];
$estadoNomes = array_reverse(['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo']);

$capitais = [];

for ($i = 0; $i < count($estadosSiglas); $i++){
    $capitais[$i] = [$estadosSiglas[$i] => $estadoNomes[$i]];
}


for ($i = 0; $i < count($capitais); $i++){
    echo key($capitais[$i]) . " - " . $capitais[$i][key($capitais[$i])] . "<br>";
}
