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

/*
[1, 3, 2, 1] false 
[1, 3, 2] true 
[1, 2, 1, 2] false 
[3, 6, 5, 8, 10, 20 ] , 15] falso 
[1, 1, 2, 3, 4, 4] falso 
[1, 4, 10, 4, 2] falso 
[10, 1, 2, 3, 4, 5] verdadeiro 
[1, 1, 1 , 2, 3] falso 
[0, -2, 5, 6] verdadeiro 
[1, 2, 3, 4, 5, 3, 5, 6] falso 
[40, 50, 60, 10, 20, 30] falso 
[ 1, 1] verdadeiro 
[1, 2, 5, 3, 5] verdadeiro
[1, 2, 5, 5, 5] falso 
[10, 1, 2, 3, 4, 5, 6, 1] falso 
[1, 2, 3, 4, 3, 6] verdadeiro 
[1, 2, 3 , 4, 99, 5, 6] verdadeiro 
[123, -17, -5, 1, 2, 3, 12, 43, 45] verdadeiro 
[3, 5, 67, 98, 3] verdadeiro 

*/