<?php

$estadoSiglas = ['ES', 'MG', 'RJ', 'SP'];
$estadoNomes = array_reverse(['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo']);

$capitais = [];

for ($i = 0; $i < count($estadoSiglas); $i++){
    $capitais[$estadoSiglas[$i]] = $estadoNomes[$i];
}
foreach ($capitais as $key => $capital){
    echo $key . " - " . $capital . "<br>";
}
