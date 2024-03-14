<?php
function tabuada($numero) {
    for($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . $numero * $i . "\n";
    }
}

echo "Digite um número: ";
$numero = readline();

tabuada($numero);
?>
