<?php

$numerosSortidos = array();
$numerosRepetidos = array();
$numerosUnicos = array();

for ($i = 0; $i < 20; $i++){
    $numerosSortidos[] = rand(1, 10);
}

echo "Números sorteados: <br>";
foreach($numerosSortidos as $value) {
    echo $value." ";
}

echo "<hr>";

foreach ($numerosSortidos as $value) {
    $num = 0;

    foreach ($numerosSortidos as $values) {
        if ($value == $values) {
            $num++;
        }
    }
    if ($num == 1) {
        echo "número único: ".$value."<br>";
    }
}
