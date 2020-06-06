<?php

$arrayDivisiveis = [];
$somaDivisiveis = 0;

for ($i = 1; $i < 1000; $i++){
    if ((!fmod($i, 3)) || (!fmod($i, 5))) {
	array_push($arrayDivisiveis, $i);
    }
}

echo "Os números abaixo de 1000 divisíveis por 3 e 5 são: ";

for ($i = 0; $i < count($arrayDivisiveis); $i++){
    $somaDivisiveis += $arrayDivisiveis[$i];
    echo $arrayDivisiveis[$i] . ",";
}

echo "A soma dos números abaixo de 1000 divisíveis por 3 e 5 é: ";
echo $somaDivisiveis;


