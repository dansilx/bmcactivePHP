<?php
echo "Digite seu nome: ";
$nome = readline();
echo "Digite seu sexo (Masculino/Feminino):";
$sexo = readline();
echo "Digit sua idade: ";
$idade = readline();

if($sexo == "Feminino" && $idade < 25){
    echo $nome . ", ACEITA.";
} else {
    echo $nome . ", NÃO ACEITA.";
}
?>