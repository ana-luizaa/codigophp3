<?php
// Programa que lê dois números inteiros e faz a soma e é exibida no final //

echo "Digite o nome desejado: ";
$nome = fgets(STDIN);

echo "Digite o primeiro valor: ";
$valor1 = fgets(STDIN);

echo "Digite o segundo valor: ";
$valor2 = fgets(STDIN);


if ($valor2 == 0) {
    echo "Erro: divisão por zero não é permitida.\n";

} else {
    $divisao = $valor1 / $valor2;
    echo "Nome: $nome";
    echo "Resultado da divisão entre $valor1 e $valor2 é: $divisao\n";
}
?>
