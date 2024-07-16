<?php
// Programa que lê o nome desejado e 2 valores e após a leitura dos valores, vai exibir o resultado final.

echo "Digite o nome desejado : ";
$nome = fgets(STDIN);

echo "Digite o valor 1 : ";
$valor1 = fgets(STDIN);

echo "Digite o valor 2 : ";
$valor2 = fgets(STDIN);

if ($valor2 == 0) {
    echo "Erro: divisão por zero não é permitida.\n";
} else {
    $divisao = $valor1 / $valor2;
    echo "Nome : $nome";
    echo "Resultado da divisão entre $valor1 e $valor2 é: $divisao\n";
}
?>
