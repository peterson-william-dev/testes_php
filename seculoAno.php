<?php

function seculoAno($ano) {
    $seculo = $ano/ 100;

    $seculo = ceil($seculo);

    return $seculo;
}

echo seculoAno(2500);