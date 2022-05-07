<?php


function primos($numeroInicial, $numeroFinal) {
    
    $numerosPrimos = array();

    for ($i= $numeroInicial; $i < $numeroFinal+1; $i++) {

        $num = 0;

        for ($c = 1; $c < $i+1; $c++) {
            if ($i % $c == 0) {
              $num++;
            }
        }
        if ($num == 2) {
            $numerosPrimos[] = $i;
        }
    }

    foreach ($numerosPrimos as $value) {
        echo $value."<hr>";
    }
}

primos(1, 1000);