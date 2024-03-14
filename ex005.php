<?php
function imprimirRecibo($nome, $livro, $tipo, $dataEmprestimo) {
    $dataDevolucao = new DateTime($dataEmprestimo);
    if ($tipo == "professor"){
        $dataDevolucao->modify('+10 day');
    } else if ($tipo == "aluno") {
        $dataDevolucao->modify('+3 day');
    }

    echo "Nome: " . $nome . "\n";
    echo "Livro: " . $livro . "\n";
    echo "Tipo: " .$tipo . "\n";
    echo "Data do Empréstimo: " . $dataEmprestimo . "\n";
    echo "Data para Devolução ". $dataDevolucao->format('d/m/Y') . "\n"; 
}

echo "Digite seu nome: ";
$nome = readline();
echo "Digite o nome do livro: ";
$livro = readline();
echo "Digite o tipo de usuário (professor ou aluno): ";
$tipo = readline();
echo "Digite a data do empréstimo (dd/mm/aaaa): ";
$dataEmprestimo = readline();

imprimirRecibo($nome, $livro, $tipo, $dataEmprestimo)
?>