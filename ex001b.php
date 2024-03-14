<?php
$vetor1 = range(1,10);
$vetor2 = range(7, 16);

$nro_ncomuns = array();

foreach($vetor1 as $elemento1) {
    if(!in_array($elemento1, $vetor2)){
        $nro_ncomuns[] = $elemento1;
    }
}

foreach($vetor2 as $elemento2) {
    if(!in_array($elemento2, $vetor1)){
        $nro_ncomuns[] = $elemento2;
    }
}

print_r($nro_ncomuns);
?>