<?php

function diviSivel($numero) {

    if ((!fmod($numero, 2)) && (!fmod($numero, 3)) && (!fmod($numero, 10)))
	$numero = $numero;
    else {
	$numero = diviSivel($numero + 1);
    }

    return $numero;
}
$num = 1;
"o menor número é:" . var_dump(diviSivel($num));
