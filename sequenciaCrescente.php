<?php


function sequenciaCrescente($numeros) {

    $erros = 0;

    for ($i = 1; $i < count($numeros); $i++) {

        if ($numeros[$i-1] >= $numeros[$i]) {
            array_splice($numeros, $i, 1);
            $erros++;
        }
    }
    if ($erros > 1) {
        return "falso";
    } else {
        return "verdadeiro";
    }
}

$num = [3, 6, 5, 8, 10, 20, 15];

echo sequenciaCrescente($num);
