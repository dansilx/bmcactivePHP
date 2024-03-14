<?php
$vetor1 = range(1,10);
$vetor2 = range(5,14);

$nro_ncomuns = array_merge(array_diff($vetor1, $vetor2), array_diff($vetor2, $vetor1));

print_r($nro_ncomuns)
?>